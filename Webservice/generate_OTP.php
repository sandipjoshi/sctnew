<?php 
$mobile_no=$_GET['mob_no'];
//$mobile_no='9723011190';
include"../config/config.php";
$sql="SELECT * FROM `Parent` WHERE 	MobileNo='$mobile_no'";
$result=mysql_query($sql,$conn2);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

$string = '0123456789';
       $string_shuffled = str_shuffle($string);
       $otp = substr($string_shuffled, 1, 4);
	   //echo $otp;
	   echo json_encode($otp);
	   
}
else{
		 $false=0;
		 echo json_encode($false);
		 return json_encode($false);
}
?>
