<?php  $mobile_no=$_GET['mob_no'];
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
           $true = array(
        'Success' => 'Yes',
        'Otp' => $otp,
        'Type' => 'Parents',
    );

                                echo json_encode($true);
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
        'Success' => 'Yes',
        'Otp' => $otp,
        'Type' => 'Driver',
    );

                                echo json_encode($true);

}
else{
  $sql="SELECT * FROM `SchoolAdmin` WHERE ContactNo='$mobile_no'";
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
        'Success' => 'Yes',
        'Otp' => $otp,
        'Type' => 'School',
    );

                                echo json_encode($true);

}
else{

                 $true= array('Success' => 'No');
                 echo json_encode($true);
        }
        }
}
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://mysms.silverlightinfosys.com/submitsms.jsp?user=devkey&key=212442b789XX&mobile=%20919723011190&message=test%20sms&senderid=INFOSM&accusage=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 160015e7-efb7-4547-8f79-d37e8da1494f"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
   ?>
