<?php

class bookingModel{
private $numar="";
private $dataEven="";
private $eve="";
private $username="";

public function __construct($eve,$numar,$dataEven,$username)
	{$this->numar=$numar;
	$this->eve=$eve;
	$this->dataEven=$dataEven;
	$this->username=$username;
}

private function connect_db()
{
$link = new mysqli("localhost","root","", "logare");

if($link->connect_error)
{
	die("Connection failed: ".$link->connect_error);
}
return $link;
}

public function existDate()
{

$link=$this->connect_db();
	$qr ="SELECT * from rezervare WHERE dataEven = '$this->dataEven' ";
    $result = $link->query($qr);
    $c=$result->num_rows;
if ($c>0)
	return 1;
return 0;
}

public function insertf()
{
$sql="INSERT INTO rezervare (eve, numar,dataEven,username) VALUES (?, ?, ?,?)";
$link=$this->connect_db();
$stmt = $link->prepare($sql);
$stmt->bind_param('siss', $this->eve, $this->numar,strval($this->dataEven),$this->username);
if($stmt->execute())
 {
 $stmt->close();
 return 1;
}
  $stmt->close();
  return -1;

}

}