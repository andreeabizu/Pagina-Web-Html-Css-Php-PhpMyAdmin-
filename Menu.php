<?php
include 'editDB.php';
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
    <script src="Mscript.js"></script>
     <script src="editJavaScript.js"></script>
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
<h1 style="margin-left: 50px; color: darkblue; text-decoration: underline"><b>MENU</b></h1>
<ol>
    <p style="font-size: 18px; font-color:black;"><a href="#nunta" style="margin-right: 20px">Wedding menu</a>
    <a style="margin-right: 20px" href="#botez">Christening party menu</a>
    <a href="#majorat">Birthday menu</a></p>
</ol>
<div class="prg">
    <h1 id="nunta" style="margin-left:250px">Wedding menu</h1>
    <h3>Appetizer</h3>
     <h2 id="menu1" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu1',4)">
        <?php $s=new M(4); $menu=$s->conn(); echo $menu; ?>
   </h2>
    <br/><br/>
    <img src="poze\aperitivnunta.jpg" style="width:300px; margin-left:200px">
    <h3>Fish</h3>
      <h2 id="menu2" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu2',5)">
        <?php $s=new M(5); $menu=$s->conn(); echo $menu; ?>
   </h2>
   <br/><br/>
    <img src="poze\pestenunta.jpg" style="width: 300px; margin-left: 200px">
    <h3>Soup</h3>
     <h2 id="menu3" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu3',6)">
        <?php $s=new M(6); $menu=$s->conn(); echo $menu; ?>
   </h2>
   <br/><br/>
    <img src="poze\ciorbanunta.jpg" style="width: 300px; margin-left: 200px">
    <h3>Meat</h3>
 <h2 id="menu4" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu4',7)">
        <?php $s=new M(7); $menu=$s->conn(); echo $menu; ?>
   </h2>
    <br/><br/>
    <img src="poze\felnunta.jpg" style="width: 300px; margin-left: 200px">
    <br/><br/>
    <button id="s1" onclick="show1()" style="background: darkblue">Show price</button>
    <p id="p1"></p>
    <br/><br/><br/><br/>

    <h1 id="botez" style="margin-left:250px">Christening party menu</h1>
    <h3>Appetizer</h3>
    <h2 id="menu5" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu5',8)">
        <?php $s=new M(8); $menu=$s->conn(); echo $menu; ?>
   </h2>
    <br/><br/>
    <img src="poze\aperitiv.jpg" style="width:300px; margin-left:200px">
    <h3>Fish</h3>
       <h2 id="menu6" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu6',9)">
        <?php $s=new M(9); $menu=$s->conn(); echo $menu; ?>
   </h2>
    <br/><br/>
    <img src="poze\pestebotez.jpg" style="width: 300px; margin-left: 200px">
    <h3>Soup</h3>
     <h2 id="menu7" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu7',10)">
        <?php $s=new M(10); $menu=$s->conn(); echo $menu; ?>
   </h2>
    <br/><br/>
    <img src="poze\ciorbabotez.jpg" style="width: 300px; margin-left: 200px">
    <h3>Meat</h3>
    <h2 id="menu8" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu8',11)">
        <?php $s=new M(11); $menu=$s->conn(); echo $menu; ?>
   </h2>
   <br/><br/>
    <img src="poze\felbotez.jpg" style="width: 300px; margin-left: 200px">
    <br/><br/>
    <button id="s2" onclick="show2()" style="background: darkblue">Show price</button>
    <p id="p2"></p>
<br/><br/><br/><br/>

    <h1 id="majorat" style="margin-left:250px">Birthday menu</h1>
    <h3>Appetizer</h3>
   <h2 id="menu9" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu9',12)">
        <?php $s=new M(12); $menu=$s->conn(); echo $menu; ?>
   </h2>
    <br/><br/>
    <img src="poze\aperitivmaj.jpg" style="width:300px; margin-left:200px">
    <h3>Meat</h3>
    <h2 id="menu10" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu10',13)">
        <?php $s=new M(13); $menu=$s->conn(); echo $menu; ?>
   </h2>
   <br/><br/>
    <img src="poze\felmajorat.jpg" style="width: 300px; margin-left: 200px">
    <h3>Cake</h3>
<h2 id="menu11" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu11',14)">
        <?php $s=new M(14); $menu=$s->conn(); echo $menu; ?>
   </h2>
  <br/><br/>
    <img src="poze\tort.jpg" style="width: 300px; margin-left: 200px">
 <br/><br/>
    <button id="s3" onclick="show3()" style="background: darkblue">Show price</button>
    <p id="p3"></p>
    <br/><br/><br/><br/>
<h2 id="menu12" <?php if($user->getname()=="admin") {?> contenteditable="true" <?php }?> onblur="saveText('menu12',15)">
        <?php $s=new M(15); $menu=$s->conn(); echo $menu; ?>
   </h2>
</div>
        <footer class="wrapper">
    <h3 style="margin-left: 400px; margin-top:100px; margin-bottom: 0px"><a href="Contact.php">Contact</a></h3>
    <h4 style="margin-left: 400px; ">Address: str. Termocentralei,Tg-Jiu</h4>
    <h4 style="margin-left: 400px;">Phone: 0744591512</h4>
    <h4 style="margin-left: 400px; margin-bottom: 100px">E-Mail: rebecaevents@yahoo.com</h4>

</footer>
</body>
</html>