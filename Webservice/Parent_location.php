<?php
include"../config/config.php";
$mobile_no=$_POST['mob_no'];
$lat=$_POST['lat'];
$long=$_POST['long'];
$sql = "UPDATE `Parent` SET `lat`='$lat',`long`='$long' WHERE MobileNo='$mobile_no'" or die("quiery is not working") ;

if ($mysqli->query($sql) === TRUE) {
    $true=array('Success'=>'YES');
} else {
    $true=array('Success'=>'No');
}
        echo json_encode($true);


 ?>

