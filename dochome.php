
<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
<style>
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
  <li><a class="active" href="index.html">Logout</a></li>
  <li><a href="testimg.php">Contribute</a></li>
  <li><a href="about.html">About</a></li>
  <!--<li><a href="/proj/V-GAN-tensorflow-master/codes/test_1.php">Run Model</a></li>-->
</ul>





<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
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
  width: 50%;
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
<style>
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

li a:hover {
  background-color: #111;
}

.button{
  background-color: #008CBA;

    background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  align-content: center;
}
</style>






</head>
<body>

<h2 align="center"><b>Upload Image for Prediction</b></h2>

<form action="docupload.php" method="post" enctype="multipart/form-data">
 <div class="container" align="center">
    
    Select image to upload:-->
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br></br>
    <input type="submit" value="Upload Image" name="submit">
    <br></br>
    
    

  </div>
</form>
<br></br>
<style type="text/css">
  .input{
    text-align: center;
    align-content: center;
    align-self: center;
  }
</style>

<!--<form action="" method="post">
<div class="input">
<input type="submit" name="btn" value="Run model" formaction="/proj/V-GAN-tensorflow-master/codes/test_1.php">  
</div>
</form>-->
<!--<iframe src="button.html" style="border:2px solid red;"></iframe>-->

</body>
</html>