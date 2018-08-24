<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">



</head>
<body>
    <?php
    include './nav/navigation.php';
    ?>
    
    
    <div  class="container-fluid row">
      
      <div class='card'>
          
		                  <form method="POST">
                    
                            <label for="department">Select Catogery</label>
                            <select id="sid" name="sid">
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
						echo "<hr>";
                        echo "<div border='1'>TOTAL NO OF SCHEMES</th>";
						
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
          
<?php
           // echo ("No of Schemes in each Department");
        //echo '."<br>';
		
		
          $conn = mysqli_connect('localhost','root','','anjor');
			if($conn){
                    $sql = "SELECT count(`scheme_ID`) FROM `schemes_details`";

                    //$sql = "SELECT count(`scheme_ID`) FROM `schemes_details`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
						
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
	
        ?>
          
          
      </div>
      <div class = 'card'>
          
        <?php
           // echo ("No of Schemes in each Department");
        //echo '."<br>';
		
		
          $conn = mysqli_connect('localhost','root','','sky');
			if($conn){
                    $sql = "SELECT * FROM `login` WHERE `role` = 'subadmin'";

                    //$sql = "SELECT count(`scheme_ID`) FROM `schemes_details`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
						
                        echo "<div border='1'>List OF SCHEMES</th>";
						echo "<hr>";
                        while($row = $result->fetch_assoc()) {
							
							echo "<div>".$row['username']."</div>";
 
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
          
        <?php
            echo ("No of Schemes in each Department");
        echo '."<br>';
          $conn = mysqli_connect('localhost','root','','sky');
		if($conn){
                    $sql = "SELECT * FROM `scheme`";

                    //$sql = "SELECT `S_ID`,`S_Name` FROM `scheme` GROUP BY `department` ";
                    $result = $conn->query($sql);
                    
                    

                    if ($result->num_rows > 0) {
                        
                        echo "<div border='1'><th>S_ID</th><th>S_Name</th><th>Department</th>";
                        while($row = $result->fetch_assoc()) {
                                    echo "<div>";
                                    echo "<div>".$row['S_ID']."</div>";
                                    echo "<div>".$row['S_Name']."</div>";
                                    echo "<div>".$row['department']."</div>";
                                    echo "</div>";
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
