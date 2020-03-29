<!DOCTYPE>
<html>
<head>
<meta>
<title>Booking</title>
<style>
body{
	background-color: green;
}
h1{
	margin-left: 600px;
	margin-top: 100px;
}
table{
	margin-left: 400px;
	margin-top: 50px;
	font-size:30px;

}
div{margin-left: 600px;
	margin-top: 100px;
	font-size: 25px;

}
</style>
</head>

<body>
 
	  <h1>Welcome admin</h1>
	  <?php
 $link= new mysqli("localhost","root","", "logare");
      if($link->connect_error)
	   {
		die("Connection failed: ".$link->connect_error);
	   }

	$qr = mysqli_query($link, "SELECT * from rezervare WHERE checked=0")
         or die("Failed to query database " .mysqli_error());
      ?>
      <table border="3">
	  <?php
	  
	  while($data=mysqli_fetch_array($qr))
	  {
	  ?>
	  <tr>
	  <td><?php echo $data['username']; ?></td>
	  <td><?php echo $data['eve']; ?></td>
	  <td><?php echo $data['numar']; ?></td>
	  <td><?php echo $data['dataEven']; ?></td>
	  <td><a href="confirmAdmin.php?id=<?php echo $data['id'] ?>">confirm</a></td>
      <td><a href="deleteAdmin.php?id=<?php echo $data['id'] ?>">delete</a></td>

	  </tr>
	  <?php
	  }
	  
	  
	  ?>
	  </table>
	  <div><a href="Booking.php">Back to booking</a></div>
	  </div>
</body>
</html>