<?php
session_start();
include 'config.php';
?>
<html>

<head>
	<title>PHP File Edit</title>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
	text-decoration: none;
	-webkit-appearance:none;
}
a{
	background-color: #FFAE99;
	color: #fff;
	padding-left: 10px;
	padding-right: 10px;
	border-radius:3px;
	font-weight: bold;


}

tr:nth-child(even) {background-color:#FFB4B4;}
</style>
</head>
<body>

<nav> <a href="logout.php">Logout</a>    </nav>

<?php

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT PictureID, picture, name,introduction FROM disney";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<table><th>pictureID</th><th>picture</th><th>name</th><th>introduction</th><th>Edit</th>";
         while($row = mysqli_fetch_assoc($result)) {
       echo "<tr><td> " . $row["PictureID"] . "</td><td> " . $row["picture"] . "</td><td> " . $row["name"] . "</td><td> " . $row["introduction"] . "</td><td>

       <a href='editinfo.php?id=".$row["PictureID"]."'>Edit</a>

			 </td></tr>";


				 }
        echo "</table>";

    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>

<p><a href="index.php">Back to my website</a></p>

</body>
</html>
