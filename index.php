<?php
include('login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>FaceMash & FaceCont -- Login - Create Account</title>
</head>
<body>
    <h1 class="h">FaceMash</h1>
  <div class="mid">
      <div class="panel">
         <form method="post" action="login.php" autocomplete="off">
            <h1>Login, Create Account</h1>
            <div id="line"></div>
            <p>Username</p>
            <input type="text" placeholder="Enter Your Username" name="username">
            <p>Password</p>
            <input type="password" placeholder="Enter Your Password" name="pasword">
            <br>
            <button>Sign In</button>
            <br>
            <br>
          
            <a href="../signup/signup.html">Create Account</a>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>
          
                    </p>
            <p>By FaceMash Company</p>
         </form>
      </div>
  </div>
</body>
</html>

