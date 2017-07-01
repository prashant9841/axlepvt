<?php

//error_reporting(E_ALL);
if($_POST){

	//(isset($_POST['honey']) && $_POST['honey'] != 0) ? die(0) : return ;

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "test";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];


	    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)");
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':message', $message);
	    // use exec() because no results are returned
	    if($stmt->execute()){
	    	echo 1;
	    }
	    else{
	    	echo 0;
	    }
    }
	catch(PDOException $e)
	{
		die(0);
	}

}

