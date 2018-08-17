<html>
    <head>
        <style>

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.card {

box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: left;
  font-family: arial;

}

</style>
    </head>
    <body>
       <?php
        include ('./nav/navigation.php');

       ?>
        <div class="card">
            
            <div class="card">
                
        </div>
        <div class="card">
      <p class="card-text">Some text inside the fourth card</p>
        </div>
            <div class="card">
                
        </div>
              <div class="card">
                  
                  <p class="card-text">List Of admins and SubAdmins</p>
                  <?php
                    $conn = mysqli_connect('localhost','root','','sky');

				if($conn){

                    $sql = "SELECT * FROM `login`";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                            echo "<table border='1'><th>S_ID</th><th>S_Name</th><th>S_Name</th><th>S_Name</th>";
                        while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row['username']."</td>";
                                    echo "<td>".$row['password']."</td>";
                                    echo "<td>".$row['role']."</td>";
                                    echo "<td>".$row['state']."</td>";
                                    //echo "<td>".$row['day']."</td>";
                                    echo "</tr>";
                        }
                            echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
					
					
				}
                  ?>
        </div>
            
            
            <div class="card">
                  
                  <p class="card-text">List Of Active Schemes</p>
                  <?php
                    $conn = mysqli_connect('localhost','root','','sky');

				if($conn){

                    $sql = "SELECT * FROM `scheme` WHERE `status` = 'active'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                            echo "<table border='1'><th>S_ID</th><th>S_Name</th><th>Area</th><th>Department</th>";
                        while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row['S_ID']."</td>";
                                    echo "<td>".$row['S_Name']."</td>";
                                    echo "<td>".$row['area']."</td>";
                                    //echo "<td>".$row['elig']."</td>";
                                   // echo "<td>".$row['benifits']."</td>";
                                    echo "<td>".$row['department']."</td>";
                                    //echo "<td>".$row['day']."</td>";
                                    echo "</tr>";
                        }
                            echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
					
					
				}
                  ?>
        </div>
            
            
        </div>
        
        
    </body>
    
</html>

