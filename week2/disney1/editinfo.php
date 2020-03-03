<html>
<body>
<?php
include 'config.php';


$id = $_GET["id"];
$sql = "SELECT PictureID, picture, name, introduction FROM disney WHERE PictureID = $id";

    $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
       while($row = mysqli_fetch_assoc($result)) {
       $PictureID = $row['PictureID'];
       $picture = $row["picture"];
       $name = $row["name"];
       $introduction = $row["introduction"];//Selects the information from the SQLiteDatabase. 
       }
   }
   ?>
   <style type="text/css">
 	body
 	{
 	font-family:Arial, Helvetica, sans-serif;
 	font-size:14px;
  color:white;
 	background-size: 100% auto;
 	}
  .bottonup{
  background: #333333;
  color: #fff;
  border-radius:5px;
  border:0;
  font-weight: bold;
}
 </style>
 <body background="pictures/9.jpeg">
   <div align="left">
   <form action="updateinfo.php" method="POST">
   <div style="margin-left:35%;width:350px; border: solid 0.5px #333333;display: inline-block;background:rgb(0,0,0,0.3);border-radius:20px 20px 20px 20px;
   margin-top:8%;height: 30vw;width: 30vw;" align="center">
   <div style="background-color:#333333; color:#FFFFFF; padding:8px; border-radius:20px 20px 0px 0px;"><b>Edit</b></div>


<br>
PictureID <input type="text" value="<?php echo $PictureID;?>" name="pictureID">
<br>
<br>

Name <input type="text" value="<?php echo $name;?>" name="name">
<br>
<br>
Introduction <textarea type="text" name="introduction" style="width:30vw;height:11vw;"><?php echo $introduction;?></textarea>
<br>
<br>
<input class="bottonup"type="submit" value=" Submit "/><br />
</form>
</html>
