<?php
session_start();
include_once('../config/connect.php');

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    
    $user_id=$_GET['user_id'];
    $sql= "DELETE FROM `User` WHERE user_id = '$user_id'";
    mysqli_query($conn,$sql);
    header('location:index.php?page_layout=listuser');
}else {
    header('location:index.php');
}
?>