<?php
session_start();
include_once('../config/connect.php');

if ((isset($_SESSION['email']) && isset($_SESSION['password']) OR isset($_COOKIE['rememberemail']))) {
    include_once('admin.php');
}else {
    include_once('login.php');
}
?>