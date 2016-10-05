<?php 

/* Template name: checkout */


get_header();


$order = null;
$eid = '0';
$sharedSecret = 'sharedSecret';
$connector = Klarna_Checkout_Connector::create(
    $sharedSecret,
    Klarna_Checkout_Connector::BASE_TEST_URL
);



$cart = array(
    array(
        'reference' => '123456789',
        'name' => 'Klarna t-shirt',
        'quantity' => 2,
        'unit_price' => 12300,
        'discount_rate' => 1000,
        'tax_rate' => 2500
    ),
    array(
        'type' => 'shipping_fee',
        'reference' => 'SHIPPING',
        'name' => 'Shipping Fee',
        'quantity' => 1,
        'unit_price' => 4900,
        'tax_rate' => 2500
    )
);


if (array_key_exists('klarna_order_id', $_SESSION)) {
    // Resume session
    $order = new Klarna_Checkout_Order(
        $connector,
        $_SESSION['klarna_order_id']
    );
    try {
        $order->fetch();
        // Reset cart
        $update['cart']['items'] = array();
        foreach ($cart as $item) {
            $update['cart']['items'][] = $item;
        }
        $order->update($update);
    } catch (Exception $e) {
        // Reset session
        $order = null;
        unset($_SESSION['klarna_order_id']);
    }
}


//IF NEW ORDER

if ($order == null) {

	// Start new session
    $create['purchase_country'] = 'SE';
    $create['purchase_currency'] = 'SEK';
    $create['locale'] = 'sv-se';
    $create['merchant'] = array(
        'id' => $eid,
        'terms_uri' => 'http://example.com/terms.html',
        'checkout_uri' => 'http://localhost:8080/design/checkout/',
        'confirmation_uri' => 'http://localhost:8080/design/tack-for-ditt-kop/' .
            '?klarna_order_id={checkout.order.id}',
        // You can not receive push notification on non publicly available URI
        'push_uri' => 'http://localhost:8080/design/push/' .
            '?klarna_order_id={checkout.order.id}'
    );

    $update['cart']['items'] = array();

    foreach ($cart as $item) {
        $create['cart']['items'][] = $item;
    }

    $order = new Klarna_Checkout_Order($connector);


    try {
        $order->create($create);
        $order->fetch();
    } catch (Klarna_Checkout_ApiErrorException $e) {
        var_dump($e->getMessage());
        var_dump($e->getPayload());
        die;
    }



}


// Store location of checkout session
$_SESSION['klarna_order_id'] = $sessionID = $order['id'];


print_r($order['gui']['snippet']);


if (isset($order['gui']['snippet'])) {
    // Display checkout
    $snippet = $order['gui']['snippet'];
    // DESKTOP: Width of containing block shall be at least 750px
    // MOBILE: Width of containing block shall be 100% of browser window (No
    // padding or margin)
    echo "<div>{$snippet}</div>";
}






?>