<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
    <div class='nav-bar'><h4 align='center'>Analysis</h4></div>
 	<?php
    
	include '../nav/navsubadmin.php';
	
    ?>
    
    <div  class="container-fluid row">
      
      <div class='card'>
          
							<form class='form-control' method="POST">
                            <label for="department">Select Catogery</label>
                            <select id="sid" name="sid">
							<option value=""></option>
                            <option value="All">All</option>
                            <option value="Labour">Labour</option>
                            <option value="Student">Student</option>
                            <option value="Services">Services</option>
                            </select>
                    
                    <button type="submit" class="aprovebtn" value="aprove" name="aprove" >Search</button>
                         
                </form>
		  
		  
        <?php
           // echo ("No of Schemes in each Department");
        //echo '."<br>';
		
		if(isset($_POST['aprove'])){
			
			$id=$_POST['sid'];
          $conn = mysqli_connect('localhost','root','','anjor');
			if($conn){
                    $sql = "SELECT count(`scheme_ID`) FROM `schemes_details` WHERE `category` ='$id'";

                    //$sql = "SELECT count(`scheme_ID`) FROM `schemes_details`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
						//echo "<hr>";
                        echo "<div border='1'>TOTAL NO OF SCHEMES</th>";
						echo "<hr>";
                        while($row = $result->fetch_assoc()) {
							
							echo "<div>".$row['count(`scheme_ID`)']."</div>";
 
                                     }
                            echo "</div>";     
				
                    } 
                    else {
                        echo "0 results";
                    }
					
                    $conn->close();			
			}
	}
        ?>
          
          
      </div>
      
	  <div class='card'>
					<form>
        
					<label for="sid">Enter the Id Of Scheme</label>
                    <input type="text" id="sid" name="sid" placeholder="Enter ID..."/>
                    
                    <button type="submit" class="aprovebtn" value="aprove" name="aprove" >Sorted</button>
		
					</form>
				<?php
           // echo ("No of Schemes in each Department");
        //echo '."<br>';
		
				
				  $conn = mysqli_connect('localhost','root','','anjor');
					if($conn){
							$sql = "SELECT count(`d`) FROM `fb`";

                    //$sql = "SELECT count(`scheme_ID`) FROM `schemes_details`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
						
                        echo "<div border='1'>List of Requests and Details</th>";
						echo "<hr>";
                        while($row = $result->fetch_assoc()) {
							
							echo "<div>".$row['count(`d`)']."</div>";
 
                                     }
                            echo "</div>";     
				
                    } 
                    else {
                        echo "0 results";
                    }
					
                    $conn->close();			
			}
	
        ?>    
      </div>
		
		
			  <div class='card'>
					<form>
        
					<label for="sid">Enter the Id Of Scheme</label>
                    <input type="text" id="sid" name="sid" placeholder="Enter ID..."/>
                    
                    <button type="submit" class="aprovebtn" value="aprove" name="aprove" >Find</button>
		
					</form>
				<?php
           // echo ("No of Schemes in each Department");
        //echo '."<br>';
		
				
				  $conn = mysqli_connect('localhost','root','','anjor');
					if($conn){
							$sql = "SELECT count(`t`) FROM `fbs`";

                    //$sql = "SELECT count(`scheme_ID`) FROM `schemes_details`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
						
                        echo "<div border='1'>TOTAL NO OF LIKES AND DISLIKES</th>";
						echo "<hr>";
                        while($row = $result->fetch_assoc()) {
							
							echo "<div>".$row['count(`t`)']."</div>";
 
                                     }
                            echo "</div>";     
				
                    } 
                    else {
                        echo "0 results";
                    }
					
                    $conn->close();			
			}
	
        ?>    
      </div>
    
    </div>
    
</body>
</html>
