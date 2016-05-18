<?php 
include"../config/config.php";
$mobile_no=$_POST['mob_no'];
$result = mysql_query("SELECT * FROM `Parent` WHERE 	MobileNo='$mobile_no'");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
    $new_array[] = $row;
	}
//mysql_close($db);// close mysql then do other job with set_time_limit(59)
    echo json_encode ($new_array);
?>
