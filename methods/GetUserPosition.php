<?php

	if(isset($_GET['userid']) && !empty($_GET['userid'])){
		
		$id = $_GET['userid'];
		
		$query = $mysqli->query("SELECT * FROM `players` WHERE `id` = '$id'");
		
		$result = $query->fetch_assoc();
		
		echo json_encode($result);
		
	}else{
		echo json_encode(['message' => 'incorrect user id']);		
	}


?>