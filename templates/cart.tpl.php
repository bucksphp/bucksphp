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