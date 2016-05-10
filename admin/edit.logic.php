<?php
$db = new mysqli('localhost','root','','doomla');

if(isset($_POST['submit'])){


	$id = $_GET['id'];
	$page = $_POST['page'];
	$menu = $_POST['menu'];
	$content = $_POST['content'];
	$menuorder = $_POST['order'];
	$query = "UPDATE pagecontent SET page='$page', menuoption='$menu', content='$content', menuorder='$menuorder' WHERE id=$id";
	$result = $db -> query($query);
	header('location: index.php');
}
elseif(is_numeric($_GET['id']))
{
	$query =  "SELECT * FROM pagecontent WHERE id=$_GET[id]";
	$result = $db -> query($query);

	$pagecontent = $result -> fetch_assoc();
}
else
{
	header('location: index.php');
}