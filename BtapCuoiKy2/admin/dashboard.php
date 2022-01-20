<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('locantion: index.php');
    }
    if(isset($_GET['login'])){
        $dangxuat=$_GET['login'];
    }else{
        $dangxuat='';
    }
    if($dangxuat=='dangxuat'){
        session_destroy();
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome Admin</title>
<meta charset="UTF-8" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<h5>Xin chào admin <?php echo $_SESSION['dangnhap'] ?> <a href="?login=dangxuat">Đăng xuất</a></h5>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="xulydatcho.php">Đặt chỗ</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="xulyhoadon.php">Hóa đơn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="xulydanhmuc.php">Loại ô đỗ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="xulysanpham.php">Ô đỗ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="xulykhachhang.php">Khách hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="thongke.php">Thống kê</a>
            </li>
        </ul>
    </div>
    </nav>

</body>
</html>