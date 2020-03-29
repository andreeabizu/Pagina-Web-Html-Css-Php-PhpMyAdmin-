<?php require_once 'signupController.php';?>
<style>
	span{
		color: red;
	}
	body{
 margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url("poze\\poza2.jpg") ;


}
form{
	color: deepskyblue;
	margin-top: 50px;
	font-size: 20;


}
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Register</title>
</head>
<body>
   <div class="container">
   	<div class="row">
   		<div class="col-md-4 offset-md-4">
	   			<form action="signupController.php" method="post">
	   				<h3 class="text-center">Register</h3>
                        <?php 
                        if(isset($_SESSION['errors']))
                        {
                        	$error=$_SESSION["errors"];
                        	echo "<span>$error</span>";
                        	unset($_SESSION['errors']);
                        }
                        ?>

	   				<div class="form-group">
	   					<label for="username">Username</label>
	   					<input type="text" name="username" class="form-control form-control-lg">
	   				</div>
	   				<div class="form-group">
	   					<label for="email">Email</label>
	   					<input type="email" name="email" class="form-control form-control-lg">
	   				</div>
	   				<div class="form-group">
	   					<label for="password">Password</label>
	   					<input type="password" name="password" class="form-control form-control-lg">
	   				</div>
	   				<div class="form-group">
	   					<label for="passwordConf">Confirm Password</label>
	   					<input type="password" name="passwordConf" class="form-control form-control-lg">
	   				</div>
	   				<div class="form-group">
                          <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
	   				</div>
                     <p class="text-center">Already a member?<a href="login.php">Sign In</a></p>
	            </form>
	        </div>
	    </div>
	</div>
</body>
</html>