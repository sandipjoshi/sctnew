<?php
include"../config/config.php";
$mobile_no=$_POST['mob_no'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$device=$_POST['device_id'];
$type=$_POST['type'];
$sql = "UPDATE `Parent` SET `lat`='$lat',`long`='$long',`device_id`='$device',`type`='$type' WHERE MobileNo='$mobile_no'" or die("quiery is not working") ;

if ($mysqli->query($sql) === TRUE) {
    $true=array('Success'=>'YES');
} else {
    $true=array('Success'=>'No');
}
        echo json_encode($true);


 ?>

