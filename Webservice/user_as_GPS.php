<?php
include"../config/config.php";
$mobileno=$_POST['mob_no'];
$long=$_POST['long'];
$lat=$_POST['lat'];
$result = mysql_query("SELECT * FROM `Driver` WHERE MobileNo='$mobileno'");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
     $driverid=$row['Driverid'];
     $schoolid=$row['Schoolid'];
     $busid=$row['Busid'];
$sql = "INSERT INTO `user_as_gps` ( `driverid`, `long`, `lat`) VALUES ('$driverid', '$long', '$lat')";
if(mysqli_query($mysqli, $sql)){
$res= array("Sucess"=>"YES");
} else{
    $res= array("Sucess"=>"NO");
}
}
echo json_encode($res);
?>
