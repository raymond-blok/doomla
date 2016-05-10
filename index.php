<?php
function database()
{
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}

	$db = new mysqli('localhost','root','','doomla');

	$query = "SELECT * FROM pagecontent WHERE page='$page'";
	$result = $db -> query($query);
	$data = $result -> fetch_assoc();
	return $data;
}
function getContent($data)
{


	if($data == null) {
		$pagecontent = "<h1>de pagina $page is niet gevonden</h1>";
	} else {
		$pagecontent = $data['content'];
	}
	return $pagecontent;
}

function getMenu()
{
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
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
$data = database();

$template = "template.php";

if($data['template'] != null) {
	$template = $data['template'];
}


require "templates/$template";