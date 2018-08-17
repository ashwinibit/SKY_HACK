<!DOCTYPE html>
<html>
<head>

<style>
    .wrapper {
    display: grid;
    grid-template-rows: repeat(3, 200px);
    grid-gap: 10px;
    grid-auto-flow: column;
    grid-auto-columns: 300px 100px;
}
* {box-sizing: border-box;}

.wrapper {
    border: 2px solid #f76707;
    border-radius: 5px;
    background-color: #fff4e6;
}

.wrapper  div {
    border: 2px solid #ffa94d;
    border-radius: 5px;
    background-color: #ffd8a8;
    padding: 1em;
    color: #d9480f;
}


.card {

box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: left;
  font-family: arial;
  top:10%;
}

</style>

</head>
<body>
    <?php
    include './nav/navigation.php';
    ?>
    
    <div class="card">
    <div class="wrapper">
      
      <div>
          
        <?php
            echo ("No of Schemes in each Department");
        echo '."<br>';
          $conn = mysqli_connect('localhost','root','','sky');
		if($conn){
                    $sql = "SELECT * FROM `scheme`";

                    //$sql = "SELECT `S_ID`,`S_Name` FROM `scheme` GROUP BY `department` ";
                    $result = $conn->query($sql);
                    
                    

                    if ($result->num_rows > 0) {
                        
                        echo "<table border='1'><th>S_ID</th><th>S_Name</th><th>Department</th>";
                        while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row['S_ID']."</td>";
                                    echo "<td>".$row['S_Name']."</td>";
                                    echo "<td>".$row['department']."</td>";
                                    echo "</tr>";
                                     }
                            echo "</table>";         
                    } 
                    else {
                        echo "0 results";
                    }
                    $conn->close();			
		}
        ?>
          
          
      </div>
      <div>
          
        <?php
            echo ("No of Schemes in each Department");
        echo '."<br>';
          $conn = mysqli_connect('localhost','root','','sky');
		if($conn){
                    $sql = "SELECT * FROM `scheme`";

                    //$sql = "SELECT `S_ID`,`S_Name` FROM `scheme` GROUP BY `department` ";
                    $result = $conn->query($sql);
                    
                    

                    if ($result->num_rows > 0) {
                        
                        echo "<table border='1'><th>S_ID</th><th>S_Name</th><th>Department</th>";
                        while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row['S_ID']."</td>";
                                    echo "<td>".$row['S_Name']."</td>";
                                    echo "<td>".$row['department']."</td>";
                                    echo "</tr>";
                                     }
                            echo "</table>";         
                    } 
                    else {
                        echo "0 results";
                    }
                    $conn->close();			
		}
        ?>
          
          
      </div>
      <div>
          
        <?php
            echo ("No of Schemes in each Department");
        echo '."<br>';
          $conn = mysqli_connect('localhost','root','','sky');
		if($conn){
                    $sql = "SELECT * FROM `scheme`";

                    //$sql = "SELECT `S_ID`,`S_Name` FROM `scheme` GROUP BY `department` ";
                    $result = $conn->query($sql);
                    
                    

                    if ($result->num_rows > 0) {
                        
                        echo "<table border='1'><th>S_ID</th><th>S_Name</th><th>Department</th>";
                        while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row['S_ID']."</td>";
                                    echo "<td>".$row['S_Name']."</td>";
                                    echo "<td>".$row['department']."</td>";
                                    echo "</tr>";
                                     }
                            echo "</table>";         
                    } 
                    else {
                        echo "0 results";
                    }
                    $conn->close();			
		}
        ?>
          
          
      </div>
      <div>
          
        <?php
            echo ("No of Schemes in each Department");
        echo '."<br>';
          $conn = mysqli_connect('localhost','root','','sky');
		if($conn){
                    $sql = "SELECT * FROM `scheme`";

                    //$sql = "SELECT `S_ID`,`S_Name` FROM `scheme` GROUP BY `department` ";
                    $result = $conn->query($sql);
                    
                    

                    if ($result->num_rows > 0) {
                        
                        echo "<table border='1'><th>S_ID</th><th>S_Name</th><th>Department</th>";
                        while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row['S_ID']."</td>";
                                    echo "<td>".$row['S_Name']."</td>";
                                    echo "<td>".$row['department']."</td>";
                                    echo "</tr>";
                                     }
                            echo "</table>";         
                    } 
                    else {
                        echo "0 results";
                    }
                    $conn->close();			
		}
        ?>
          
          
      </div>

    </div>
    </div>
</body>
</html>