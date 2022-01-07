<?php

$con = mysqli_connect("localhost","root","admin123","bms_citizen");
if(!$con){
    echo "Failed to connect MySQL: " . mysqli_connect_error();
}
?>