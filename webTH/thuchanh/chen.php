<?php
include("ketnoi.php");
$sql = "INSERT INTO nguoidung(name, age) values('Bùi như lạc', 28)";
$sql = "INSERT INTO nguoidung(name, age) values('Bùi Hữu Huy', 27)";
$sql = "INSERT INTO nguoidung(name, age) values('Bùi Minh Hiếu', 27)";
$sql = "INSERT INTO nguoidung(name, age) values('Bùi Hữu Hà', 27)";
$pdo->exec($sql);
?>