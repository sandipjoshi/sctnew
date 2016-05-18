<?php
$mysqli = mysqli_connect("localhost", "root", "SCT@123", "SchoolTime");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$conn2 = mysql_connect('localhost', 'root', '');
	 if (!$conn2)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("SchoolTime", $conn2);
mysql_query("SET character_set_results=utf8", $conn2);
mb_language('uni');
mb_internal_encoding('UTF-8');
mysql_select_db('DATABASE', $conn2);
mysql_query("set names 'utf8'",$conn2); 
mysql_query("SET character_set_client=utf8", $conn2);
mysql_query("SET character_set_connection=utf8", $conn2); 
mysql_query("SET character_set_results=utf8", $conn2);
?>

