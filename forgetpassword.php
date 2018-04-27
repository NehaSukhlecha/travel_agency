<?php
include("config.php");

//forget password..


  if(isset($_REQUEST["frg"]))

  {

  $em=$_REQUEST["em"];

  $sel="select password from user where email='$em'";

  $ex=$con->query($sel);

  $no=$ex->num_rows;

  $fet=$ex->fetch_array();

  if($no==1)
  {

   $p=$fet["password"];

   

  }


  else
  {

   echo "<script>

  alert('Emai Id does nort exist in database Try again')

  window.location='forgetpassword.php';

 </script>";

  }

  //password are send on email address apply php mailer library or phpmailer function


 require("phpmailer/class.phpmailer.php"); // path to the PHPMailer class
 require("phpmailer/class.smtp.php");

 require("phpmailer/PHPMailerAutoload.php");
 
 
$mail = new PHPMailer(); // create a new object
//$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only

$mail->SMTPDebug =1;
$mail->Mailer = "smtp";
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "nehasukhlecha29@gmail.com"; // //seneder email id
$mail->Password = "Neha1234";

$p=$fet["password"];

$mail->Body ="$p";


$mail->AddAddress($_REQUEST['em']);
 if(!$mail->Send())
    {
    echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
    echo "Message has been sent";
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
<!---content start here-->
<div class="content">


<div id="latestpackeges">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="col-md-6 col-xs-12">
<h3 style="color:#600"><i>Forget Password</i></h3>



<form method="post">
<div class="form-group">

<label>Enter your Email :<span class="fa fa-inbox"></span></label>


<input type="text" name="em" placeholder="Enter email" class="form-control"><br><br>

</div>
<div class="form-group">

<input type="submit" name="frg" value="Submit" class="btn btn-success btn-lg">


</div>

</form>


</div>


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


</body>
</html>
