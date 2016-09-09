<?php 
include"../config/config.php";
$mobile_no=$_GET['mob_no'];
$result = mysql_query("SELECT * FROM Driver WHERE MobileNo=$mobile_no");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result)) {
    $busid = $row['Busid'];
    $schoolid=$row['Schoolid'];

	}
$query= mysql_query("SELECT * FROM Route WHERE schoolid=$schoolid AND busid=$busid");
while($row= mysql_fetch_array($query))
{

$route=$row['Routeid'];

}
$query= mysql_query("SELECT * FROM Student WHERE Route_id=$route AND School_id=$schoolid");
while($row= mysql_fetch_array($query))
{

$name[]=$row;
$fromdate=$row['LeaveFrom'];
$todate=$row['LeaveTo'];

$paymentDate = date('Y-m-d');
    $paymentDate=date('Y-m-d', strtotime($paymentDate));;
    //echo $paymentDate; // echos today! 
    $contractDateBegin = date('Y-m-d', strtotime($fromdate));
    $contractDateEnd = date('Y-m-d', strtotime($todate));

    if (($paymentDate > $contractDateBegin) && ($paymentDate < $contractDateEnd))
    {
	//array_push($name,'comming'=> "YES")
	$addarray= array('Comming'=>"YES");
	//echo "Comming yes";
   }
    else
    {
	$addarray= array('Comming'=>"NO");
	//echo "Comming no";       
  }
$row['Coming']=$addarray['Comming'];
$newa[]=$row;
}
//mysql_close($db);// close mysql then do other job with set_time_limit(59);
    echo json_encode ($newa);
?>
