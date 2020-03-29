<?php
include 'loginmodel.php';

$username=$_POST['user'];
$password=$_POST['pass'];

$password=md5($password);
$user = new Model("$username","$password");
$success = $user->try_login();
if($success==1){
	session_start();
	$_SESSION['user']=$user;
	$config['sess_expire_on_close']  = TRUE;
header("Location:Webp.php");

}
else
{header("Location:login.php?err=1");
}


