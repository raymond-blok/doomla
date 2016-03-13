<?php
	require "delete.logic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete page</title>
</head>
<body>
	<h1>Delete page</h1>
	<p>are you shure you want to delete the below page</p>
	<form action="delete.php?id=<?php $_GET['id']?>" method="post">
		<button name="submit">yes</button>
		<button>no</button>
	</form>
</body>
</html>