
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rebecca Events</title>
    <link rel="stylesheet" href="Stylepag.css">
    <link rel="stylesheet" href="StyleBooking.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><h3><a href="Webp.php">Home</a></h3></li>
            <li><h3><a href="Galery.php">Galery</a></h3></li>
            <li><h3><a href="Menu.php">Menu</a></h3></li>
            <li><h3><a href="Reviews.php">Reviews</a></h3></li>
            <li><h3><a href="Contact.php">Contact</a></h3></li>
            <li><h3><a href="Booking.php">Booking</a></h3></li>
            <li><i class="glyphicon glyphicon-user" style="color: white; margin-top: 31.5px; font-size: 25px; margin-left:500px"></i></li>
            <li style="margin-top:15px; color:white; margin-left:10px"><h3><?php print $user->getname(); ?></h3></li>
            <li><h3><a href="logoutcontroller.php">Logout</a></h3></li>
        </ul>
    </nav>
    <h1 style="color: goldenrod; margin-left: 500px; margin-top: 150px; color:darkblue;"><i><b>Rebecca Events</b></i></h1>
</header>
<br/>
<h1 style="margin-left: 50px; color: darkblue; text-decoration: underline"><b>BOOKING</b></h1>

<div class="prg">    
   <?php if($user->getname()=='admin'){?>
     <div><a href="reservationAdmin.php">Go to unconfirmed reservations</a></div>
<?php
  } 
   if($user->getmessage()!=''){?>
    <div><?php print $user->getmessage(); ?></div>
<?php
  }?>
   <form method="POST" class="booking_form" action="bookingController.php">
 
    <?php 
                        if(isset($_SESSION['errors']))
                        {
                            $error=$_SESSION["errors"];
                            echo "<span style='color:red'>$error</span>";
                            unset($_SESSION['errors']);
                        }
    ?>      
         <br>
         <label>Event type:</label><br>
          <input style="margin-left:50px" type="radio"  name="eveniment" value="Wedding" checked>Wedding<br>
          <input style="margin-left:50px" type="radio"  name="eveniment" value="Birthday">Birthday<br>
          <input style="margin-left:50px" type="radio"   name="eveniment" value="Christening Party">Christening Party<br>
          <label>Number of people:</label><br>
          <input  style="margin-left:50px" type="number" name="numar" min="50" max="500" ><br>
           <label>Date:</label><br>
           <input style="margin-left:50px" name="data" type="date"  value="<?php echo date('Y-m-d'); ?>"><br>
        <input type="submit" name="submit-button" class="submit-button">
   </form>

</div>

<footer class="wrapper">
    <h3 style="margin-left: 400px; margin-top:100px; margin-bottom: 0px"><a href="Contact.php">Contact</a></h3>
    <h4 style="margin-left: 400px; ">Address: str. Termocentralei,Tg-Jiu</h4>
    <h4 style="margin-left: 400px;">Phone: 0744591512</h4>
    <h4 style="margin-left: 400px; margin-bottom: 100px">E-Mail: rebecaevents@yahoo.com</h4>

</footer>
</body>
</html>
