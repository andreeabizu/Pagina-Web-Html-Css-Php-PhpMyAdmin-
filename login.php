
<?php
session_start();
$config['sess_expire_on_close']  = TRUE;
if(isset($_SESSION['user']))
header("Location:Webp.php");
?>

<html>
<head>
    <title>Login</title>
     <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<h1 style="color: darkblue; margin-left:50px; margin-top: 50px"><font size=30px face="Freestyle Script">BINE ATI VENIT!!</font></h1>
<div id="frm">
    <d1 style="color :darkblue; margin-left :100px; font-size:20"><strong>LOGIN</strong></d1>
<?php if(@$_GET['err'] ==1 ) {?>
<div style="color :red; font-size: 13px; margin-left:30px">Login incorrect. Please try again</div>
<?php } ?>
    <form action="logincontroller.php" method="POST">
        <p>
        <label style="color:darkblue">Username:</label>
        <input type="text" id="user" name="user"/>
    </p>
    <p>
        <label style="color:darkblue; margin-left:3px"> Password:</label>
        <input type="password" id="pass" name="pass"/>
    </p>
    <p><input  type="submit" id="btn" value="Login"/>
     <a href="signup.php" style="margin-left:210px; color: darkblue">SignUp</a>
</p>
</form>

</div>
</body>
</html>


