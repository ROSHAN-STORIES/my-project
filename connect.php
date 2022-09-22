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


$email = $_POST['email'];
$password = $_POST['password'];




$sql = "SELECT `email`, `password` FROM `usertable` WHERE `email`='".$email."' AND `password`='".$password."'";
$result = $conn->query($sql);

if($result->num_rows >= 1) {
    $_SESSION['xyz'] = "<p align='left'><font color=green>Welcome </font></p>&nbsp;<font size='1pt'><a href=logout.php class='btn btn-outline-danger'>LOGOUT</a></font></p>";
    header('location: index.php');
} else {
  $_SESSION['abc']="<p align='center'><font color=red>User Does Not Exist! Please Sign Up First</font></p>";
   header('location: login.php');
}            
?>