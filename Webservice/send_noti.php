<?php
include"../config/config.php";
$mobileno=$_POST['mob_no'];
$msg=$_POST['message'];
$busid=$_POST['id'];
$result = mysql_query("SELECT * FROM `SchoolAdmin` WHERE ContactNo='$mobileno'");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
    $name=$row['Name'];
    $schoolid=$row['Schoolid'];
$adminid=$row['Adminid'];
//echo $mobileno.$msg.$name.$schoolid.$adminid;
$sql = "INSERT INTO `notification` (`notiid`, `schoolid`, `sendid`,`busid`, `msg`) VALUES (NULL, '$schoolid', '$adminid', '$busid', '$msg' )";
if(mysqli_query($mysqli, $sql)){
$res= array("Sucess"=>"YES");
} else{  
    $res= array("Sucess"=>"NO");
}        
}       
echo json_encode($res);
?>   
