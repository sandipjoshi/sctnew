<?php
include"../config/config.php";
$mob_no=$_POST['mob_no'];
 $range=$_POST['distance'];
$query = "UPDATE `Parent` SET `dst` = '$range' WHERE `MobileNo`='$mob_no'";
	if(mysql_query($query))
		$result= array("Success"=>'yes');	
			echo json_encode($result);
		die(mysql_error());

 ?>
