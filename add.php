<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<a href="index.php">home</a>
<form action="add.php" method="post">
	nazvanie stati <br> <input type="text" name="name"> <br>
	text stati <br> <textarea name="text" cols="30" rows="10"></textarea> <br>
	author <br> <input type="text" name="author"> <br>

	<input type="submit" value="dobavit" name="add">

</form>
<?php
	require_once "db.php";

	if(isset($_POST["add"])) {
		$title = strip_tags(trim($_POST["name"]));
		$text = strip_tags(trim($_POST["text"]));
		$author = strip_tags(trim($_POST["author"]));

		mysql_query("INSERT INTO news (title,text,author) VALUES('$title', '$text', '$author') ");

		mysql_close();

		echo "novost dobavlena";
	}else {
		echo "sad";
	}
?>
</body>
</html>