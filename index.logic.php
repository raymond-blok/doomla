<?php
$db = new mysqli('localhost','root','','doomla');

function getContent($page, $db)
{
	if(isset($page))
	{
		$query = "SELECT content FROM pagecontent WHERE page='$page'";
		$result = $db -> query($query);
		$doomla = $result -> fetch_assoc();
		echo $doomla['content'];
	}
}

/*	switch()
	{
		case 1:
			
			break;
		case 1:

			break;
	}
*/