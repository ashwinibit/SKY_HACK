<html>

<head>
    <style>
        
        
        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            padding: 10px;
            background: #f1f1f1;
        }

        .leftcolumn {
            float: left;
            width: 35%;
        }

        /* Right column */

        .rightcolumn {
            float: left;
            width: 65%;
            background-color: #f1f1f1;
            padding-left: 20px;
        }



        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
     @media screen and (max-width: 800px) {
            .leftcolumn,
            .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }
        
        
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
            }

            button:hover {
                opacity:1;
            }

            /* Extra styles for the cancel button */
            .aprovebtn {
                padding: 14px 20px;
                background-color: #f44336;
            }

            /* Float cancel and signup buttons and add an equal width */
            .aprovebtn, .deletebtn {
              float: left;
              width: 50%;
            }


    </style>
</head>

<body>

     <?php
        include ('./nav/navigation.php');

       ?>
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>UnAproved Requests</h2>
                
                
                <?php
                   $conn = mysqli_connect('localhost','root','','sky');

				if($conn){

                    $sql = "SELECT S_ID,S_Name FROM `scheme` WHERE status = 'inactive' ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                            echo "<table border='1'><th>S_ID</th><th>S_Name</th>";
                        while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row['S_ID']."</td>";
                                    echo "<td>".$row['S_Name']."</td>";
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
        <div class="rightcolumn">
            <div class="card">
                <h2>Task To Perform</h2>
                
                <form method="POST" action="db/request.php" >
                    
                    <label for="sid">Enter the Id Of Scheme</label>
                    <input type="text" id="sid" name="sid" placeholder="Enter ID..."/>
                    
                    <button type="submit" class="aprovebtn" value="aprove" name="aprove" >Aprove</button>
                         
                    <button type="submit" class="deletebtn" value="delete" name="delete">Delete</button>
                    </div>
                </form>
            
            </div>
            
        </div>
    </div>

</body>

</html>