<?php

class Model{

private $username="";
private $password="";
public function __construct($name,$pass)
{
	$this->username=$name;
	$this->password=$pass;

  
    //sql injection
	$this->username=stripcslashes($name);
	$this->password=stripcslashes($pass);
$link=$this->conectare_db();
$this->username=mysqli_real_escape_string($link,$name);
	$this->password=mysqli_real_escape_string($link,$pass);
}

private function conectare_db()
{
$link = mysqli_connect("localhost","root","");
mysqli_select_db( $link, "logare");


	return $link;
}
public function getname()
{return $this->username;}

public function getmessage()
{$link=$this->conectare_db();
$sql=mysqli_query($link,"SELECT message FROM users WHERE username='$this->username'")
      or die("Failed to query database " .mysqli_error());
 $row = mysqli_fetch_array($sql);
 return $row['message'];
}

public function try_login()
{
	$link=$this->conectare_db();
	$qr = mysqli_query($link, "SELECT * from users WHERE username = '$this->username' AND password ='$this->password'")
         or die("Failed to query database " .mysqli_error());
$row = mysqli_fetch_array($qr);
if($this->username=="")
 return false;
if ($row['username'] == $this->username && $row['password'] == $this->password ){
	return true;
}
else
{
   return false;
}
}

public function logout()
{
	session_start();
	session_destroy();
}
}



