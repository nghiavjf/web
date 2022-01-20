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

<p>Xin chào <?php echo $_SESSION['dangnhap'] ?> <a href="?login=dangxuat">Đăng xuất</a></p>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="xulydonhang.php">Đơn hàng <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="xulydanhmuc.php">Danh mục menu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="xulydanhmucbaiviet.php">Danh mục bài viết</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="xulybaiviet.php">Bài viết</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="xulysanpham.php">Sản phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="xulykhachhang.php">Khách hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="xulylienhe.php">Liên hệ</a>
        </li>
        </ul>
    </div>
    </nav>

</body>
</html>