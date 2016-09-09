<?php
include"../config/config.php";
$mobileno=$_GET['mob_no'];
$result = mysql_query("SELECT * FROM `Driver` WHERE MobileNo='$mobileno'");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
     $driverid=$row['Driverid'];
     $schoolid=$row['Schoolid'];
     $busid=$row['Busid'];
                        $result1=mysql_query("select * from pickup_point WHERE schoolid='$schoolid' AND busid='$busid'");     
while($row1=mysql_fetch_array($result1)){
        $new_array=$row1;
}
        }
//mysql_close($db);// close mysql then do other job with set_time_limit(59)
    echo json_encode ($new_array);
?>  
