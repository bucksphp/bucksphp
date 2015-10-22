<div class="row">
	<div class="col-sm-6">
		<?php /* Print dynamic image tag */ ?>
		<img src="<?php echo $shirt['image']; ?>" 
			alt="<?php echo $shirt['name']; ?>">
	</div>
	<div class="col-sm-6">
		<?php /* Format price to 2 decimal points */ ?>
		<h3>$<?php echo number_format($shirt['price'], 2); ?></h3>
		
		<?php /* Print product description */ ?>
		<p><?php echo $shirt['description']; ?></p>

		<?php /* Print link to add product to cart */ ?>
		<p>
			<a class="btn btn-primary" href="cart.php?action=add&amp;id=<?php echo $shirt['id'] ?>">Add to Cart</a>
		</p>
	</div>
</div>

<hr>
<a href="index.php">Back to all shirts</a>