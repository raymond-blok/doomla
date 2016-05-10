<?php
if(isset($_POST['submit'])):

	$db = new mysqli('localhost','root','','doomla');

	$page = $_POST['page'];
	$menu = $_POST['menu'];
	$content = $_POST['content'];
	$menuorder = $_POST['order'];
	$template = $_POST['temp'];
	$query = "INSERT INTO pagecontent (page, menuoption, content, menuorder, template) VALUES ('$page', '$menu', '$content', '$menuorder', '$template')";
	$result = $db -> query($query);
	header('location: index.php');
endif;


