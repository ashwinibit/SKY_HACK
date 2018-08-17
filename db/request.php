<?php

		
		if(isset($_POST['delete'])){
			
			echo  'delete';
			$id=$_POST['sid'];
			$con=mysqli_connect("localhost","root","");
			mysqli_select_db($con,"sky");
			
			
			$result=mysqli_query($con,"DELETE FROM `scheme` WHERE `S_ID` = '$id'");
			//	$n1 = mysqli_fetch_assoc($result);
				
				header("Location: ../request.php");
                                   exit;
				//echo $n1 ;
				
		}	
		
				else if(isset($_POST['aprove'])){
			$id=$_POST['sid'];
			$con=mysqli_connect("localhost","root","");
			mysqli_select_db($con,"sky");
			
			
			$result=mysqli_query($con,"UPDATE `scheme` SET `status`='active' WHERE `S_ID` = '$id'");
				//$n1 = mysqli_fetch_assoc($result);
				header("Location: ../request.php");
                                   exit;
				
				//echo $n1 ;
				
		}
					

?>

