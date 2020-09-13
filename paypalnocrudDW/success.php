<?php
error_reporting ( 0 );
require_once 'paypal.php';
$result = verifyWithPayPal($_REQUEST ['tx']);
?>
First name: <?php echo $result['first_name']; ?>
<br>
Last name: <?php echo $result['last_name']; ?>
<br>
Payment status: <?php echo $result['payment_status']; ?>
<br>
Business: <?php echo $result['business']; ?>
<br>
Payer email: <?php echo $result['payer_email']; ?>
<br>
Payment gross: <?php echo $result['payment_gross']; ?>
<br>
Currency: <?php echo $result['mc_currency']; ?>
<br>
Address street: <?php echo $result['address_street']; ?>
<br>
Address city: <?php echo $result['address_city']; ?>
<br>
Address state: <?php echo $result['address_state']; ?>
<br>
Address country: <?php echo $result['address_country']; ?>
<br>
Transaction id: <?php echo $result['txn_id']; ?>
<br>
Payment fee: <?php echo $result['payment_fee']; ?>
<br><br>
<b>List Products</b>
<?php
foreach ( $result['listProducts'] as $product ) {
	echo '<br>Product Id: ' . $product['item_number'];
	echo '<br>Product Name: ' . $product['item_name'];
	echo '<br>Quantity: ' . $product['quantity'];
	echo '<br>Gross: ' . $product['mc_gross'];
	echo '<br>==================================';
}
?>