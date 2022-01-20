<?php
include('../db/connect.php');
?>
<?php
    if(isset($_POST['capnhatdonhang'])){
        $xuly=$_POST['xuly'];
        $mahang=$_POST['mahang_xuly'];
        $sql_update_donhang=mysqli_query($mysqli,"update donhang set tinhtrang='$xuly' where mahang='$mahang'");
        $sql_update_giaodich=mysqli_query($mysqli,"update giaodich set tinhtrangdon='$xuly' where magiaodich='$mahang'");
    }
?>
<?php
   if(isset($_GET['xoadonhang'])){
       $mahang=$_GET['xoadonhang'];
       $sql_delete=mysqli_query($mysqli,"delete from donhang where mahang='$mahang'");
       header('location:xulydonhang.php');
   }
   if(isset($_GET['xacnhanhuy'])&&isset($_GET['mahang'])){
    $huydon=$_GET['xacnhanhuy'];
    $magiaodich=$_GET['mahang'];
}else{
    $huydon='';
    $magiaodich='';
}
$sql_update_donhang=mysqli_query($mysqli,"update donhang set huydon='$huydon' where mahang='$magiaodich'");
$sql_update_giaodich=mysqli_query($mysqli,"update giaodich set huydon='$huydon' where magiaodich='$magiaodich'");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Đơn hàng</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="xulydonhang.php" style="color:red">Đơn hàng <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="xulydanhmuc.php">Danh mục menu</a>
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
    </nav><br> <br>
    <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['quanly'])=='xemdonhang'){
                $mahang=$_GET['mahang'];
                $sql_chitiet=mysqli_query($mysqli,"select * from donhang,sanpham where donhang.sp_id=sanpham.sp_id and donhang.mahang='$mahang' ");
                
                
                ?>
                <div class="col-md-7">
                <p>Xem chi tiết đơn hàng</p>
                <form action="" method="POST">
                <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Mã hàng</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Tổng tiền</th>
                    <th>Ngày đặt</th>
                    <!-- <th>Quản lý</th> -->
                </tr>
                <?php
                $i=0;
                while($row_donhang=mysqli_fetch_array($sql_chitiet)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_donhang['mahang'] ?></td>
                    <td><?php echo $row_donhang['sp_name'] ?></td>
                    <td><?php echo $row_donhang['soluong'] ?></td>
                    <td><?php echo number_format($row_donhang['sp_giakhuyenmai']).'vnđ' ?></td>
                    <td><?php echo number_format($row_donhang['soluong'] * $row_donhang['sp_giakhuyenmai']).'vnđ' ?></td>
                    <td><?php echo $row_donhang['ngaythang'] ?></td>
                    <input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['mahang'] ?>">
                    <!-- <td><a href="?xoa=<?php echo $row_donhang['donhang_id'] ?>">Xóa</a> | <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem đơn hàng</a></td> -->
                </tr>
                <?php
                }
                ?>
            </table>
            
            <select name="xuly" class="form-control">
                <option value="1">Đã xử lý | Đang giao hàng</option>
                <option value="0">Chưa xử lý</option>
            </select><br>
            <input type="submit" value="Cập nhật đơn hàng" name="capnhatdonhang" class="btn btn-success">
            </form>
            </div>
            <?php
            }else{
                ?>
                
                
            <?php
            }
            ?>
            
            <div class="col-md-10">
            <h4>Liệt kê đơn hàng</h4>
            <?php
            $sql_select=mysqli_query($mysqli,"select * from sanpham,khachhang,donhang where donhang.sp_id=sanpham.sp_id and donhang.khachhang_id=khachhang.khachhang_id group by donhang.mahang order by donhang.donhang_id desc");
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Mã hàng</th>
                    <th>Tình trạng</th>
                    <th>Tên khách hàng</th>
                    <th>Ngày đặt</th>
                    <th>Ghi chú</th>
                    <th>Hủy đơn</th>
                    <th>Quản lý</th>
                </tr>
                <?php
                $i=0;
                while($row_donhang=mysqli_fetch_array($sql_select)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_donhang['mahang'] ?></td>
                    <td><?php 
                        if($row_donhang['tinhtrang']==0){
                            echo 'Chưa xử lý';
                        }else{
                            echo 'Đã xử lý';
                        }
                     ?></td>
                    <td><?php echo $row_donhang['name'] ?></td>
                    <td><?php echo $row_donhang['ngaythang'] ?></td>
                    <td><?php echo $row_donhang['note'] ?></td>
                    <td><?php if($row_donhang['huydon']==0){

                    }elseif($row_donhang['huydon']==1){ echo '<a href="xulydonhang.php?quanly=xemdonhang&mahang='.$row_donhang["mahang"].'&xacnhanhuy=2">Xác nhận hủy đơn</a>';
                    }else{
                        echo 'Đã hủy';
                    }
                     ?></td>
                    <td><a href="?xoadonhang=<?php echo $row_donhang['mahang'] ?>">Xóa</a> | <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem đơn hàng</a></td>
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