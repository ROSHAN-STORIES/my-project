<?php
$connect=mysqli_connect("localhost","root","","mydata");

if(mysqli_connect_error()){
    echo "Cannot connect to Database";
    exit();
}

?>