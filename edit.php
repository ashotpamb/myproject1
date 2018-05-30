<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<a href="index.php">home</a>

	<?php

		require_once "db.php";
		$id = $_GET["id"];

		$res = mysql_query("SELECT * FROM news WHERE id='$id'");

		$row = mysql_fetch_array($res);

		if(isset($_POST["save"])) {
			$title = strip_tags(trim($_POST["name"]));
			$text = strip_tags(trim($_POST["text"]));
			$author = strip_tags(trim($_POST["author"]));

			mysql_query("UPDATE news SET title='$title',text='$text', author='$author' WHERE id='$id'");

			echo "statya uspeshno redaktirovana";

			mysql_close();
		}
	
	?>

	<form action="edit.php?id= <?php echo $row["id"]; ?>" method="post">
		nazvanie stati <br> <input type="text" name="name" value="<?php echo $row["title"]; ?>"> <br>
		text stati <br> <textarea name="text" cols="30" rows="10"><?php echo $row["text"]; ?></textarea> <br>
		author <br> <input type="text" name="author" value="<?php echo $row["author"]; ?>"> <br>

	<input type="submit" value="dobavit" name="save">

</form>
</body>
</html>