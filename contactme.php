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

if(isset($_POST['fsave']))
{   
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];


     $sql_query = "INSERT INTO contactme (name,email,subject,message)
     VALUES ('$name','$email','$subject','$message')";

    
     if (mysqli_query($conn, $sql_query)) 
     {
        $_SESSION['fgh']="<p align='center'><font color=green>Thanks For Contacting Us!</font></p>";
        header('location: contact-us.php');
     } 
    
    else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>