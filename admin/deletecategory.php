<?php
session_start();
include_once('../config/connect.php');

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    
    $cat_id=$_GET['cat_id'];
    $sql= "DELETE FROM `Category` WHERE cat_id = '$cat_id'";
    mysqli_query($conn,$sql);
    header('location:index.php?page_layout=category');
}else {
    header('location:index.php');
}
?>