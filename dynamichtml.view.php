<!DOCTYPE html>
<html>
<head>
	<title>Dynamic HTML using PHP</title>
</head>
<body>
	<ul>
		<?php 
			foreach ($names as $name) {
				echo "<li>$name</li>";
			}
		 ?>
	</ul>
	<ul>
		<?php foreach($names as $name): ?>
			<li><?= $name ?></li>
		<?php endforeach ?>
	</ul>
</body>
</html>