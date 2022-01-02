<?php
    require_once('../include/dbcon.php');
    session_start();
    $malop = $_GET['id'];
    $query = "DELETE  FROM `lop` WHERE `malop`='$malop'";
    $run = mysqli_query($con,$query);
    if($run){  
        header('location:allclass.php');
    }
    else{
        header('location:allclass.php');     
    }
    
?>