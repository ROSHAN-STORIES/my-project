<?php
$connection = mysqli_connect("localhost","root","");
if(!$connection){
    echo"Faild to connect database".die(mysqli_error($connection));
}
$dbselect = mysqli_select_db($connection , "mydata");
if(!$dbselect){
    echo"Failed to select databse". die(mysqli_error($connection));
}
?>