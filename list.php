<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link type="text/css" rel="stylesheet" href="reset.css">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>PHP List</title>
</head>
<body>
	<form method="post">
		<label>Lista szövege</label>
		<input type="text" name="szoveg">
		<label>Lista elemszáma</label>
		<input type="text" name="elemszam">
		<input type="submit" value="Lista kiíratása">
	</form>
	
	<?php
	
	$szoveg = $_POST['szoveg'];
	$elem = $_POST['elemszam'];
	
	echo '<ol>';
	for($x = 0; $x < $elem; $x++){
		echo $szoveg;
	}
	echo '</ol>';
	
	?>
	
</body>
</html>