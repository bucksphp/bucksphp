<h1>Edit product: <?= $product['name'] ?></h1>
<form action="products.php?action=update&amp;id=<?= $product['id'] ?>" method="post" enctype="multipart/form-data">
	<label for="product_name">Name:</label>
	<input type="text" value="<?= htmlentities($product['name']) ?>" id="product_name" name="product[name]">
	<br>

	<label for="product_price">Price:</label>
	<input type="text" value="<?= htmlentities($product['price']) ?>" id="product_price" name="product[price]">
	<br>

	<label for="product_image">Image:</label>
	<input type="file" id="product_image" name="product_image">
	<br>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
