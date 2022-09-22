<?php 
session_start();

?>
<html>
    <head>
        <title>
        registration form
        </title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="container">
            <div class="title">Registration</div><br><br>
            <form action="details.php" method="POST" >
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name:</span>
                        <input type="text" name="name"  placeholder="Enter Your Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">UserName:</span>
                        <input type="text" name="username"  placeholder="Enter Your UserNmae" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email:</span>
                        <input type="text" name="email"  placeholder="Enter Your Email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mobile:</span>
                        <input type="text" name="phone"  placeholder="Enter Your Mobile-no "   pattern="[1-9]{1}[0-9]{9}" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password:</span>
                        <input type="password" name="password"  placeholder="Enter Your Password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm-password:</span>
                        <input type="password" name="confirmpassword"  placeholder="Confirm password" required>
                    </div>
                </div>
               
                
                <div class="button">
                    <input type="submit" name="save" value="Register">
                </div>
                
                
            
            </form>
        
        </div>
        
    </body>
</html>