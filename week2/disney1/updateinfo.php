<?php

//Get the SQL Server Configuration File
include 'var.php';

if(!$conn){
	die("Connection Failed");

}

//Write a SQL query that updates the database below.
//The SQL will start INSERT INTO...
$sql = ' 
UPDATE disney
SET
	name = "'.$_POST["name"].'",
	introduction = "'.$_POST["introduction"].'"
WHERE
	PictureID = "'.$_POST["pictureID"].'"';



//If it is successful it will redirect you to the home page.
if (mysqli_query($conn, $sql)){
header("Location: form1.php");
}
//If it fails, it will tell you it has failed.
else{
	echo "user creation failed".$sql."<br>".mysqli_error($conn);

}


?>
