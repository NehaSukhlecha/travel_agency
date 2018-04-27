<?php
include("config.php");

//session maintain in index pages...


if(isset($_SESSION["uid"]))

{

    echo "<script>

   window.location='profile.php';

    </script>";

}

//user register data in table...

if(isset($_POST["sub"]))

{


  $tmp=$_FILES["img"]["tmp_name"];

  $path="upload/".$_FILES["img"]["name"];

  move_uploaded_file($tmp, $path);
  
  $em=$_POST["em"];


  $uname=$_POST["uname"];


  $pass=$_POST["pass"];


  $cpass=$_POST["cpass"];

  $g=$_POST["gender"];

  
  $h=implode(",",$_POST["hobb"]);


  $cn=$_POST["country"];


  if($pass==$cpass)
  {


   $ins="insert into user(photo,email,username,password,gender,hobby,cid) values('$path','$em','$uname','$pass','$g','$h','$cn')";


  $ex=$con->query($ins);


  echo "<h3 align='center'>User Register Succefully</h3>";

  header('Refresh:2,index.php');

  
 }

 else

 {


  echo "<h3 align='center'>Password and confirm password does not Matched</h3>";

  header('Refresh:2,index.php');

 }




}  

//user login.....


if(isset($_POST["log"]))

{

  $em=$_POST["em"];

  $pass=$_POST["pass"];

  $sel="select * from user where email='$em' and password='$pass'";

  $ex=$con->query($sel);

  $fet=$ex->fetch_array();

  $no=$ex->num_rows;

  if($no==1)

  {

    $_SESSION["uid"]=$fet["uid"];
    
    $_SESSION["uname"]=$fet["username"];
 
    $_SESSION["em"]=$fet["email"];

   /* echo "<h3 align='center'>Login succefully</h3>";

    header("refresh:5,profile.php");
    

    */


    echo "<script>

      alert('Login succefully')


      window.location='profile.php';

      </script>";
    

  }


  else
  {


   /* echo "<h3 align='center'>Username & password are incorect</h3>";

    header("refresh:5,index.php");

     
   */
    
echo "<script>

      alert('username & password are incorect Try agin')


      window.location='index.php';

      </script>";
    


 }


} 




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Travel agency for all tourists and book Holiday packeges :: Home page</title>
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


</head>

<body>

<!---header closed here-->
<?php include("header.php");?>

<!---slider start here-->

<?php include("slider.php");?>
<!---slider closed  here-->
&nbsp;
&nbsp;&nbsp;

<!---content start here-->
<div class="content">


<div id="latestpackeges">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="col-md-6 col-xs-12">
<h3 style="color:#600"><i>Our Latest Travels Packages</i></h3>
<p align="justify">

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


<p align="justify">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

</div>

<div class="col-md-6 col-xs-12">
<img src="images/travel2.jpg" style="width:100%; height:320px" />
</div>

</div>
</div>
</div>
</div>
&nbsp;
&nbsp;&nbsp;

<div id="latestrip">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">


<div class="col-md-6 col-xs-12">

<img src="images/travel3.jpg" style="width:100%; height:320px" />


</div>

<div class="col-md-6 col-xs-12">
<h3 style="color:#600"><i>Our Latest Trips </i></h3>

<p align="justify">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>


<p align="justify">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>




</div>
</div>
</div>
</div>
</div>

<!--our services-->

<div id="services">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">
<h3 style="color:#600" align="center"><i>Our Services </i></h3>

<div class="col-md-3 col-xs-12">
<div id="packeges">

<center><span class="fa fa-suitcase" style="color:#A83600; font-size:85px; margin-top:25%"><h4>Our Best Packeges</h4></span></center>

</div>


</div>

<div class="col-md-3 col-xs-12">
<div id="packeges">

<center><span class="fa fa-suitcase" style="color:#A83600; font-size:85px; margin-top:25%"><h4>Our Best Packeges</h4></span></center>

</div>

</div>

<div class="col-md-3 col-xs-12">
<div id="packeges">

<center><span class="fa fa-suitcase" style="color:#A83600; font-size:85px; margin-top:25%"><h4>Our Best Packeges</h4></span></center>

</div>

</div>

<div class="col-md-3 col-xs-12">
<div id="packeges">

<center><span class="fa fa-suitcase" style="color:#A83600; font-size:85px; margin-top:25%"><h4>Our Best Packeges</h4></span></center>

</div>

</div>


</div>
</div>
</div>


&nbsp;

&nbsp;

&nbsp;
&nbsp;

&nbsp;

&nbsp;

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
<!---footer closed  here--->


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
