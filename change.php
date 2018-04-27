<?php
include("config.php");

if(isset($_REQUEST["sub"]))

{

  $chng=base64_decode($_REQUEST["chng"]);

  $tmp=$_FILES["img"]["tmp_name"];

  $path="upload/".$_FILES["img"]["name"];

  move_uploaded_file($tmp, $path);

   $upd="update user set photo='$path' where uid='$chng'";

  $ex=$con->query($upd);

  echo "<script>

  alert('Image Udated succefully')

  window.location='profile.php';

  </script>";


}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Change images</title>
</head>
<body>
	<center>
<h2 align="center">Chnage images</h2>
<form method="post" enctype="multipart/form-data">


Upload your Images:<input type="file" name="img"><br><br>

<input type="submit" name="sub" value="Upload Here">



</form>	

</center>

</body>
</html>