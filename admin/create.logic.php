<?php
if(isset($_POST['submit'])):

	$db = new mysqli('localhost','root','','doomla');

	$page = $_POST['page'];
	$menu = $_POST['menu'];
	$content = $_POST['content'];
	$menuorder = $_POST['order'];
	$query = "INSERT INTO pagecontent (page, menuoption, content, menuorder) VALUES ('$page', '$menu', '$content', '$menuorder')";
	$result = $db -> query($query);
	header('location: index.php');
endif;


