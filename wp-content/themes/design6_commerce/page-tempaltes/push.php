<?php 

/* Template name: push */

get_header();

$sharedSecret = 'sharedSecret';
@$orderID = $_GET['klarna_order_id'];

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

if ($order['status'] === "checkout_complete") {
    // At this point make sure the order is created in your system and send a
    // confirmation email to the customer
    $update['status'] = 'created';

    /*
    $update['merchant_reference'] = array(
        "orderid1" => "someUniqueId..."
    );
    */
    
    $order->update($update);
}

?>