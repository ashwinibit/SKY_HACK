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
include ('./nav/navigation.php');

?>
<div class= 'card'>
<h3 align = center font-size = 30px >Create SubAdmin</h3>

<div>
  <form method = 'POST' action="db/create_sub.php">
							<label for="name">Name</label>
                            <input type="text" id="name" name="fullname" placeholder="Your name..">
                            
                            <label for="mail">Email</label>
                            <input type="text" id="mail" name="email" placeholder="Your email..">
                            
                            <label for="username">Username</label>
                            <input type="text" id="username" name="uname" placeholder="Your username..">

                            <label for="password">Password</label>
                            <input type="text" id="password" name="pass" placeholder="Your password..">


                            <label for="mobile">Mobile No.</label>
                            <input type="text" id="mobile" name="mobile" placeholder="Your Mobile..">

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
