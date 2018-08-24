<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if(isset($_POST['create']))
    { 
    $id=$_POST['S_ID'];
    $name=$_POST['sname'];
    $desc=$_POST['desc'];
	$area=$_POST['area'];
	$gen=$_POST['gen'];
    $cat=$_POST['cat'];
    $sub_cat=$_POST['sub_cat'];
    
    
	
	$con=mysqli_connect("localhost","root","");
			mysqli_select_db($con,"anjor");
                                          
   $result=mysqli_query($con,"INSERT INTO `schemes_details`(`scheme_ID`, `scheme_name`, `scheme_description`, `area`, `gender`, `category`, `sub_category`) VALUES ('$id','$name','$desc','$area','$gen','$cat','$sub_cat')");
   
    
   
   
        header("Location: ../subadmin/createsch.php");
                exit;
   
   
    }

?>
