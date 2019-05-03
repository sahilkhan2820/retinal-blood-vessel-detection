
<style>
<?php include 'style.css'; ?>
</style>




<html>
<head>
 <title>Run Model</title>
  <link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>" type="text/css">


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
p.round3 {
  border: 2px solid black;
  border-radius: 12px;
}

p.normal {
  border: 2px solid red;
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

.input{

	text-align: center;
	 width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
</style>


<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="contribute.html">Contribute</a></li>
  <li><a href="about.html">About</a></li>
</ul>

</style>
</head>


<form>
	<div class="input">
<input type="submit" name="btn" value="Run model" formaction="/proj/V-GAN-tensorflow-master/codes/test_1.php">  

</div>
</form>

</body>
</html>


<?php

//$target_dir = "/var/www/html/proj/uploaddoc/";
$target_dir = "/var/www/html/proj/V-GAN-tensorflow-master/data/DRIVE/test/images/uploadtest/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
	echo "<br>";
        //echo "File is of type image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}
// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" ) {
  //  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //$uploadOk = 0;
//}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	echo "<br>";
        echo "The data ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded successfully !.";
	
	echo "<html>";
	//echo "<p>Roundest border</p>";
	echo "</html>";
	
    } else {
	echo "<br>" ;
        echo "Sorry, there was an error uploading your file.";
    }
}
?>