<?php
    $conn=new mysqli("localhost","root","","studentdb");
    if(!$conn){
        //echo "Database connection is Sucessfull";
        die(mysqli_error($conn));
    }
    