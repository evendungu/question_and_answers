<?php
$conn = mysqli_connect("localhost","root","","question_bank");

if(mysqli_errno($conn)){
    echo "Error connecting to db: ".mysqli_connect_error();
    die();
}

?>