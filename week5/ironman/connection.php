<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ironman";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	$sql = "SELECT * FROM films";
	
?>