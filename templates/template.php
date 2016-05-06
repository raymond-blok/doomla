<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>doomla</title>
	<link rel="stylesheet" type="text/css" href="templates/css/style.css">
	<link rel="stylesheet" type="text/css" href="templates/css/fonts/stylesheet.css">
</head>
<body>
	<section class="container">
		<nav class="menu">
			<h2 id="menustart">doomla</h2>
			<?php echo getMenu();?>
		</nav>
		<article>
			<?php echo getContent();?>
		</article>
		<div class="push"></div>
	</section>
	<footer class="footer">
		<p>copyright Raymond blok © 2016</p>
	</footer>
</body>
</html>