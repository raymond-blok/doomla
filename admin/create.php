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
		<form action="create.php" method="post">
			<label for="page">Page:</label>
			<input type="text" id="page" name="page"><br>
			<label for="menu">Menu-option:</label>
			<input type="text" id="menu" name="menu"><br>
			<label for="content">Content:</label>
			<textarea name="content" rows="5" cols="40" id="Content" ></textarea><br>
			<input type="submit" name="submit" value="submit">
		</form>
	</section>
</body>
</html>