<?php

	if(isset($_GET['userid']) && !empty($_GET['userid']) && isset($_GET['x']) && !empty($_GET['x']) && isset($_GET['z']) && !empty($_GET['z']) && isset($_GET['y']) && !empty($_GET['y'])){
		
		$id = $_GET['userid'];
		$x = $_GET['x'];
		$z = $_GET['z'];
		$y = $_GET['y'];
		
		$query = $mysqli->query("UPDATE `players` SET `x` = '$x', `z` = '$z', `y` = '$y' WHERE `id` = '$id'");
		
		if($query){
			echo json_encode(['status' => 'success']);	
		}else{
			echo json_encode(['status' => $mysqli->error]);	
		}
		
	}else{
		echo json_encode(['message' => 'incorrect user id']);		
	}


?>