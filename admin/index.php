<?php
function adminpage()
{
	$db = new mysqli('localhost','root','','doomla');
	$query = "SELECT * FROM pagecontent";
	$result = $db -> query($query);
	$pagecontents = $result -> fetch_all(MYSQLI_ASSOC);

	$page = "<table> <tr>	<th>Page</th>	<th>Content</th>	<th>Menuoption</th>	</tr>";
	foreach ($pagecontents as $pagecontent)
	{
		$page = $page . "<tr>	<td>$pagecontent[page]</td>	<td>$pagecontent[content]</td>	<td>$pagecontent[menuoption]</td>	<td><a href=delete.php?id=$pagecontent[id]>delete</a></td>	<td><a href=edit.php?id=$pagecontent[id]>edit</a></td>	</tr>";
	}
	$page = $page . "</table>";
	return $page;
}

require "../templates/admin.php";

