<?php

$link = mysqli_connect("localhost","root","");
mysqli_select_db( $link, "image");

$id=0;
$pathvalue="";

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$pathvalue =$_POST['pathvalue'];

  	$query = " INSERT INTO image  (id, pathvalue)  VALUES (?, ?) ";
        $statement = $connect->prepare($query);
        $statement->bind_param('is',1, "andreea");
		$statement->execute();
}

?>

