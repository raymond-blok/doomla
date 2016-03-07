<?php
function getContent()
{
	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
	}
	else
	{
		$page = 'home';
	}

	$db = new mysqli('localhost','root','','doomla');

	$query = "SELECT content FROM pagecontent WHERE page='$page'";
	$result = $db -> query($query);
	$content = $result -> fetch_assoc();

	if($content == null)
	{
		echo "de pagina $page is niet gevonden";
	}
	else
	{
		return $content['content'];
	}
}
function getMenu()
{
	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
	}
	else
	{
		$page = 'home';
	}

	$db = new mysqli('localhost','root','','doomla');

	$query = "SELECT menuoption FROM pagecontent";
	$result = $db -> query($query);
	$menuoptions = $result -> fetch_all(MYSQLI_ASSOC);
	echo "<ul>";
	foreach($menuoptions as $menuoption){
		echo "<li><a href=?page=$page>$menuoption[menuoption]</a></li>";
	}
	
	echo "</ul>";

}

require "templates/template.php";