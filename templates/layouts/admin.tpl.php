<!doctype html>
<html>
	<head>
		<title>Cattitude84 Control Panel</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<?php if ( isset($_SESSION['message']) ): ?>
				<div class='alert alert-warning'><?= $_SESSION['message'] ?></div>
				<?php unset($_SESSION['message']); ?>
			<?php endif; ?>
			
			<?= $page_content ?>
		</div>
	</body>
</html>