<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$data['page']?></title>
	<link rel="stylesheet" type="text/css" href="templates/css/night.css">
	<link rel="stylesheet" type="text/css" href="templates/css/fonts/stylesheet.css">
</head>
<body>		
	<nav class="menu">
		<h2 id="menustart">doomla</h2>
		<?php echo getMenu();?>
	</nav>
	<section class="container">
		<article>
			<?php echo getContent($data);?>
		</article>
		<div class="push"></div>
	</section>
	<footer class="footer">
		<p>copyright Raymond blok © 2016</p>
	</footer>
</body>
</html>
