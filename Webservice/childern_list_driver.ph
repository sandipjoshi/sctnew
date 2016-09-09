<?php
include"../config/config.php";
$mob=$_GET['mob_no'];
$quiry=mysql_query("select * from Driver WHERE MobileNo=$mob");
while($row=mysql_fetch_array($quiry)){
echo encode_json($row);
}


 ?>
