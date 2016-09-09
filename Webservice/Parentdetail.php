<?php
include"../config/config.php";
$mobile_no=$_POST['mob_no'];
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$address=$_POST['adress'];
$sql = "UPDATE `Parent` SET `fname`='$fname',`lname`='$lname', `Address`='$address' WHERE MobileNo='$mobile_no'" or die("quiery is not working") ;

if ($mysqli->query($sql) === TRUE) {
    $true=array('Success'=>'YES');
} else {
    $true=array('Success'=>'No');
}
	echo json_encode($true);


 ?>
