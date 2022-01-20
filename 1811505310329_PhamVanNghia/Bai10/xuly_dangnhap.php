<?php

session_start();
ob_start();
include("connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sl = "select * from users where Username='" . $username . "' and Password='" . $password . "'";
$kq = mysql_query($sl);
$row = mysql_fetch_array($kq);
if (mysql_num_rows($kq) > 0) { /* $d=mysql_fetch_array($kq);
  echo "Chao ban ".$d['HoTen']; */

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['hoten'] = $row['HoTen'];
    echo "<script language='javascript'>alert('Dang nhap thanh cong');";
    echo "location.href='noidung.php';</script>";
} else {
    echo "<script language='javascript'>alert('Dang nhap that bai');";
    echo "location.href='dangnhap.php';</script>";
}
?>
