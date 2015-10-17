<h1>New product</h1>
<form action="products.php?action=create" method="post">
	<label for="product_name">Name:</label>
	<input type="text" id="product_name" name="product[name]">
	<br>

	<label for="product_price">Price:</label>
	<input type="text" id="product_price" name="product[price]">
	<br>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
