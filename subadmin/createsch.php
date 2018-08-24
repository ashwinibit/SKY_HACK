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
<div class='nav-bar'><h4 align='center'>CreateUser</h4></div>
    <?php
include ('../nav/navsubadmin.php');

?>
<div class= 'card'>
<h3 align = center font-size = 30px >Create Scheme</h3>

<div>
    
    <form action="../db/createsch.php" method="POST">
                            <label for="ID">Scheme_ID</label>
                            <input type="text" id="ID" name="S_ID" placeholder="ID OF SCH..">
                            
                            <label for="name">Scheme_Name</label>
                            <input type="text" id="sname" name="sname" placeholder="Name Of Sch..">
                            
                            <label for="area">Scheme_description</label>
							<br>   <br>

                            <textarea id="textarea" name="desc" placeholder="description of Sch.." ></textarea>
                            <br><br>

                            <label for="area">Area</label>

                            <input type="text" id="area" name="area" placeholder="Area Of Sch..">

                            <label for="gen">Gender</label>
							<input type="text" id="gen" name="gen" placeholder="Gender">

                            <label for="cat">Catogery</label>
                            <select id="cat" name="cat">
                            <option value="Women">Women</option>
                            <option value="Student">Student</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Labour">Labour</option>
                            <option value="Business">Business</option>
							<option value="Services">Services</option>
							</select>
							
							<label for="benidits">Sub_Catogery</label> 
							
							<input type="text" id="name" name="name" placeholder="Sub_Catogery Of Sch..">

                            
                            <input type="submit" value="Create" name = 'create'>
  </form>
</div>
</div>
</body>
</html>
