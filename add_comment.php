
<?php
require_once('loginmodel.php');
require_once('signupModel.php');
session_start();
 $config['sess_expire_on_close']  = TRUE;
if(!isset($_SESSION['user'])){
header("Location:login.php");}
else{
    $user=$_SESSION['user'];
}

include 'ReviewsModel.php';

$error='';
$comment_name ='';
$comment_content = '';
$parent_comment_id=0;


if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

$comment_name= $user->getname();
$parent_comment_id=$_POST["comment_id"];
if($error=='')
{ $obj= new ReviewsModel($comment_content,$comment_name,$parent_comment_id);
$error=$obj->insert();
}

   $data = array(
		 'error'  => $error
		);
		echo json_encode($data);

?>
