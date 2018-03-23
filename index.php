<?php

	header("Content-Type: application/json");

	include_once "config.php";
	include_once "database.php";
	
	if(isset($_GET['method']) && !empty($_GET['method'])){
		
		$method = $_GET['method'];
		
		$path = 'methods/' . $method . '.php';
		
		if(file_exists($path)){
			include_once $path;
		}else{
			echo json_encode(['message' => 'method does not exist']);			
		}
		
	}else{
		echo json_encode(['message' => 'method error']);
	}

?>