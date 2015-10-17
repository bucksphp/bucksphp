<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php /* if a $page_title variable is set, include it it the title tag */ ?>
			<?php if ( isset($page_title) ): ?>
				<?php echo $page_title . ' | '; ?>
			<?php endif; ?>
			Cattitude84's Super Awesome Website
		</title>
		<meta name="viewport" 
			content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" type="text/css" 
			href="css/bootstrap.min.css">
		<style type="text/css">
		img {
			max-width: 100%;
		}

		.col-sm-4 {
			text-align: center;
		}

		.col-sm-4 img {
			height: 300px;
		}
		</style>
	</head>
	<body>
		<!-- Bootstrap navigation header -->
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Cattitude84</a>
				</div>
				<div class="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="about.php">About</a>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">
			<div class="page-header">
				<h1 class="page-title">
					<?php /* If a $page_title is available, use that in the header */ ?>
					<?php if ( isset($page_title) ): ?>
						<?php echo $page_title; ?>
					<?php /* Otherwise, print the default title */ ?>
					<?php else: ?>
						Cattitude84's Super Awesome Website
					<?php endif; ?>
				</h1>
			</div>

			<?= $page_content ?>

		</div> <!-- /container -->
	</body>
</html>