<?php 
include"../config/config.php";
$studentid=$_GET['id'];
$result = mysql_query("SELECT * FROM `Student` WHERE Student_id=$studentid");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
    $new_array[] = array('lat'=> $row['TrackingRangelat'], 'long'=>$row['TrackingRangelong']);
	}
//mysql_close($db);// close mysql then do other job with set_time_limit(59)
    echo json_encode ($new_array); ?>
