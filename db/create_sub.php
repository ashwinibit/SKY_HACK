<?php

    if(isset($_POST['create']))
    { 
    $fullname=$_POST['fullname'];
    $mail=$_POST['email'];
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $mobile=$_POST['mobile'];
    $department=$_POST['department'];
	
	$con=mysqli_connect("localhost","root","");
			mysqli_select_db($con,"sky");
    
   $result=mysqli_query($con,"INSERT INTO `subadmin`(`name`, `email`, `mobile_no`, `username`, `password`, `department`) VALUES ('$fullname', '$mail', '$username', '$password', '$mobile', '$department')");
   
        header("Location: ../create_sub.php");
                 exit;
   
   //echo "INSERT INTO `subadmin`(`name`, `email`, `mobile_no`, `username`, `password`, `department`) VALUES('$fullname', '$mail', '$username', '$password', '$mobile', '$department')";
	
    }

?>