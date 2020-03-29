<?php
 $link= new mysqli("localhost","root","", "imag");
      if($link->connect_error)
	   {
		die("Connection failed: ".$link->connect_error);
	   }


if(isset($_GET['id']))
{
$id=$_GET['id'];

$sql="delete from products_images where id='".$id."'";;
mysqli_query($link, $sql)
         or die("Failed to query database " .mysqli_error());
header("Location:Galery.php");

}
?>
