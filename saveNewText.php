<?php

$conn= new mysqli("localhost","root","", "text");
$newText= $_POST['newText'];
$i=$_GET['err'];
if($newText !=""){
	$sql= "UPDATE textcontent Set paragraf='".$newText."' WHERE id='".$i."'";
	$result = mysqli_query($conn,$sql);
}