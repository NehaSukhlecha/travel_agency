<?php
include("config.php");
//session maintain in profile...


if(!isset($_SESSION["uid"]))

{

echo "<script>

window.location='index.php';

</script>";

}

//change password

if(isset($_REQUEST["chng"]))

{

 $uid=$_SESSION["uid"];

 $opass=$_REQUEST["opass"];

 $cpass=$_REQUEST["cpass"];

 $npass=$_REQUEST["npass"];


 $sel="select password from user where uid='$uid'";

 $ex=$con->query($sel);

 $fet=$ex->fetch_array();

 $p=$fet["password"];

 if($p==$opass && $cpass==$npass)

 {

  $upd="update user set password='$npass' where uid='$uid'";

  $ex=$con->query($upd);

  echo "<script>
   
    alert('Password changed succefully')

    window.location='profile.php';

   </script>";

 }

 else
 {

 echo "<script>
   
    alert('Opass,cpass and Npassword does nor matched Try again')

    window.location='changepassword.php';

   </script>";


 }

}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Travel agency for all tourists and book Holiday packeges :: change password</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/jquery.cycle.min.js"></script>
<script type="text/javascript">

$(document).ready(function(e) {
    
	
	$("#slide").cycle("toss");
	
	
	
});



</script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<style type="text/css">


#sidebar ul li

{
fontpadding: 15px 10px;
font-size: 16px;

}

}
	


</style>
</head>

<body>

<!---header closed here-->
<?php include("header.php");?>

<!---slider start here-->

<!---slider closed  here-->
&nbsp;
&nbsp;&nbsp;

<!---content start here-->
<div class="content">


<div id="latestpackeges">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">

<div id="sidebar">
<div class="col-md-3 col-xs-12">
<div class="list-group">
<div class="list-group-item" style="background-color: #2B0000"><h4 style="color: white">Select Here!</h4></div>
<div class="list-group-item">

<ul>

<li><a href="profile.php">Profile</a></li>


<li><a href="profile.php">Our Services</a></li>

<li><a href="changepassword.php">ChangePassword</a></li>

<li><a href="profile.php">Best Packeges</a></li>

<li><a href="profile.php">Our Ameneties</a></li>

<li><a href="profile.php">Book order<button type="button" class="btn btn-primary btn-sm">
  Notifications <span class="badge badge-light">4</span>
</button></a></li>

</ul>	


	
</div>

<br>
<div class="list-group">
<div class="list-group-item" style="background-color: #2B0000"><h4 style="color: white">Updated News!</h4></div>
<div class="list-group-item">

<?php

$sel="select * from news order by ndescription DESC";

$ex=$con->query($sel);

while($fet=$ex->fetch_array())

{


?>
<marquee direction='up'><p align="justify"><?php echo $fet["ndescription"];?></p></marquee>

<?php

}

?>

	
</div>


</div>
</div>
</div>



<div class="col-md-7 col-xs-12 col-md-offset-1">
<h3>Change password Here :</h3>

<h3 align="right">Welcome To :<?php  echo $_SESSION["uname"];?></h3>

<form method="post">

<div class="form-group">
<table align="center" class="table table-responsive">

<tr>

<th>Enter Old Password<span class="fa fa-lock"></span></th>

<td><input type="password" name="opass" class="form-control" required="" placeholder="Enter old password"></td>

</tr>


<tr>

<th>Enter confirm Password<span class="fa fa-lock"></span></th>

<td><input type="password" name="cpass" class="form-control" required="" placeholder="Enter confirm password"></td>

</tr>



<tr>

<th>Enter New Password<span class="fa fa-lock"></span></th>

<td><input type="password" name="npass" class="form-control" required="" placeholder="Enter New password"></td>

</tr>


<tr>

  <td align="center" colspan="2"><input type="submit" name="chng" value="Submit" class="btn btn-lg btn-success">


</table>


</div>
</form>
</div>
</div>
</div>
</div>
<!--our services-->

<div id="special">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">
<h3 style="color:#FFF" align="center"><i>Today special </i></h3>
<p align="center" style="color:#FFF">Mauris est odio laoreet laoreet sapien non, sollicitudin bibendum nulla amet purus sodales blandit
<br />Mauris est odio laoreet laoreet sapien non.

</p>

</div>
</div>
</div>
</div>
</div>



<div id="newsletter">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">
<h3 style="color:#400000; font-size:35px" align="center"><i>Newsletter </i></h3>
<form method="post">


<div class="form-group col-md-8 col-xs-12 col-md-offset-2">

<input type="text" name="em" placeholder="Enter your email address" class="form-control" style="height:45px;" />




<input type="submit" name="sub" value="Submit" class="btn btn-default btn-lg" />


</div>



</form>

</div>
</div>
</div>
</div>





</div>


<!---content closed here-->



<!--footer start here-->
<?php include("footer.php");?>
<!---footer closed  here-->


<!--login start here-->

<?php

include("login.php");
?>

<!---register start here-->

<div id="myModalSignUp" class="modal fade" role="dialog">

<div class="modal-dialog">
<!--modal content start---->



<div class="modal-header">
<button type="button"  class="close" data-dismiss="modal">&times;</button>
<h3 align="center" class="modal-title"><span class="fa fa-user-circle-o" style="color:#090; font-size:35px"></span></h3>

<center><b style="color:#C00; font-size:22px">User SignUp!</b></center>
</div>
<div class="modal-body">


<form method="post" enctype="multipart/form-data">


<label>Upload photo : <span class="fa fa-image"></span></label> 

<input type="file" name="img"  required=""><br>




<div class="form-group">
    <label>Enter Email : <span class="fa fa-user-circle-o"></span></label></label>
    <input type="text" name="em" placeholder="Enter email" class="form-control"  required="required"/>
</div>



<div class="form-group">
    <label>Enter username : <span class="fa fa-user-circle-o"></span></label></label>
    <input type="text" name="uname" placeholder="Enter username" class="form-control"  required="required"/>
</div>

<div class="form-group">
    <label>Enter Password : <span class="fa fa-lock"></span></label>
    <input type="password" name="pass" placeholder="Enter pasword" class="form-control"  required="required"/>
</div>

<div class="form-group">
    <label>Enter Confirm Password : <span class="fa fa-lock"></span></label>
    <input type="password" name="cpass" placeholder="Enter confirm password" class="form-control"  required="required"/>
</div>


<div class="form-group">
  <label>Select Gender : <span class="fa fa-user"></span></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Female: <input type="radio" name="gender" value="female" style="width: auto; height: auto;" 
          checked="checked">
          Male: <input type="radio" name="gender" value="male" style="width: auto; height: auto;" >
</div>


<div class="form-group">
  <label>Select Hobby : <span class="fa fa-play"></span></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          Surfing: <input type="checkbox" name="hobb[]" value="Surfing" style="width: auto; height: auto;">

          Shopping: <input type="checkbox" name="hobb[]" value="Shopping" style="width: auto; height: auto;">
</div>


<div class="form-group">

<label>Select Country : <span class="fa fa-flag"></span></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="country" class="form-control">
            <option value="">-Select Country-</option>
      <?php
       
       $sel="select * from country";

       $ex=$con->query($sel);

       while($fet=$ex->fetch_array())

       {


         ?>


            <option value="<?php echo $fet["cid"];?>"><?php echo $fet["cname"];?></option>
        

   <?php

        
        }

        ?>    
        </select>

</div>




<div class="form-group">
    <input type="submit" name="sub" value="SignUp >>" class="btn btn-success btn-lg"/>
</div>


</form>
</div>

</div>
</div>







</div>


</body>
</html>
