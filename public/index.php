<?php
require_once __DIR__ . '/../bootstrap.php';
?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../views/partials/head.php'; ?>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body class="liquid">
	<a id="top"></a>
    <?php require '../views/partials/navbar.php'; ?>
 <div class="bar"></div>
    <?php require $main_view; ?>
	<!-- Footer -->
<div id="wrap" class="container footer">    
	<div id="main" class="container clear-top">
			<div class="span12">
				<div class="span2">
						<span><a href="/contact">Contact & support</a></span>
						<span class="pull-right">
							<a href="#top">Back to Top</a>
						</span>
						<?php if ($_SESSION) : ?>
							<div class="row text-center">
								<a href="/create">Create Post</a>
							</div>
						<?php endif; ?>
				</div>
				<div class="span4">
					<p class="muted pull-right">© 2016 Soda Lister. All rights reserved</p>
				</div>
			</div>
		</div>
	</div>
    <?php require '../views/partials/common_js.php'; ?>

</body>
</html>


