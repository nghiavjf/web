<?php
include('../db/connect.php');
?>
<!-- <?php
    if(isset($_POST['capnhatdonhang'])){
        $xuly=$_POST['xuly'];
        $mahang=$_POST['mahang_xuly'];
        $sql_update_donhang=mysqli_query($mysqli,"update donhang set tinhtrang='$xuly' where mahang='$mahang'");
    }
?>
<?php
   if(isset($_GET['xoadonhang'])){
       $mahang=$_GET['xoadonhang'];
       $sql_delete=mysqli_query($mysqli,"delete from donhang where mahang='$mahang'");
       header('location:xulydonhang.php');
   }
?> -->

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title >Khách hàng</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
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
            <a class="nav-link disabled" href="xulykhachhang.php" style="color:red">Khách hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="xulylienhe.php">Liên hệ</a>
        </li>
        </ul>
    </div>
    </nav><br> <br>
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
            <h4>Khách hàng</h4>
            <?php
            $sql_select_khachhang=mysqli_query($mysqli,"select * from khachhang,giaodich where khachhang.khachhang_id=giaodich.khachhang_id group by giaodich.magiaodich order by khachhang.khachhang_id desc");
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Ngày mua</th>
                    <th>Quản lý</th>
                </tr>
                <?php
                $i=0;
                while($row_khachhang=mysqli_fetch_array($sql_select_khachhang)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_khachhang['name'] ?></td>
                    <td><?php echo $row_khachhang['phone'] ?></td>
                    <td><?php echo $row_khachhang['address'] ?></td>
                    <td><?php echo $row_khachhang['email'] ?></td>
                    <td><?php echo $row_khachhang['ngaythang'] ?></td>
                    <td><a href="?quanly=xemgiaodich&khachhang=<?php echo $row_khachhang['magiaodich'] ?>">Xem giao dịch</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            
            </div>
            <div class="col-md-12">
            <h4>Liệt kê lịch sử đơn hàng</h4>
            <?php
            if(isset($_GET['khachhang'])){
                $magiaodich=$_GET['khachhang'];
            }else{
                $magiaodich='';
            }
            $sql_select=mysqli_query($mysqli,"select * from khachhang,giaodich,sanpham where giaodich.sp_id=sanpham.sp_id and  khachhang.khachhang_id=giaodich.khachhang_id and giaodich.magiaodich='$magiaodich' order by khachhang.khachhang_id desc");
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Mã giao dịch</th>
                   
                    <th>Tên sản phẩm</th>
                    <th>Ngày đặt</th>
                    
                </tr>
                <?php
                $i=0;
                while($row_donhang=mysqli_fetch_array($sql_select)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_donhang['magiaodich'] ?></td>
                    
                    <td><?php echo $row_donhang['sp_name'] ?></td>
                    <td><?php echo $row_donhang['ngaythang'] ?></td>
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