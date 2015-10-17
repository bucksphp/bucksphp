<a href="products.php?action=new" class="btn btn-primary">New Product</a>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ( $products as $product ): ?>
			<tr>
				<td><?= $product['name'] ?></td>
				<td><?= $product['price'] ?></td>
				<td>
					<a href="products.php?action=show&amp;id=<?= $product['id'] ?>" class="btn btn-default">View</a>
					<a href="products.php?action=edit&amp;id=<?= $product['id'] ?>" class="btn btn-default">Edit</a>
					<a onclick="return confirm('Are you sure?')" href="products.php?action=delete&amp;id=<?= $product['id'] ?>" class="btn btn-default">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>