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
		$pagecontent = "<h1>de pagina $page is niet gevonden</h1>";
	}
	else
	{
		$pagecontent = $content['content'];
	}
	return $pagecontent;
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

	$query = "SELECT menuoption , page FROM pagecontent ORDER BY menuorder";
	$result = $db -> query($query);
	$menuoptions = $result -> fetch_all(MYSQLI_ASSOC);
	$menu = "<ul>";

	foreach($menuoptions as $menuoption){
		$menu = $menu . "<li><a href=?page=$menuoption[page]>$menuoption[menuoption]</a></li>";
	}
	
	$menu = $menu . "<ul>";
	return $menu;

}

require "templates/template.php";