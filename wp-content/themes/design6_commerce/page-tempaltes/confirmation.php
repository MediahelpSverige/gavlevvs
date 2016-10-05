<?php 

/* Template name: confirmation */ 



get_header();


$sharedSecret = 'sharedSecret';
$orderID = $_SESSION['klarna_order_id'];

$connector = Klarna_Checkout_Connector::create(
    $sharedSecret,
    Klarna_Checkout_Connector::BASE_TEST_URL
);

$order = new Klarna_Checkout_Order($connector, $orderID);


try {
    $order->fetch();
} catch (Klarna_Checkout_ApiErrorException $e) {
    var_dump($e->getMessage());
    var_dump($e->getPayload());
    die;
}


if ($order['status'] == 'checkout_incomplete') {
    echo "Checkout not completed, redirect to checkout.php";
    die;
}


$snippet = $order['gui']['snippet'];

echo "<div>{$snippet}</div>";

unset($_SESSION['klarna_checkout']);


?>