<?php
$db = new mysqli('localhost','root','','doomla');

function getContent($name)
{
	if(isset($name))
	{
		$query = "SELECT content FROM pagecontent WHERE name=$name";
		$result = $db -> query($query);
		$doomla = $result -> fetch_assoc();
		echo $doomla;
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