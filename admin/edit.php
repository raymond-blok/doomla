<?php
	require "edit.logic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit page</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<section class="container">
		<h1>edit page</h1>
		<ul class="list" id="list2">
			<li>Page:</li>
			<li>Menu-option:</li>
<<<<<<< HEAD
			<li>Menu-order:</li>
=======
>>>>>>> origin/master
			<li>Content:</li>
		</ul>
		<form action="edit.php?id=<?= $_GET['id'];?>" method="post" class="form">
			<input type="text" name="page" class="input_width" value="<?=$pagecontent['page'];?>"><br>
			<input type="text" name="menu" class="input_width" value="<?=$pagecontent['menuoption'];?>"><br>
<<<<<<< HEAD
			<input type="number" name="order" class="input_width" value="<?=$pagecontent['menuorder'];?>"><br>
=======
>>>>>>> origin/master
			<textarea name="content" rows="20" class="input_width"><?=$pagecontent['content'];?></textarea><br>
			<input type="submit" name="submit" value="submit">
			<a href="index.php">cancel</a>
		</form>
		
	</section>
</body>
</html>