<?php

	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if($mysqli->connect_errno){
		die("fuck the mysql");
	}
	
?>