<?php 
    session_start();
    $arr = $_SESSION['sanpham'][$_GET['id']];
    if($arr['soluong'] == 1)
    {
        unset($_SESSION['sanpham'][$_GET['id']]);
        unset($_SESSION['sanpham']);
    }else{
        $arr = $_SESSION['sanpham'][$_GET['id']];
        $arr['soluong'] = $arr['soluong']-1;
        $arr['thanhtien'] = $arr['soluong']*$arr["price"];
        $_SESSION['sanpham'][$_GET['id']] = $arr;
    }
    header('Location: giohang.php');
?>