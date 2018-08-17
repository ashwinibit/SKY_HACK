<?php


if(isset($_POST['create']))
    { 
    $id=$_POST['S_ID'];
    $name=$_POST['name'];
    $area=$_POST['area'];
    $elig=$_POST['elig'];
    $benifits=$_POST['benifits'];
    //$department=$_POST['department'];

	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"sky");
        $result=mysqli_query($con,"UPDATE `scheme` SET `S_Name`=`$name`,`area`=`$area`,`elig`=`$elig`,`benifits`=`$benifits`,,`status`= inactive WHERE `S_ID`=`$id`");

                if (mysqli_query($result)) {
                        echo "<script type='text/javascript'>alert('UPDATED SUCESSFULLY')</script>";
                         header("Location: ../subadmin/updatesch.php");
                        //exit;
                    } 
                    else {
                        echo "<script type='text/javascript'>alert('DATA IS IN APROPRIATE')</script>";
                         header("Location: ../subadmin/updatesch.php");
                        }
   
       
   
   
   //echo "INSERT INTO `subadmin`(`name`, `email`, `mobile_no`, `username`, `password`, `department`) VALUES('$fullname', '$mail', '$username', '$password', '$mobile', '$department')";
	
    }

?>