<?php
if(isset($_GET['page']))
{
	$page = $_GET['page'];
}
else
{
	$page = 'home';
}
$db = new mysqli('localhost','root','','doomla');


function getContent($page, $db)
{
	if
		$query = "SELECT content FROM pagecontent WHERE page='$page'";
		$result = $db -> query($query);
		$content = $result -> fetch_assoc();
		echo $content['content'];
}
