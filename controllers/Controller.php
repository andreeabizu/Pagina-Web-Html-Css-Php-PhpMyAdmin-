<?php

include 'Model.php';

$errors = array();
$username = "";
$email = "";

//if user clicks on the sign up button
if(isset($_POST['signup-btn'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordConf = $_POST['passwordConf'];

	//validation
	if(empty($username)){
		$errors['username'] = "Username required";
		header("Location:signu.php");
	}
    if(empty($email)){
    	$errors['email'] = "Email required";
    }
    if(empty($password)){
    	$errors['password'] = "Password required";
    }
    if($password !== $passwordConf){
    	$errors['password'] = "The two password do not match";
    }

     $db=new Md($username,$email,$password,$passwordConf);
    $oki=$db->existEmail();

    if($oki==1)
{
	$errors['email'] = "Email already exists";
}

if(count($errors)===0)
{$user_id=$db->insertUser();
 	$_SESSION['id']=$user_id;
 	$_SESSION['username']=$user;
 	$_SESSION['email']=$email;

header('Location:Webp.php');
}
else
{
	$_SESSION['errors']="Database error:failed to register";
	header("location.Signup.php");
}




}