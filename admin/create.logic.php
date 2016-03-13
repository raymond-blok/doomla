<?php
if(isset($_POST['submit'])):

	$db = new mysqli('localhost','root','','doomla');

	$page = $_POST['page'];
	$menu = $_POST['menu'];
	$content = $_POST['content'];
	$query = "INSERT INTO pagecontent (page, menuoption, content) VALUES ('$page', '$menu', '$content')";
	$result = $db -> query($query);
	header('location: index.php');
endif;


