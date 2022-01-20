<?php
include('../db/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title >Khách hàng</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<h5>Xin chào admin 
<?php
    if(isset($_GET['login'])){
        $dangxuat=$_GET['login'];
    }else{
        $dangxuat='';
    }
    if($dangxuat=='dangxuat'){
        session_destroy();
        header('location: index.php');
    }
    $sql_select_admin=mysqli_query($mysqli,"select * from admin");
    $j=0;
    while($row_tenadmin=mysqli_fetch_array($sql_select_admin)){
        $j++;
        echo $row_tenadmin['tenadmin'];
    }
?> 
<a href="?login=dangxuat">Đăng xuất</a></h5>
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
            <a class="nav-link disabled" href="xulykhachhang.php" style="color:red">Khách hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="thongke.php">Thống kê</a>
        </li>
        </ul>
    </div>
    </nav><br> <br>
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
            <h4>Khách hàng</h4>
            <?php
            $sql_select_khachhang=mysqli_query($mysqli,"select * from khachhang order by makh");
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Quản lý</th>
                </tr>
                <?php
                $i=0;
                while($row_khachhang=mysqli_fetch_array($sql_select_khachhang)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_khachhang['tenkh'] ?></td>
                    <td><?php echo $row_khachhang['sdt'] ?></td>
                    <td><?php echo $row_khachhang['diachi'] ?></td>
                    <td><?php echo $row_khachhang['email'] ?></td>
                    <td><a href="?quanly=xemgiaodich&khachhang=<?php echo $row_khachhang['makh'] ?>">Xem hóa đơn</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            
            </div>
            <div class="col-md-12">
            <h4>Liệt kê lịch sử hóa đơn</h4>
            <?php
            if(isset($_GET['khachhang'])){
                $magiaodich=$_GET['khachhang'];
            }else{
                $magiaodich='';
            }
            $sql_select=mysqli_query($mysqli,"select * from khachhang,datcho,odo,loaiodo,hoadon where khachhang.makh=datcho.makh and odo.maodo=datcho.maodo and odo.maloaio=loaiodo.maloaio and hoadon.madatcho=datcho.madatcho and datcho.makh='$magiaodich'");
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Mã hóa đơn</th>
                    <th>Tên khách hàng</th>
                    <th>Biển số xe</th>
                    <th>Tên ô đỗ</th>
                    <th>Loại ô đỗ</th>
                    <th>Ngày lập hóa đơn</th>
                    <th>Thời gian vào</th>
                    <th>Thời gian ra</th>
                    <th>Tiền đỗ xe</th>
                    <th>Tiền phạt</th>
                    <th>Tổng tiền</th>
                </tr>
                <?php
                $i=0;
                while($row_donhang=mysqli_fetch_array($sql_select)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_donhang['mahd'] ?></td>
                    <td><?php echo $row_donhang['tenkh'] ?></td>
                    <td><?php echo $row_donhang['biensoxe'] ?></td>
                    <td><?php echo $row_donhang['tenodo'] ?></td>
                    <td><?php echo $row_donhang['tenloaio'] ?></td>
                    <td><?php echo $row_donhang['ngaylaphd'] ?></td>
                    <td><?php echo $row_donhang['thoigianvao'] ?></td>
                    <td><?php echo $row_donhang['thoigianra'] ?></td>
                    <td><?php echo $row_donhang['tiendukien'] ?></td>
                    <td><?php echo $row_donhang['tienphat'] ?></td>
                    <td><?php echo $row_donhang['tongtien'] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
            
            </div>
        </div>
    </div>

</body>
</html>