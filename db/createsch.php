<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if(isset($_POST['create']))
    { 
    $id=$_POST['S_ID'];
    $name=$_POST['name'];
    $area=$_POST['area'];
    $elig=$_POST['elig'];
    $benifits=$_POST['benifits'];
    $department=$_POST['department'];
    
    
	
	$con=mysqli_connect("localhost","root","");
			mysqli_select_db($con,"sky");
                                          
   $result=mysqli_query($con,"INSERT INTO `scheme`(`S_ID`, `S_Name`, `area`, `elig`, `benifits`, `department`, `status`) VALUES ('$id', '$name', '$area', '$elig', '$benifits', '$department','inactive')");
   
        header("Location: ../subadmin/createsch.php");
                exit;
   
   
    }

?>
