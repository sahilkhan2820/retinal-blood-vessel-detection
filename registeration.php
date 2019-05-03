<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body{
  background-color: #00debb;
}
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

 {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Registration Form</h2>

<form action="" form method="post">
  <!--<div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>-->

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname">
     <br></br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">
     <br></br>
    <label for="dname"><b>Doc Name</b></label>
    <input type="text" placeholder="Full Name" name="dname">
     <br></br>
    <label for="hid"><b>Hospitalid</b></label>
    <input type="text" placeholder="Hospitalid" name="hid">
     <br></br>
    <button type="submit" class="w3-button w3-white w3-border w3-border-blue w3-round-large">Register</button>


   
<?php
   include 'config.php';
  
      // username and password sent from form 
    //if (isset($_POST['submit']))
   if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $uname   = $_POST['uname'];
    $password  = $_POST['psw'];
    $dname = $_POST['dname'];
    $hid    = $_POST['hid'];
   
echo "$uname";
echo "$password";
echo "$dname";
echo "hid";
     //$query = ("INSERT INTO registration ([uname], [password], [dname], [hid]) VALUES ('$uname', '$password', '$dname', '$hid')");

     $sql = "INSERT INTO registration ".
               "(uname,password,dname,hid) "."VALUES ".
               "('$uname','$password','$dname','$hid')";
//echo "$query";
if(mysqli_query($db,$sql))
 {
//echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
  echo "ok";
}
else
 {
 //echo "<script>alert('FAILED TO INSERT');</script>";
  echo "not ok";
  echo ("error".mysqli_error($conn));
 }

 }


?>

    <!--<label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>-->
</form>

</body>
</html>

