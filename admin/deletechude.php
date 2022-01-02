<?php
    require_once('../include/dbcon.php');
    session_start();
    $macd = $_GET['id'];
    $query = "DELETE  FROM `chude` WHERE `macd`='$macd'";
    $run = mysqli_query($con,$query);
    if($run){  
        header('location:dschude.php');
    }
    else{
        header('location:dschude.php');     
    }
    
?>