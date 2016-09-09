<?php ob_start(); header('Cache-Control: no-store, no-cache, must-revalidate');

//	$data = $_REQUEST['mapdata'];
	
	mysql_connect('localhost','root','SCT@123');
	mysql_select_db('mapdir');
		$query = "select value from mapdir";
		if(!($res = mysql_query($query)))die(mysql_error());		
		$rs = mysql_fetch_array($res,1);
		//die($rs['value']);		
	echo json_encode($rs['value']);
?>
