<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form </title>
      <link rel="stylesheet" href="style3.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="connect.php" method="post">
            <div class="field">
               <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
               <label>Password</label>
            </div>
            <div class="content">
            <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <br>
               <div class="pass-link">
                <a href="forgotpass.php">Forgot Password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="http://localhost:8080/myregistration/registration.php">Signup now</a>
            </div>
            <br>
            <?php
            if(isset($_SESSION['my'])){
            echo $_SESSION['my'];
            unset($_SESSION['my']);
            }
            else if(isset($_SESSION['your'])){
            echo $_SESSION['your'];
            unset ($_SESSION['your']);
            }
            else if(isset($_SESSION['abc'])){
               echo $_SESSION['abc'];
               unset ($_SESSION['abc']);
               }
            ?>
         </form>
      </div>
   </body>
</html> 