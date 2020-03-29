<?php
class M{
private $id_db="";
public function __construct($id_db)
{
	$this->id_db=$id_db;

} 

public function conn(){
$conn= new mysqli("localhost","root","", "text");
$sql="SELECT * FROM textcontent WHERE id='".$this->id_db."'";
$result =mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$menu= $row['paragraf'];
return $menu;
}
}
?>