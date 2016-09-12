<?php   $mobile_no=$_GET['mob_no'];
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
$ch=curl_init();
$request =""; //initialise the request variable
$param['user'] = "devkey";
$param['key'] ="212442b789XX";
$param['mobile'] = $mobile_no;
$param['message'] = $otp ." is your SchoolTime Verification Code.";
$param['senderid'] = "INFOSM";
$param['accusage'] = "1";
foreach($param as $key=>$val)
{
    $request.= $key."=".urlencode($val);
    $request.= "&";
}
$request = substr($request, 0, strlen($request)-1);
$url = "http://mysms.silverlightinfosys.com/submitsms.jsp?".$request;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
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
$ch=curl_init();
$request =""; //initialise the request variable
$param['user'] = "devkey";
$param['key'] ="212442b789XX";
$param['mobile'] = $mobile_no;
$param['message'] = $otp." is your SchoolTime Verification Code.";
$param['senderid'] = "INFOSM";
$param['accusage'] = "1";
foreach($param as $key=>$val)
{
    $request.= $key."=".urlencode($val);
    $request.= "&";
}
$request = substr($request, 0, strlen($request)-1);
$url = "http://mysms.silverlightinfosys.com/submitsms.jsp?".$request;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
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
$ch=curl_init();
$request =""; //initialise the request variable
$param['user'] = "devkey";
$param['key'] ="212442b789XX";
$param['mobile'] = $mobile_no;
$param['message'] = $otp." is your SchoolTime Verification Code.";
$param['senderid'] = "INFOSM";
$param['accusage'] = "1";
foreach($param as $key=>$val)
{
    $request.= $key."=".urlencode($val);
    $request.= "&";
}
$request = substr($request, 0, strlen($request)-1);
$url = "http://mysms.silverlightinfosys.com/submitsms.jsp?".$request;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
}
else{

                 $true= array('Success' => 'No');
                 echo json_encode($true);
        }
        }
} ?>
