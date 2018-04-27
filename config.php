<?php
session_start();
$ser="localhost";
$user="root";
$pass="";
$db="travelagency";

$con=new mysqli($ser,$user,$pass,$db);

/*if($con)

{


	echo "connection success";
}


else

{

die(mysqli_error($con));

}

*/
?>