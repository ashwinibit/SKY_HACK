<?php

    if(isset($_POST['create']))
    { 
    $fullname=$_POST['fullname'];
    $mail=$_POST['email'];
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $mobile=$_POST['mobile'];
    $department=$_POST['department'];
	
    //echo "UPDATE `subadmin` SET `name`= `$fullname`,`email`=`$mail`,`mobile_no`=`$mobile`,`username`=`$username`,`password`=`$password`,`department`= `$department` WHERE `username` = '$username'";
    
    
	$con=mysqli_connect("localhost","root","");
			mysqli_select_db($con,"sky");
    
   $result=mysqli_query($con,"UPDATE `subadmin` SET `name`= `$fullname`,`email`=`$mail`,`mobile_no`=`$mobile`,`password`=`$password`,`department`= `$department` WHERE `username` = '$username'");
   
   
   
   
   
   
        header("Location: ../edit.php");
                 exit;
   
   //echo "INSERT INTO `subadmin`(`name`, `email`, `mobile_no`, `username`, `password`, `department`) VALUES('$fullname', '$mail', '$username', '$password', '$mobile', '$department')";
	
    }

?>
