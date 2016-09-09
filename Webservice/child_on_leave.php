<?php
include"../config/config.php";
$From=$_POST['From'];
$To=$_POST['To'];
$id=$_POST['id'];
$sql1="SELECT * FROM Student WHERE Student_id=$id";
$result=mysql_query($sql1,$conn2);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

 $sql = "INSERT INTO `child_on_leave` ( `Student_id`, `From`, `To`) VALUES ('$id', '$From', '$To')";
if(mysqli_query($mysqli, $sql)){
  $res = array("Success"=>"Yes");
} else{
    $res = array("Success"=>"Error");
} 
}
else {

$res= array("Success"=>"Invalide Student ID");
} echo json_encode($res); ?>
