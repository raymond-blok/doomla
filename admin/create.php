<?php
	require "create.logic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add page</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<section class="container">
		<h1>Add page</h1>
		<ul class="list" id="list2">
			<li>Page:</li>
			<li>Menu-option:</li>
			<li>Menu-order:</li>
			<li>Content:</li>
		</ul>
		<form action="create.php" method="post" class="form">
			<input type="text" name="page" class="input_width"><br>
			<input type="text" name="menu" class="input_width"><br>
			<input type="number" name="order" class="input_width"><br>
			<textarea name="content" rows="20" class="input_width"></textarea><br>
			<input type="checkbox" name="temp" value="night.php" id="check">
			<label>dark theme</label><br>
			<input type="submit" name="submit" value="submit" id="button">
			<a href="index.php">cancel</a>
		</form>
	</section>
</body>
</html>