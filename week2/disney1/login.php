<?php
include("var.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form

$myusername=mysqli_real_escape_string($conn,$_POST['username']);
$mypassword=mysqli_real_escape_string($conn,$_POST['password']);


$sql5="SELECT id FROM admin WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($conn,$sql5);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{

$_SESSION['login_user']=$myusername;

header("location:form1.php");
}
else
{
$error="Your Login Name or Password is invalid";
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>

<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
background-size: 100% auto;
}
label
{
font-weight:bold;

color: #fff;

width:100px;
font-size:14px;
}
.box
{
border:#666666 solid 0px;
}
b{
  font-size: 30px;
}
.bottonup{
  background: #333333;
  color: #fff;
  border-radius:5px;
  border:0;
  font-weight: bold;
}
a{
	color:white;
}

</style>
</head>
<body background="pictures/background2.jpeg">



<div align="right">
<div style="margin-right:500px; margin-top: 100px; width:350px; border: solid 1px #333333;display:inline-block;background:rgb(0,0,0,0.3);border-radius:20px 20px 20px 20px;
" align="center">
<div style="background-color:#333333; color:#FFFFFF; padding:3px;border-radius:20px 20px 0px 0px;"><b>Login</b></div>

<div style="margin:30px">
<form action="" method="post">
<label>UserName <br/></label><input type="text" name="username" class="box"/><br /><br />
<label>Password <br/></label><input type="password" name="password" class="box" /><br/><br />
<input class="bottonup"type="submit" value=" Submit "/><br />
<p><a href="register.php">Create a new id</a></p>
<p><a href="index.php">Return To My Website</a></p>

</form>
<?php if(!empty($error)) { ?>
<div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
<?php } ?>
</div>
</div>
</div>


</body>
</html>
