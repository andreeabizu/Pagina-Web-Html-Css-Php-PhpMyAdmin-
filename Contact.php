
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
<h1 style="margin-left: 50px; color: darkblue; text-decoration: underline"><b>CONTACT</b></h1>
<div class="prg">
    <h2 style="margin-left: 70px">Timetable</h2>
    <table>
        <tr>
            <th>DAY</th>
            <th>STATE</th>
            <th>HOUR</th>
        </tr>
        <tr>
            <td>Monday</td>
            <td>Open</td>
            <td>19:00-02:00</td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td>Open</td>
            <td>19:00-02:00</td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td>Open</td>
            <td>19:00-02:00</td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td>Open</td>
            <td>19:00-02:00</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td>Open</td>
            <td>19:00-05:00</td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td>Open</td>
            <td>19:00-05:00</td>
        </tr>
        <tr>
            <td>Sunday</td>
            <td>Open</td>
            <td>19:00-05:00</td>
        </tr>

    </table>
    <h2 style="margin-left: 70px">Contact</h2>
    <div>
        <dt>Address</dt>
        <dd>str. Termcentralei,Tg-Jiu</dd>
        <dt>Phone</dt>
        <dd>0744591512</dd>
        <dt>E-Mail</dt>
        <dd>rebecaevents@yahoo.com</dd>
        <dt>Facebook</dt>
        <dd><a href="https://www.facebook.com/restaurantrebeccaevents/">https://www.facebook.com/restaurantrebeccaevents/</a></dd>
    </div>
</div>
<footer class="wrapper">
    <h3 style="margin-left: 400px; margin-top:100px; margin-bottom: 0px"><a href="Contact.php">Contact</a></h3>
    <h4 style="margin-left: 400px; ">Address: str. Termocentralei,Tg-Jiu</h4>
    <h4 style="margin-left: 400px;">Phone: 0744591512</h4>
    <h4 style="margin-left: 400px; margin-bottom: 100px">E-Mail: rebecaevents@yahoo.com</h4>

</footer>
</body>
</html>