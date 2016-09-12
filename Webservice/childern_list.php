<?php 
include"../config/config.php";
$mobile_no=$_GET['mob_no'];
$result = mysql_query("SELECT * FROM `Parent` WHERE `MobileNo`='$mobile_no'");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
    $pid = $row['Parent_id'];
	}
//echo $pid;
$new_array=[];
$result = mysql_query("SELECT * FROM `Student` WHERE `P_number`='$mobile_no'");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
    $new_array[] = $row;
        }
//mysql_close($db);// close mysql then do other job with set_time_limit(59)
  

//mysql_close($db);// close mysql then do other job with set_time_limit(59)
    echo json_encode ($new_array);
?>
