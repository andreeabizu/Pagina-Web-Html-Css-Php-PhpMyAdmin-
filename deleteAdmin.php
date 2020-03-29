<!DOCTYPE>
<html>
<head>
</head>

<body>


<?php
 $link= new mysqli("localhost","root","", "logare");
      if($link->connect_error)
	   {
		die("Connection failed: ".$link->connect_error);
	   }


if(isset($_GET['id']))
{
$id=$_GET['id'];

$ql="SELECT username,eve,dataEven FROM rezervare where id='".$id."'";
$ql=mysqli_query($link, $ql)
         or die("Failed to query database " .mysqli_error());
$row = mysqli_fetch_array($ql);

$qr="UPDATE users set message='The reservation was not successful -Date:".$row['dataEven']." -Event:".$row['eve']."' where username='".$row['username']."'";
mysqli_query($link, $qr)
         or die("Failed to query database " .mysqli_error());


$sql="delete from rezervare where id='".$id."'";;
mysqli_query($link, $sql)
         or die("Failed to query database " .mysqli_error());
header("Location:reservationAdmin.php");

}
?>



</body>
</html>
