<?php
	$id_customer = $_POST['id_customer'];
	$password = $_POST['password'];
	// Database connection
	$conn = new mysqli('localhost','root','','smart car wash');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login(id_customer, password) values(?, ?)");
		$stmt->bind_param("si", $id_customer, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>