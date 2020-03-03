<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="img.css">
	<title>New User Registration Form</title>
	<style type="text/css">
	body
	{
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	background-size:100% auto;
	}
	label
{
font-weight:bold;

color: #fff;

width:100px;
font-size:14px;
}
.bottonup{
  background: #333333;
  color: #fff;
  border-radius:5px;
  border:0;
  font-weight: bold;
}
</style>
</head>
<body background="pictures/background2.jpeg">

<div align="left">
<form action="createaccount.php" method="POST">
<div style="margin-left: 500px;width:350px; border: solid 1px #333333;display: inline-block;background:rgb(0,0,0,0.5);border-radius:20px 20px 20px 20px;
 margin-top:15vw" align="center">
<div style="background-color:#333333; color:#FFFFFF; padding:5px;border-radius:20px 20px 0px 0px"><b>Register</b></div>

<div style="margin:30px">
<form action="" method="post">
<label>UserName <br/></label><input type="text" name="username" class="box"/><br /><br />
<label>Password <br/></label><input type="password" name="password" class="box" /><br/><br />
<input class="bottonup" type="submit" value=" Submit "/><br />
<p><a href="login.php" style="color:white;">Return to website login</a></p>
</form>
</div>
</div>
</div>

<br><br><br>

</body>
</html>
