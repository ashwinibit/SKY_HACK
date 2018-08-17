<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=textarea], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

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
<body>
    <?php
include ('../nav/navsubadmin.php');

?>
<div class= 'card'>
<h3 align = center font-size = 30px >Create Scheme</h3>

<div>
    
    <form action="../db/createsch.php" method="POST">
                            <label for="ID">Scheme_ID</label>
                            <input type="text" id="ID" name="S_ID" placeholder="ID OF SCH..">
                            
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Name Of Sch..">
                            
                            <label for="area">Area</label>
                            <input type="text" id="area" name="area" placeholder="Area of Sch..">
                            
                             <label for="elig">Eligibility</label> <br>   <br>

                            <textarea id="textarea" name="elig" placeholder="elig of Sch.." ></textarea>
                            <br><br>

                            <label for="benidits">Benifits</label> <br>   <br>

                            <textarea id="ben" name="benifits" placeholder="Benifits of Sch.."></textarea>
                            <br><br>

                            <label for="department">Department</label>
                            <select id="department" name="department">
                            <option value="Agriculture">Agriculture</option>
                            <option value="Energy">Energy</option>
                            <option value="Health">Health</option>
                            <option value="Education">Education</option>
                            </select>
                            
                            <input type="submit" value="Create" name = 'create'>
  </form>
</div>
</div>
</body>
</html>
