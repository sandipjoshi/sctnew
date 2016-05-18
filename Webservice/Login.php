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

$true="Parents";
				echo json_encode($true);
	   
}
else{
	$sql="SELECT * FROM `Driver` WHERE 	MobileNo='$mobile_no'";
$result=mysql_query($sql,$conn2);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	$true="Driver";
				echo json_encode($true);
}
else{
	$sql="SELECT * FROM `School` WHERE Contact='$mobile_no'";
$result=mysql_query($sql,$conn2);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	$true="School";
				echo json_encode($true);
}
else{

		 $false=0;
		 echo json_encode($false);
	}
	}
}
?>
