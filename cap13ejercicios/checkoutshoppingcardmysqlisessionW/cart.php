<?php
session_start ();
require 'connect.php';
require 'item.php';
if ($_GET ['action'] == 'buy') {
	if (isset ( $_GET ['id'] )) {
		$result = mysqli_query ( $con, 'select * from product where id=' . $_GET ['id'] );
		$product = mysqli_fetch_object ( $result );
		$item = new Item ();
		$item->id = $product->id;
		$item->name = $product->name;
		$item->price = $product->price;
		$item->qty = 1;
		$item->photo = $product->photo;
		$index = - 1;
		if (isset($_SESSION ['cart'])) {
			$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
			for($i = 0; $i < count ( $cart ); $i ++)
				if ($cart [$i]->id == $_GET ['id']) {
					$index = $i;
					break;
				}
		}
		if ($index == - 1) {
			$_SESSION ['cart'] [] = $item;
			$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
		} else {
			$cart [$index]->qty ++;
			$_SESSION ['cart'] = $cart;
			$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
		}
		echo json_encode ( $cart );
	}
} else if ($_GET ['action'] == 'delete') {
	if (isset ( $_GET ['index'] )) {
		$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
		unset ( $cart [$_GET ['index']] );
		$cart = array_values ( $cart );
		$_SESSION ['cart'] = $cart;
		echo json_encode ( $cart );
	}
}

?>



