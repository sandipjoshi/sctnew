<?php $mobile_no=$_GET['mob_no'];
//$mobile_no='9723011190';
include"../config/config.php";
$sql="SELECT * FROM `Parent` WHERE      MobileNo='$mobile_no'";
$result=mysql_query($sql,$conn2);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
$string = '0123456789';
       $string_shuffled = str_shuffle($string);
       $otp = substr($string_shuffled, 1, 4);
           $result1 = mysql_query("SELECT * FROM `Parent` WHERE MobileNo='$mobile_no'");
//$new_array[] = $row;
while ($row = mysql_fetch_array($result1)) {
$name=$row['fname'];
if(!empty($name)){
//$return=array('Registered'=>'Yes');
     $true = array(
        'Registered' => 'Yes',
        'Otp' => $otp,
        'Type' => 'Driver',
    ); 

}else{
$return=array('Registered'=>'No');
}
    echo json_encode($true);
}
}
else{
        $sql="SELECT * FROM `Driver` WHERE      MobileNo='$mobile_no'";
$result=mysql_query($sql,$conn2);
          
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
         
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
        $string = '0123456789';
       $string_shuffled = str_shuffle($string);
       $otp = substr($string_shuffled, 1, 4);
                                $string = '0123456789';
       $string_shuffled = str_shuffle($string); 
       $otp = substr($string_shuffled, 1, 4);
           $true = array(
        'Registered' => 'Yes',
        'Otp' => $otp,
        'Type' => 'Driver',
    ); 

                                echo json_encode($true);
}
else{
        $sql="SELECT * FROM `School` WHERE Contact='$mobile_no'";
$result=mysql_query($sql,$conn2);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
        $string = '0123456789';
       $string_shuffled = str_shuffle($string);
       $otp = substr($string_shuffled, 1, 4);
        $string = '0123456789';
       $string_shuffled = str_shuffle($string);
       $otp = substr($string_shuffled, 1, 4);
           $true = array(
        'Registered' => 'Yes',
        'Otp' => $otp,
        'Type' => 'School',
    );

                                echo json_encode($true);

}
else{

                 $true= array('Registered' => 'No');
                 echo json_encode($true);
        }
        }
}
?>

