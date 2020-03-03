<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($conn,"select username from admin where username='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session=$row['username'];

if(!isset($login_session)) //This says, "If NOT isset". Or, "if the value of the isset function is false ... then the code between the curly brackets { } gets executed. That code, for us, was the redirection line.
{
header("Location: login.php");
}
?>
