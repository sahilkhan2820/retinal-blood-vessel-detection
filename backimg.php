
<style>
<?php include 'style.css'; ?>
</style>

<?php

$target_dir = "/var/www/html/proj/testimg/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$db = mysqli_connect("localhost","root","root","bvd");

$image = $_FILES['fileToUpload']['name'];
$picsrc = "testimg/".$image;
$text = $_POST['text'];

echo "$image";

//$sql = "INSERT INTO imagetest (image,text) VALUES ('$image','$text')";


 $sql = "INSERT INTO imagetest ".
               "(image,text) "."VALUES ".
               "('$picsrc','$text')";

echo "$sql";
mysqli_query($db,$sql);

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
//    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//    $uploadOk = 0;
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


<html>
<head>
 <title>Including css</title>
  <link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>" type="text/css">
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
</style>


<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="contribute.html">Contribute</a></li>
  <li><a href="about.html">About</a></li>
</ul>

</style>
</head>
<body bgcolor="#98FB98">
<p class="normal"><i>Thank you for Contribution it will always benefit the future progress of this project !.<i> </p>

<p class="round3"><i><b>Many hands make light work. -- John Heywood</b><i></p>
  
<p class="round3"><i><b>Individually, we are one drop. Together, we are an ocean. -- Ryunosuke Satoro</b><i> </p>

</body>
</html>


