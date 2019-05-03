 <style type="text/css">
 	<?php include 'format.css';?>
 </style>
 <!DOCTYPE html>
 <html>
 <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

 	<style type="text/css">
 	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #000000;
}
</style>


<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="testimg.php">Contribute</a></li>
  <li><a href="about.html">About</a></li>

  <li><a href="disp.php">View Contributions</a></li>
</ul>



 </head>
 </html>

 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bvd";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//chdir('/var/www/html/testimg');
$sql = "SELECT * FROM imagetest";

$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($result)) {
	# code...
	echo "<div id = 'img_div'>";
	echo "<img src ='".$row['image']."'>" ;
	echo "<p>".$row['text']."</p>";
	echo "</div>";
}
?> 