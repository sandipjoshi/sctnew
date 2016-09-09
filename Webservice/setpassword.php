Last login: Wed Sep  7 11:35:37 on ttys000
www:~ ParthPokar$ cd Downloads/
www:Downloads ParthPokar$ ssh -i "SCT.pem" ubuntu@ec2-54-169-121-73.ap-southeast-1.compute.amazonaws.com
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@         WARNING: UNPROTECTED PRIVATE KEY FILE!          @
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
Permissions 0644 for 'SCT.pem' are too open.
It is required that your private key files are NOT accessible by others.
This private key will be ignored.
Load key "SCT.pem": bad permissions
Permission denied (publickey).
www:Downloads ParthPokar$ ssh -i "SCT.pem" ubuntu@ec2-54-169-121-73.ap-southeast-1.compute.amazonaws.com
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@         WARNING: UNPROTECTED PRIVATE KEY FILE!          @
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
Permissions 0644 for 'SCT.pem' are too open.
It is required that your private key files are NOT accessible by others.
This private key will be ignored.
Load key "SCT.pem": bad permissions
Permission denied (publickey).
www:Downloads ParthPokar$ ssh -i "SCT.pem" ubuntu@ec2-54-169-121-73.ap-southeast-1.compute.amazonaws.com
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@         WARNING: UNPROTECTED PRIVATE KEY FILE!          @
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
Permissions 0644 for 'SCT.pem' are too open.
It is required that your private key files are NOT accessible by others.
This private key will be ignored.
Load key "SCT.pem": bad permissions
Permission denied (publickey).
www:Downloads ParthPokar$ sudo chmode 400 ssh -i "SCT.pem" ubuntu@ec2-54-169-121-73.ap-southeast-1.compute.amazonaws.com
Password:
sudo: chmode: command not found
www:Downloads ParthPokar$ sudo ssh -i "SCT.pem" ubuntu@ec2-54-169-121-73.ap-southeast-1.compute.amazonaws.com
The authenticity of host 'ec2-54-169-121-73.ap-southeast-1.compute.amazonaws.com (54.169.121.73)' can't be established.
ECDSA key fingerprint is SHA256:raLCiB5PjCaa5rkEb7vGfgR1jo12T4hl+Cw60jUOHs8.
Are you sure you want to continue connecting (yes/no)? yes
Warning: Permanently added 'ec2-54-169-121-73.ap-southeast-1.compute.amazonaws.com,54.169.121.73' (ECDSA) to the list of known hosts.
Welcome to Ubuntu 14.04.4 LTS (GNU/Linux 3.13.0-74-generic x86_64)

 * Documentation:  https://help.ubuntu.com/

  System information as of Tue Aug  9 17:55:33 UTC 2016

  System load:  0.0               Processes:           113
  Usage of /:   14.8% of 7.74GB   Users logged in:     0
  Memory usage: 23%               IP address for eth0: 172.31.29.44
  Swap usage:   0%

  Graph this data and manage this system at:
    https://landscape.canonical.com/

  Get cloud support with Ubuntu Advantage Cloud Guest:
    http://www.ubuntu.com/business/services/cloud

41 packages can be updated.
29 updates are security updates.


*** System restart required ***
Last login: Tue Aug  9 17:55:34 2016 from 27.116.51.226
_____________________________________________________________________
WARNING! Your environment specifies an invalid locale.
 This can affect your user experience significantly, including the
 ability to manage packages. You may install the locales by running:

   sudo apt-get install language-pack-UTF-8
     or
   sudo locale-gen UTF-8

To see all available language packs, run:
   apt-cache search "^language-pack-[a-z][a-z]$"
To disable this message for all users, run:
   sudo touch /var/lib/cloud/instance/locale-check.skip
_____________________________________________________________________

ubuntu@ip-172-31-29-44:~$ cd /var
ubuntu@ip-172-31-29-44:/var$ ls
backups  cache  crash  lib  local  lock  log  mail  opt  run  spool  tmp  www
ubuntu@ip-172-31-29-44:/var$ cd www/
ubuntu@ip-172-31-29-44:/var/www$ ls
html
ubuntu@ip-172-31-29-44:/var/www$ cd html
ubuntu@ip-172-31-29-44:/var/www/html$ ls
phpmyadmin  sctnew
ubuntu@ip-172-31-29-44:/var/www/html$ cd sctnew
ubuntu@ip-172-31-29-44:/var/www/html/sctnew$ cd ls
-bash: cd: ls: No such file or directory
ubuntu@ip-172-31-29-44:/var/www/html/sctnew$ ls
Webservice  config  getroute.php
ubuntu@ip-172-31-29-44:/var/www/html/sctnew$ cd Webservice/
ubuntu@ip-172-31-29-44:/var/www/html/sctnew/Webservice$ ls
Login.php              checkfile.txt             get_children.php
Parent_location.php    child_loc.php             getbus.php
Parentdetail.php       child_on_leave.php        pickup_point.php
Registration.php       childern_list.php         send_noti.php
bus_loc.php            childern_list_driver.ph   set_range.php
cancel_chid_leave.php  childern_list_driver.php  user_as_GPS.php
checkfile.php          generate_OTP.php
ubuntu@ip-172-31-29-44:/var/www/html/sctnew/Webservice$ sudo vim generate_OTP.php 
ubuntu@ip-172-31-29-44:/var/www/html/sctnew/Webservice$ sudo vim generate_OTP.php 
ubuntu@ip-172-31-29-44:/var/www/html/sctnew/Webservice$ sudo vim generate_OTP.php 
ubuntu@ip-172-31-29-44:/var/www/html/sctnew/Webservice$ sudo vim generate_OTP.php 
ubuntu@ip-172-31-29-44:/var/www/html/sctnew/Webservice$ sudo vim generate_OTP.php 
ubuntu@ip-172-31-29-44:/var/www/html/sctnew/Webservice$ sudo vim generate_OTP.php 
ubuntu@ip-172-31-29-44:/var/www/html/sctnew/Webservice$ erate_OTP.php 
ubuntu@ip-172-31-29-44:/var/www/html/sctnew/Webservice$ sudo vim generate_OTP.php 
ubuntu@ip-172-31-29-44:/var/www/html/sctnew/Webservice$ sudo vim gen

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
}       ?><script>
  $.ajax({
                type: "POST",
                url: "http://mysms.silverlightinfosys.com/submitsms.jsp?user=devkey&key=212442b789XX&mobile=+919723011190&message=test sms&senderid=INFOSM&accusage=1",
                success: function(result) {
                }

            });
</script>
                                                                                                                                                                                          92,1          Bot

