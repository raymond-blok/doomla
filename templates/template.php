<?php
require "index.logic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>doomla</title>
</head>
<body>
	<section>
		<article>
			<?php echo getContent($_GET['page'], $db); ?>
		</article>
	</section>
</body>
</html>