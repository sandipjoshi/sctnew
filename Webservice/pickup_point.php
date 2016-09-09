<?php 
include"../config/config.php";
$count=0;
$mobileno=$_GET['mob_no'];
$result = mysql_query("SELECT * FROM `Driver` WHERE MobileNo='$mobileno'");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
     $driverid=$row['Driverid'];
     $schoolid=$row['Schoolid'];
     $busid=$row['Busid'];
$result = @mysql_query("SELECT * From pickup_point WHERE busid=$busid");
while($process =  @mysql_fetch_array($result)) {
$ret[$count]=$process;
$count++;
}
echo JSON_encode($ret);	}
//echo json_encode($row);
//echo json_encode( $setvalue);
//  echo json_encode ($new_array);
?>

