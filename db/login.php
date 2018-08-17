<?php
	$conn = mysqli_connect('localhost','root','','sky');

if($conn){
	
	if(isset($_POST['uname'])){
		$username=$_POST['uname'];
		$password=$_POST['psw'];

		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"sky");
		$result=mysqli_query($con,"select * from login where username='$username' and password='$password'");
		$n1 = mysqli_fetch_assoc($result);

			$user=$n1['username'];
			$pass=$n1['password'];
			$role=$n1['role'];
			$state=$n1['state'];
		if($username==$user && $pass==$password && $role=='admin' && $state=='active' )
		{
		  
			header('Location: ../admin.php');
				if(isset($_SESSION['user'])) header('Location: ../admin.php');
				exit();
                               
		}
	
		else if($username==$user && $pass==$password && $role=='subadmin' && $state=='active' )
		{
				header('Location:../subadmin/subadmin.php');
				if(isset($_SESSION['user'])) header('Location: ../subadmin/subadmin.php'); 
				exit();
		} 
		
                else{
               echo "<script type='text/javascript'>alert('incorrect username or password!')</script>";
                    header("Location: ../login.php");
                 //exit;    
                
                }
		}
		
}
?>