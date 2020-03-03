<?php

//Get the SQL Server Configuration File
include 'config.php';

if(!$conn){
	die("Connection Failed");

}

//Write a SQL query that updates the database below.
//The SQL will start INSERT INTO...

$sql = "INSERT INTO admin (username, password)VALUES
  ('".$_POST["username"]."',
	 '".$_POST["password"]."')";

//If it is successful it will redirect you to the home page.
if (mysqli_query($conn, $sql)){
	header("Location: login.php");
}
//If it fails, it will tell you it has failed.
else{
	echo "user creation failed".$sql."<br>".mysqli_error($conn);

}
?>
