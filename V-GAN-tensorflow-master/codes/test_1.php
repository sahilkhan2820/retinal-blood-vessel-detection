<?php
//$command= escapeshellcmd('/var/www/html/V-GAN-tensorflow-master/codes/tt_f.py');
//$op = shell_exec($command);
//echo $op;


$old_path = getcwd();

//echo "$old_path";
echo "<br>";
//chdir('/var/www/html');
echo "<br>";
//$new_path = getcwd();
//echo "$new_path";
echo "<br>";
$output = shell_exec('python3 evaluation.py');
//chdir($old_path);
echo "<pre>$output</pre>";


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$dirname = "../results/DRIVE/V-GAN/";
// $images = glob($dirname."*.png");
// foreach($images as $image) {
//     echo '<img src="'.$image.'" /><br />';
// }
foreach(glob($dirname.'/*.*') as $file) {
    // echo $file;
    echo '<img src="'.$file .'" /><br />';


}
?>

</body>
</html>
