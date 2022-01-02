<?php
    require_once('../include/dbcon.php');
    session_start();
    $matc = $_GET['id'];
    $query = "DELETE  FROM `tieuchi` WHERE `matc`='$matc'";
    $run = mysqli_query($con,$query);
    if($run){  
        header('location:dstieuchi.php');
    }
    else{
        header('location:dstieuchi.php');     
    }
    
?>