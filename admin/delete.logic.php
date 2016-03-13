<?php
	$db = new mysqli('localhost','root','','doomla');

	if (isset($_POST['submit'])) 
	{
		$id = $_GET['id'];
		$query = "DELETE FROM pagecontent WHERE id=$id";
		$result = $db -> query($query);
		//header('location: index.php');
	}
	elseif(is_numeric($_GET['id']))
	{
		$query =  "SELECT * FROM pagecontent WHERE id=$_GET[id]";
		$result = $db -> query($query);

		$birthday = $result -> fetch_assoc();
	}
	else
	{
		header('location: index.php');
	}
	if(isset($_POST['no']))
	{
		header('location: index.php');
	}

?>