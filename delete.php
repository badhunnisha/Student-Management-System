<?php

include 'connection.php';

    if(isset($_GET['deleteid'])){
        $stuid= $_GET['deleteid'];
        $sql = "delete from student_table where id=$stuid";
        $result = mysqli_query($conn,$sql); 
        if($result){
            // echo "Deleted Successfully";
            header('location:display.php');
        }
    }

?>
