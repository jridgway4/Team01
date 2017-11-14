<?php 

	echo $_POST["username"];
	echo $_POST["password"];
	
	
	$conn = mysqli_connect(hostname, username, password, schemaToUse );
	$sql = "SELECT * FROM Sellers WHERE (username, password)";
?>