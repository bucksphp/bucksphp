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
include 'includes/data.php';

// calculate total price of cart
$cart_total = 0.0;

foreach ( $_SESSION['cart'] as $product_id => $qty ) {
	$cart_total += $shirts[$product_id]['price'] * $qty;
}

// set page title and include HTML header
$page_title = 'View Cart';
include 'includes/header.php';

?>

<?php // If there are items in the cart, print this table: ?>
<?php if ( count($_SESSION['cart']) > 0 ): ?>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Product</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Subtotal</th>
			</tr>
		</thead>
		<tbody>
			<?php // print a row for each product in the cart ?>
			<?php foreach ( $_SESSION['cart'] as $product_id => $qty )
	: ?>
				<?php // extract product data from $shirts array ?>
				<?php $product = $shirts[$product_id]; ?>
				<tr>
					<td><?= $product['name'] ?></td>
					<td><?= number_format($product['price'], 2) ?></td>
					<td><?= number_format($qty) ?></td>
					<td><?= number_format($product['price'] * $qty, 2) ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<?php // print cart total in the table footer ?>
		<tfoot>
			<tr>
				<td colspan="3"><b>Total</b></td>
				<td><b>$<?= number_format($cart_total, 2) ?></b></td>
			</tr>
		</tfoot>
	</table>

	<?php // Paypal shopping cart form. See https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/cart_upload/ for details. ?>
	<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<?php // POST data required by Paypal ?>
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="upload" value="1">
		<input type="hidden" name="business" value="bucksphp@gmail.com">
		<input type="hidden" name="currency_code" value="USD">

		<?php $i = 0; // Paypal requires the cart items to be indexed by an incrementing integer starting with 1 ?>

		<?php // Print name, amount, and quantity inputs for each item in the cart ?>
		<?php foreach ( $_SESSION['cart'] as $product_id => $qty ): ?>
			<?php $shirt = $shirts[$product_id]; ?>
			<?php $i++; ?>
			<input type="hidden" name="item_name_<?= $i ?>" value="<?= $shirt['name'] ?>">
			<input type="hidden" name="amount_<?= $i ?>" value="<?= $shirt['price'] ?>">
			<input type="hidden" name="quantity_<?= $i ?>" value="<?= $qty ?>">
		<?php endforeach; ?>

		<?php // Print empty cart link and checkout button ?>
		<p>
			<a href="cart.php?action=empty" class="btn btn-default">Empty Cart</a>
			<button type="submit" class="btn btn-primary btn-lg pull-right">Checkout</button>
		</p>
	</form>

<?php // If there are no products in the cart, and we've arrived here via the ?action=thanks link, print this message ?>
<?php elseif ( $action == 'thanks' ): ?>
	<p>Thanks for shopping!</p>

<?php // We're viewing an empty cart ?>
<?php else: ?>
	<p>No products in cart. Get shoppin!</p>
<?php endif; ?>

<?php
// print HTML footer
include 'includes/footer.php';
?>