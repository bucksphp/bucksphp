<div class="row">
	<?php /* Loop through shirts and print thumbnails with links to detail pages. Note the foreach/endforeach alternate syntax. It's great for mixing in with HTML. */ ?>
	<?php foreach ( $shirts as $id => $shirt ): ?>
		<div class="col-sm-4">
			<a href="detail.php?id=<?php echo $id; ?>"><img src="<?php echo $shirt['image']; ?>" alt="<?php echo $shirt['name']; ?>"></a>
			<h4><a href="detail.php?id=<?php echo $id; ?>"><?php echo $shirt['name'] ?></a></h4>
		</div>
	<?php endforeach; ?>
</div>