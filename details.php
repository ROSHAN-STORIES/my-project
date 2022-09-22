<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$database_name="mydata";

$conn= mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{   
     $name = $_POST['name'];
     $usernames = $_POST['username'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $confirm_password = $_POST['confirmpassword'];


     $sql_query = "INSERT INTO usertable (name,username,phone,email,password,confirmpassword)
     VALUES ('$name','$usernames','$phone','$email','$password','$confirm_password')";

     $select = mysqli_query($conn, "SELECT * FROM usertable WHERE email = '".$_POST['email']."'");
     if(mysqli_num_rows($select)) {
        $_SESSION['your']="<p align='center'><font color=red>This Email Already Exists</font></p>";
        header('location: login.php');
     }

     if (mysqli_query($conn, $sql_query)) 
     {
        $_SESSION['my']="<p align='center'><font color=red>User Created Successfully !Now Login</font></p>";
        header('location: login.php');
     } 
    
    else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>