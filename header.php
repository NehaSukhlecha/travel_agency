<!---header start here-->
<div class="header">
<!---menu start here-->
<div class="nav">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="col-md-2 col-xs-12">
<div id="logo">
<img src="images/AK-OL-The-Hermitage-Travel-Agency-Final-Logo.png" />
</div>
</div>

<nav class="navbar">
<div class="col-md-8 col-xs-12">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mycollapse" style="background-color:#000">
<span class="icon-bar" style="background-color:#FFF"></span>
<span class="icon-bar" style="background-color:#FFF"></span>
<span class="icon-bar" style="background-color:#FFF"></span>
</button>

<div class="collapse navbar-collapse" id="mycollapse">
<ul class="navbar-header">

<?php
if(!isset($_SESSION["uid"]))

{



?>


<li><a class="active" href="#">Home</a></li>
<li><a href="#" style="color:#FFF">About</a></li>
<li><a href="#" style="color:#FFF">Tours</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#FFF">Services<span class="caret"></span></a>

<ul class="dropdown-menu">

<li  style="height:auto; font-size:15px; padding:15px 2px"><a href="#">Hotel Booking</a></li>

<li  style="height:auto; font-size:15px;  padding:15px 2px"><a href="#">Flight Booking</a></li>

<li  style="height:auto; font-size:15px;  padding:15px 2px"><a href="#">Taxi Booking</a></li>

<li style="height:auto; font-size:15px;  padding:15px 2px"><a href="#">Couple Packeges</a></li>

</ul>
</li>
<li><a href="#" style="color:#FFF">Feedback</a></li>
<li><a href="#" style="color:#FFF">contact</a></li>

<?php
}

else


{

	?>

<li><a href="profile.php" style="color:#FFF">Profile</a></li>
<li><a href="changepassword.php" style="color:#FFF">change Password</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#FFF">Services<span class="caret"></span></a>

<ul class="dropdown-menu">

<li  style="height:auto; font-size:15px; padding:15px 2px"><a href="#">Hotel Booking</a></li>

<li  style="height:auto; font-size:15px;  padding:15px 2px"><a href="#">Flight Booking</a></li>

<li  style="height:auto; font-size:15px;  padding:15px 2px"><a href="#">Taxi Booking</a></li>

<li style="height:auto; font-size:15px;  padding:15px 2px"><a href="#">Couple Packeges</a></li>

</ul>
</li>

<li><a href="gallery.php" style="color:#FFF">Gallery</a></li>
<li><a href="logout.php" style="color:#FFF">Logout</a></li>


<?php
}

?>




</ul>


</div>
</div>	



<div class="col-md-2 col-xs-12">
<div id="likeus">
<h4 style="color:#FFF">Like Us:
<span class="fa fa-facebook"></span>
<span class="fa fa-twitter"></span>
<span class="fa fa-google-plus"></span>
<span class="fa fa-instagram"></span>
</h4>

<?php

if(!isset($_SESSION["uid"]))

{

?>
<h5><a href="#login" data-toggle="modal" data-target="#myModal">Sign In!</a> | <a href="#register" data-toggle="modal" data-target="#myModalSignUp">Sign Up!</a></h5>

<?php
}

?>

</div>
</div>










</div>
</div>
</div>
</div>
</div>

<!---menu closed  here--->
