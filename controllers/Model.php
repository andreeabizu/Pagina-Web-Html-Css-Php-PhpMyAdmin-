<?php

class Md{
	private $username="";
 private $email = "";
 private $password="";
 private $passwordConf="";


public function __construct($username,$email,$password,$passwordConf)
{
	$this->username = $username;
	$this->password = $password;
	$this->email = $email;
	$this->passwordConf = $passwordConf;

}

private function conectare_db()
{
$link = new mysqli("localhost","root","", "user-verification");

if($link->connect_error)
{
	die("Connection failed: ".$link->connect_error);
}
return $link;
}

public function existEmail()
{$link=$this->conectare_db();
 	$emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $sql = $link->prepare($emailQuery);
    $sql->bind_param('s',$this->email);
    $sql->execute();
    $result = $sql->get_result();
    $userCount = $result->num_rows;
    $sql->close();
     if($userCount > 0)
    	return 1;
    return 0;

}

 public function insertUser()
 {
 	
    	
      $sql="INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
      $link=$this->conectare_db();
    	$stmt = $link->prepare($sql);
    $stmt->bind_param('sss', $this->username, $this->email, $this->password);
if($stmt->execute())
   {//login user
   	$user_id = $link->insert_id;
 $stmt->close();
 return $user_id;
}
  $stmt->close();
  return -1;

 }
}
