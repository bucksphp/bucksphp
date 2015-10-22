<?php

// start session handler
session_start();

// if ?action is present in the URL, use it
if ( isset($_GET['action']) ) {
	$action = $_GET['action'];
}
// otherwise, set action to null
else {
	$action = null;
}

// if a cart hasn't been created yet, do so now
if ( !isset($_SESSION['cart']) ) {
	$_SESSION['cart'] = array();
}

// ?action=add
if ( $action == 'add' ) {
	// extract product ID from GET variable or set it to null
	// this line uses the ternary conditional operator, a shorthand if/else statement
	$product_id = isset($_GET['id']) ? $_GET['id'] : null;

	// if the product ID key isn't in the cart array yet, set it to 1
	if ( !isset($_SESSION['cart'][$product_id]) ) {
		$_SESSION['cart'][$product_id] = 1;
	}
	// otherwise, increment it
	else {
		$_SESSION['cart'][$product_id]++;
	}

	// now that we've added the product to the cart, redirect to the view cart page (also handled by this file)
	// this will prevent more products from being added to the cart if the user happens to refresh the page
	header('Location: cart.php');
	exit;
}
// ?action=empty
else if ( $action == 'empty' ) {
	// various ways to empty our cart:

	// this works, but also removes any other data that happens to exist in the session
	// session_destroy();

	// restore the cart to an empty array
	// $_SESSION['cart'] = array();

	// unset cart variable
	unset($_SESSION['cart']);

	// redirect to view cart page
	header('Location: cart.php');
	exit;
}
// ?action=thanks
else if ( $action == 'thanks' ) {
	// this URL would be set in the Paypal settings as the place to redirect the user after payment (http://example.com/cart.php?action=thanks)
	// we just clear the cart and show a message below
	$_SESSION['cart'] = array();
}

// load product data
require 'includes/data.php';

// include template handler
require 'includes/template.php';

// calculate total price of cart
$cart_total = 0.0;

foreach ( $_SESSION['cart'] as $product_id => $qty ) {
	$cart_total += $shirts[$product_id]['price'] * $qty;
}

// print view cart page
$tpl = new Template('cart');
$tpl->vars = array(
	'page_title' => 'View Cart',
	'shirts' => $shirts,
	'action' => $action,
	'cart_total' => $cart_total
);
$tpl->render();

?>