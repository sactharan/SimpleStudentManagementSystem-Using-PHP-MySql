<?php

$conn = "";

try {
	$servername = "localhost:3306";
	$dbname = "demo";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=demo",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
