<?php
class M{
private $id_db="";
public function __construct($id_db)
{
	$this->id_db=$id_db;

} 

public function conn(){
$conn= new mysqli("localhost","root","", "image");
$sql="SELECT * FROM image WHERE id='".$this->id_db."'";
$result =mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$menu= $row['pathvalue'];
return $menu;
}
}
?>