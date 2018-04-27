<?php  
if(isset($_REQUEST["sub"]))

{
require("class.phpmailer.php"); // path to the PHPMailer class
 require("class.smtp.php");
 
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
$mail->Username = "testname118@gmail.com"; // //seneder email id
$mail->Password = "testing123456";

$mail->Body =$_REQUEST["uname"]."<br>".$_REQUEST["mob"]."<br>".$_REQUEST["message"]."<br>";


$mail->AddAddress($_REQUEST['email']);
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


<body>

<center>

<form method="post">


Enter username :<input type="text" name="uname" required><br><br>


Enter Mobile :<input type="text" name="mob" required><br><br>
<br>

Enter Email :<input type="text" name="email" required><br><br>


Enter Message :<textarea name="message"></textarea><br><br>

<input type="submit" name="sub" value="Send!">


</form>





</body>
</html>