<?php
include('../db/connect.php');
?>
<?php
    if(isset($_POST['capnhatdonhang'])){
        $xuly=$_POST['xuly'];
        $mahang=$_POST['mahang_xuly'];
        $tongtien=$_POST['thanhtien'];
        $sql_update_donhang=mysqli_query($mysqli,"update datcho set trangthaidat='$xuly' where madatcho='$mahang'");
        if($xuly==1){
            $ngaylap=date("Y-m-d");
            $sql_insert_hd=mysqli_query($mysqli,"insert into hoadon(madatcho, ngaylaphd, tongtien) value('$mahang', '$ngaylap', '$tongtien')");
        }
        header('location:xulydatcho.php');
    }
?>
<?php
    if(isset($_GET['xoadonhang'])){
        $mahang=$_GET['xoadonhang'];
        $maodo=$_GET['maodo'];
        
        $sql_odo_trong=mysqli_query($mysqli,"update odo set trangthai=1 where maodo='$maodo'");
        $sql_delete=mysqli_query($mysqli,"delete from datcho where madatcho='$mahang'");
        header('location:xulydatcho.php');
    }
    if(isset($_GET['xacnhanhuy'])&&isset($_GET['mahang'])){
        $huydon=$_GET['xacnhanhuy'];
        $magiaodich=$_GET['mahang'];
        $maodo=$_GET['maodo'];
        $sql_odo_trong=mysqli_query($mysqli,"update odo set trangthai=1 where maodo='$maodo'");
        $sql_update_donhang=mysqli_query($mysqli,"update datcho set trangthaidat='$huydon' where madatcho='$magiaodich'");
        header('location:xulydatcho.php'); 
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Đặt chỗ</title>
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
            <a class="nav-link" href="xulydatcho.php" style="color:red">Đặt chỗ</a>
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
            <a class="nav-link disabled" href="xulykhachhang.php">Khách hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="thongke.php">Thống kê</a>
        </li>
        </ul>
    </div>
    </nav><br> <br>
    <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['quanly'])=='xemdonhang'){
                $mahang=$_GET['mahang'];
                $sql_chitiet=mysqli_query($mysqli,"select * from khachhang,datcho,odo,loaiodo where khachhang.makh=datcho.makh and odo.maodo=datcho.maodo and odo.maloaio=loaiodo.maloaio and datcho.madatcho=$mahang");
                ?>
                <div class="col-md-7" style="max-width: none;">
                <p>Xem chi tiết đặt chỗ</p>
                <form action="" method="POST" style="width: 1100px;">
                <table class="table table-responsive table-bordered ">
                <tr>
                    <th>STT</th>
                    <th>Tên khách hàng</th>
                    <th>Biển số xe</th>
                    <th>Tên ô đỗ</th>
                    <th>Loại ô đỗ</th>
                    <th>Đơn giá</th>
                    <th>Ngày đăng ký</th>
                    <th>Số lượt đỗ</th>
                    <th>Thời gian vào dự kiến</th>
                    <th>Thời gian ra dự kiến</th>
                    <th>Thành tiền</th>
                    <!-- <th>Quản lý</th> -->
                </tr>
                <?php
                $i=0;
                while($row_donhang=mysqli_fetch_array($sql_chitiet))
                {
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_donhang['tenkh'] ?></td>
                    <td><?php echo $row_donhang['biensoxe'] ?></td>
                    <td><?php echo $row_donhang['tenodo'] ?></td>
                    <td><?php echo $row_donhang['tenloaio'] ?></td>
                    <td><?php echo number_format($row_donhang['dongia']).'vnđ' ?></td>
                    <td><?php echo $row_donhang['ngaydangky'] ?></td>
                    <td><?php echo $row_donhang['soluot'] ?></td>
                    <td><?php echo $row_donhang['thoigianvao'] ?></td>
                    <td><?php
                    $timestamp = strtotime($row_donhang['thoigianvao']);
                    $timestamp_one_hour_later = $timestamp + 3600*$row_donhang['soluot'];
                    echo strftime('%H:%M:%S', $timestamp_one_hour_later);
                    ?></td>
                    <td><?php echo number_format($row_donhang['tiendukien']).'vnđ' ?></td>
                    <input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['madatcho'] ?>">
                    <input type="hidden" name="thanhtien" value="<?php echo $row_donhang['tiendukien'] ?>">
                </tr>
                <?php
                $tem=$row_donhang['trangthaidat'];

                }
                ?>
            </table>
            <?php 
            if($tem==0 || $tem==2){
                echo '<select name="xuly" class="form-control">
                    <option value="1">Xác nhận</option>                
                    <option value="0">Chưa xử lý</option>
                    </select><br>
                    <input type="submit" value="Cập nhật đặt chỗ" name="capnhatdonhang" class="btn btn-success">';
            }elseif($tem==1){
                echo '<select name="xuly" class="form-control" disabled>
                    <option value="1">Đã xác nhận</option>                
                    </select><br>';
            }
            elseif($tem==3){
                echo '<select name="xuly" class="form-control" disabled>
                    <option value="1">Đã Hũy</option>                
                    </select><br>';
            }
            elseif($tem==4){
                echo '<select name="xuly" class="form-control" disabled>
                    <option value="1">Đã thanh toán</option>                
                    </select><br>';
            }
            ?>
            
            </form>
            </div>
            <?php
            }else{
            ?>
            <?php
            }
            ?>
            
            <div class="col-md-10">
            <h4>Liệt kê danh sách đặt chỗ</h4>
            <?php
            $sql_select=mysqli_query($mysqli,"select * from khachhang,datcho,odo,loaiodo where khachhang.makh=datcho.makh and odo.maodo=datcho.maodo and odo.maloaio=loaiodo.maloaio order by datcho.madatcho desc");
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Mã đặt chỗ</th>
                    <th>Trạng thái</th>
                    <th>Tên khách hàng</th>
                    <th>Ngày đặt</th>
                    <th>Thao tác</th>
                    
                </tr>
                <?php
                $i=0;
                while($row_donhang=mysqli_fetch_array($sql_select)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_donhang['madatcho'] ?></td>
                    <td><?php 
                        if($row_donhang['trangthaidat']==0){
                            echo '<span style="color:red">Chưa xử lý </span>';
                        }elseif($row_donhang['trangthaidat']==1){
                            echo '<span >Đã xác nhận<span>';
                        }elseif($row_donhang['trangthaidat']==2){
                            echo '<span style="color:red">Yêu cầu hủy</span>';
                        }elseif($row_donhang['trangthaidat']==3){
                        ?>
                            <p style="margin: 0; letter-spacing: 1px; font-size: 15px; line-height: 1.9; color: #999; font-family: 'Open Sans', sans-serif;">Đã hủy</p>
                        <?php 
                        }else{
                            echo '<span style="font-weight: bold;">Đã thanh toán</span>';
                        }
                     ?></td>
                    <td><?php echo $row_donhang['tenkh'] ?></td>
                    <td><?php echo $row_donhang['ngaydangky'] ?></td>
                    
                    <td><a href="?xoadonhang=<?php echo $row_donhang['madatcho'].'&maodo='.$row_donhang['maodo']?>">Xóa</a>
                    | <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['madatcho'] ?>">Xem chi tiết</a>
                     <?php 
                            if($row_donhang['trangthaidat']==0){ echo '| <a href="xulydatcho.php?&mahang='.$row_donhang["madatcho"].'&xacnhanhuy=3.&maodo='.$row_donhang['maodo'].'">Hủy đặt chỗ</a>';
                            }elseif($row_donhang['trangthaidat']==1){ echo '| <a href="xulydatcho.php?&mahang='.$row_donhang["madatcho"].'&xacnhanhuy=3.&maodo='.$row_donhang['maodo'].'">Hủy đặt chỗ</a>';
                            }elseif($row_donhang['trangthaidat']==2){ echo '| <a href="xulydatcho.php?&mahang='.$row_donhang["madatcho"].'&xacnhanhuy=3.&maodo='.$row_donhang['maodo'].'">Hủy đặt chỗ</a>';
                            }
                        ?>
                    </td>
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