<?php
	require "delete.logic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete page</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<h1>Delete page</h1>
	<p>are you shure you want to permanently delete the page below</p>
	<form action="delete.php?id=<?= $_GET['id']?>" method="post">
		<button name="submit">yes</button>
		<button name="no">no</button>
	</form>
	<ul class="list" id="list1">
		<li>page:</li>
		<li>menuoption:</li>
	</ul>
	<ul class="list">
		<li><?= $page['page'];?></li>
		<li><?= $page['menuoption'];?></li>
	</ul>
	<section id="content">
		<p id="content_word">content:</p>
		<?= $page['content'];?>
	</section>
</body>
</html>