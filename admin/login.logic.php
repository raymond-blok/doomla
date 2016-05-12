<?php
	$username = 'jan';
	$password = 12345;

	$db = new mysqli('localhost','root','','doomla');
	$query = "SELECT * FROM user WHERE name ='$username'";
	$result = $db -> query($query);
	$user = $result -> fetch_assoc();
	var_dump($user);