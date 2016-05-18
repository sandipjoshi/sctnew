<?php 
include"../config/config.php";
$studentid=$_GET['get_children'];
$result = mysql_query("SELECT * FROM `Student` WHERE Parent_id=$studentid");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
    $new_array[] = $row;
	}
//mysql_close($db);// close mysql then do other job with set_time_limit(59)
    echo json_encode ($new_array);
?>
