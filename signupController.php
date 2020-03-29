<?php

if(session_status()== PHP_SESSION_NONE)
{
	session_start();
}
include 'signupModel.php';

$username = "";
$email = "";
$password="";
$passwordConf="";
$errors="";
$no_errors=0;


if(isset($_POST['signup-btn'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordConf = $_POST['passwordConf'];

	$password=md5($password);
	$passwordConf=md5($passwordConf);


	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$errors=$errors."<br>Invalid Email.";
		$no_errors++;
	}
if(empty($username)){
		$errors=$errors."<br>Username required.";
    	$no_errors++;
	}
    if(empty($email)){
    	$errors=$errors."<br>Email required.";
    	$no_errors++;
    }
    if(empty($password)){
    	$errors=$errors."<br>Password required.";
    	$no_errors++;
    }


if($password !== $passwordConf){
    	$errors=$errors."<br>The two password do not match.";
    	$no_errors++;
    }
    $us=new SignUpModel($username,$email,$password);
    $existE=$us->existEmail();

    if($existE==1)
{
	$errors = $errors."<br>Email already exists.";
	header("Location:signup.php");
	$no_errors++;
}


if($no_errors==0)
 {$user =$us->insert();
 $_SESSION['user']=$us;
header('Location:Webp.php');
}
else
{
	$_SESSION['errors']=$errors;
	header("location:signup.php");
}
}
?>