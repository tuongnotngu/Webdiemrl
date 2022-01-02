<?php
    require_once('../include/dbcon.php');
    session_start();
    $id = $_GET['id'];
    $query = "DELETE  FROM `users` WHERE `id`='$id'";
    $run = mysqli_query($con,$query);
    if($run){  
        header('location:dsnguoidung.php');
    }
    else{
        header('location:dsnguoidung.php');     
    }
    
?>