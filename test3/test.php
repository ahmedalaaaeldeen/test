<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$dbName = "school";
	
	try{

		$conn = new PDO("mysql:host=$server;dbname=$dbName",$username,$password);
		
	}catch(PDOException $e){

		echo "error : " . $e->getMessage();
	}