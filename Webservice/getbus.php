<?php
include"../config/config.php";
$mobileno=$_GET['mob_no'];
//$msg=$_POST['message'];
$result = mysql_query("SELECT * FROM `SchoolAdmin` WHERE ContactNo='$mobileno'");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
$schoolid= $row['Schoolid'];
 }
$result = mysql_query("SELECT * FROM `Bus` WHERE Schoolid='$schoolid'");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
$new[]=$row;
 }
echo json_encode($new);
?>
