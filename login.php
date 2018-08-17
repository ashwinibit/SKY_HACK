<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/style_login.css">
</head>
<body>


<div class = "card">

    <h2 align ="center">LOGIN</h2>

    <form method ="POST" action="db/login.php" >
    <div class="imgcontainer">
        <img src="./img/admin.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
            
        <button type="submit" >Login</button>
        
    </div>
</div>
  
</form>

</body>
</html>