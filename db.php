<?php
	$con = mysql_connect("localhost", "debian-sys-maint", "admin");

	$db = mysql_select_db("mybd2");

	if(!$con || !$db) {
		exit(mysql_error());
	}
	
?>