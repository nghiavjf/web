<?php
session_start();
unset($_SESSION['sanpham']);
header('Location: giohang.php');
?>