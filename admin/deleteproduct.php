<?php
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    include_once('../config/connect.php');
    $prd_id=$_GET['prd_id'];
    $sql= "DELETE FROM `Product` WHERE 'prd_id'='$prd_id'";
    $query=mysqli_query($conn,$sql);
    header('location:index.php?page_layout=listproduct');
}else {
    header('location:index.php');
}
?>