<?php

include 'ReviewsModel.php';
$error = '';
$comment_name = '';
$comment_content = '';
$output='';

if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{$obj= new ReviewsModel($comment_content,$comment_name);
	$error .=$obj->insert();
$output .=$obj->display_comm();
}

$data = array(
 'error'  => $error
);
echo json_encode($data);


	
?>