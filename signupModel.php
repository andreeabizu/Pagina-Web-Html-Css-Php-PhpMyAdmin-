<?php

class SignUpModel{
	private $username="";
 private $email = "";
 private $password="";
 

public function __construct($username,$email,$password)
{
	$this->username = $username;
	$this->password = $password;
	$this->email = $email;


}

private function conectare_db()
{
$link = new mysqli("localhost","root","", "logare");

if($link->connect_error)
{
	die("Connection failed: ".$link->connect_error);
}
return $link;
}

public function existEmail()
{$link=$this->conectare_db();
 	$emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $link->prepare($emailQuery);
    $stmt->bind_param('s',$this->email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();
     if($userCount > 0)
    	return 1;
    return 0;

}
public function getname()
{return $this->username;}

public function getmessage()
{$link=$this->conectare_db();
  $link=$this->conectare_db();
$sql=mysqli_query($link,"SELECT message FROM users WHERE username='$this->username'")
      or die("Failed to query database " .mysqli_error());
 $row = mysqli_fetch_array($sql);
 return $row['message'];
}

 public function insert()
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


