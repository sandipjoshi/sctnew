<?php 
include"../config/config.php";
$pmobile=$_GET['mob_no'];
$result1 = mysql_query("SELECT * FROM `Parent` WHERE MobileNo=$pmobile");
//$new_array[] = $row;
while ($row1 = mysql_fetch_array($result1)) {
    $pid = $row1['Parent_id'];
$result = mysql_query("SELECT * FROM `Student` WHERE Parent_id=$pid");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
    $list[] = $row;
        }

	}
//mysql_close($db);// close mysql then do other job with set_time_limit(59)
    echo json_encode ($list);
?>
