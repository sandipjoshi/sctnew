<?php
include"../config/config.php";
$id=$_POST['id'];
$sql = "DELETE FROM child_on_leave WHERE Student_id='$id'";

if ($mysqli->query($sql) === TRUE) {

$true=array("Sucess"=>"Yes");
} else {
	$true=array("Sucess"=>"No");
}
if(mysqli_affected_rows($mysqli)>0)
{
$true=array("Sucess"=>"Yes");
}
else {
$true=array("Sucess"=>"Record not Found");
 }
echo json_encode($true);
 ?>
