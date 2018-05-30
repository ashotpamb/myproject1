<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="add.php">dobavit statyu</a>
	<?php

	require_once "db.php";

	$res = mysql_query("SELECT * FROM news");

	mysql_close();

	while($row = mysql_fetch_array($res)) {
		?>
		<h1><?php echo $row["title"]; ?></h1>
		<p><?php echo $row["text"]; ?></p>
		<p><?php echo $row["author"]; ?></p>
		<p><?php echo $row["date"]; ?></p>
		<a href="edit.php?id=<?php echo $row["id"]; ?>">edit</a> <br>
		<a href="delete.php?id=<?php echo $row["id"]; ?>">delete</a> <br>
		<hr>
		

	<?php }

	echo $row["title"];
?>
</body>
</html>