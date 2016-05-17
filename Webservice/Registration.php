<?php 
$mobile_no=$_POST['mob_no'];
//$mobile_no='9723011190';
include"../config/config.php";
$sql="SELECT * FROM `Parent` WHERE 	MobileNo='$mobile_no'";
$result=mysql_query($sql,$conn2);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
$return=true;
echo $return;
echo "Registration Successfully Done";
 return json_encode($return);
	   
}
else{
		 $return=false;
		 echo $return;
		 echo "Registration Fail, Please Register Your Mobile Number";
		 return json_encode($return);
}
?>
