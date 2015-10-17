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

		<?php /* Print link to product on Etsy */ ?>
		<p>
			<a class="btn btn-primary" href="<?php echo $shirt['link']; ?>">Buy on Etsy</a>
		</p>
	</div>
</div>

<hr>
<a href="index.php">Back to all shirts</a>