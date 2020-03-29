
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
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rebecca Events</title>
    <link rel="stylesheet" href="Stylepag.css">
    <link rel="stylesheet" href="StyleHome.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="Gscript.js"></script>
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
<h1 style="margin-left: 50px; color: darkblue; text-decoration: underline"><b>GALERY</b></h1>

<?php if($user->getname()=='admin'){?>
     <div><a href="addProduct.php">Add image</a></div>
<?php
  } 
?>

<div class="row">
    <?php
    $link =$link = new mysqli("localhost","root","", "imag");

    $qr = mysqli_query($link, "SELECT * FROM products_images");
   $photos = array();
   if(mysqli_num_rows($qr)>0)
    {while($row=mysqli_fetch_array($qr)){
        $photos[]=$row;
    }
    }

   foreach($photos as $path){?>
    <div class="column">
        <img src=<?php print $path['filename'] ?> style="width:100%"  onclick="openModal();currentSlide(<?php print $path['id'] ?>)" class="hover-shadow cursor">
        <?php if($user->getname()=='admin'){?>
      <a href="deletePhoto.php?id=<?php echo $path['id'] ?>">delete</a>
<?php
  } 
?>
       
    </div>
<?php } ?>

</div>



<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
     <?php
      foreach($photos as $path){?>
    <div class="mySlides">
        <img src=<?php print $path['filename'] ?> style="width:100%" >
    </div>
<?php } ?>   
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
            <p id="caption"></p>
        </div>



<?php
      foreach($photos as $path){?>
    <div class="column">
            <img class="demo cursor" src=<?php print $path['filename'] ?> style="width:100%" onclick="currentSlide(<?php print $path['id'] ?>)" >
        </div>
<?php } ?>  


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




