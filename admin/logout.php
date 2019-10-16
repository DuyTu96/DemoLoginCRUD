<?php
session_start();
if ((isset($_SESSION['email']) && isset($_SESSION['password']) OR isset($_COOKIE['rememberemail']))){
    session_destroy();
    setcookie('rememberemail', $_POST['email'], time() - 3600);
}
header('location:index.php');

?>