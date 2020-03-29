
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

include 'bookingModel.php';
$numar="";
$eve="";
$date;
$errors="";
$nr=0;
$dif;
$str="";
$today=date('Y-m-d');

if(isset($_POST['submit-button'])){
	$numar = $_POST['numar'];
	$date = date('Y-m-d', strtotime($_POST['data']));
	$eve=$_POST['eveniment'];
	
	if(empty($numar)){
		$errors=$errors."<br>Number required.";
		$nr++;
    }
    if(empty($date)){
    	$errors=$errors."<br>Date required.";
    	$nr++;
    }
 
if($date < $today)
{
  $errors=$errors."<br>The date has passed.";
  $nr++;
}
$username=$user->getname();
$reservation =new bookingModel($eve,$numar,$date,$username);
$c=$reservation->existDate();
if($c==1)
{
  $errors=$errors."<br>The date already exist";
  $nr++;
}

if($nr==0)
{
$c=$reservation->insertf();
if($c==1){
$errors=$errors."<br>The request was registered";
$_SESSION['errors']=$errors;	
header("Location:Booking.php");
}
}
else
{$_SESSION['errors']=$errors;
  header("Location:Booking.php");
}
}


?>