<?php
include('../db/connect.php');
?>
<?php
    if(isset($_POST['thanhtoanhd'])){
        $maodo=$_POST['maodo'];
        $mahang=$_POST['mahang_xuly'];
        $madatcho=$_POST['madat_xuly'];
        $sql_update_donhang=mysqli_query($mysqli,"update hoadon set trangthaihd=1 where mahd='$mahang'");
        $sql_update_datcho=mysqli_query($mysqli,"update datcho set trangthaidat=4 where madatcho='$madatcho'");
        $sql_update_odo=mysqli_query($mysqli,"update odo set trangthai=1 where maodo='$maodo'");
        header('location:xulyhoadon.php');
    }
    if(isset($_POST['capnhathd'])){
        $tgr=$_POST['tgr'];
        $mahang=$_POST['mahang_xuly'];
        $tgrdk=$_POST['tgrdk'];
        $dg=$_POST['giatien'];
        $tienphat=0;
        $tiendukien=$_POST['tiendukien'];
        $tong = strtotime($tgrdk)-strtotime($tgr);
        if($tong<0){
            $sluotqh = ceil(abs($tong)/3600);
            $tienphat = $dg*$sluotqh;
        }
        $tt=$tiendukien+$tienphat;
        $sql_update_donhang=mysqli_query($mysqli,"update hoadon set thoigianra='$tgr', tongtien='$tt', tienphat='$tienphat' where mahd='$mahang'");
   
    }
?>
<?php
    if(isset($_GET['xoadonhang'])){
        $mahang=$_GET['xoadonhang'];
        $maodo=$_GET['maodo'];
        
        $sql_odo_trong=mysqli_query($mysqli,"update odo set trangthai=1 where maodo='$maodo'");
        $sql_delete=mysqli_query($mysqli,"delete from hoadon where mahd='$mahang'");
        header('location:xulyhoadon.php');
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
            <a class="nav-link" href="xulydatcho.php" >Đặt chỗ</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="xulyhoadon.php" style="color:red">Hóa đơn</a>
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
                $sql_chitiet=mysqli_query($mysqli,"select * from hoadon,khachhang,datcho,odo,loaiodo where hoadon.madatcho=datcho.madatcho and khachhang.makh=datcho.makh and odo.maodo=datcho.maodo and odo.maloaio=loaiodo.maloaio and hoadon.mahd=$mahang");
                ?>
                <div class="col-md-7" style="max-width: none;">
                <p>Xem chi tiết hóa đơn</p>
                <form action="" method="POST" style="width: 1100px;">
                <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Ngày lập HĐ</th>
                    <th>Tên khách hàng</th>
                    <th>Biển số xe</th>
                    <th>Tên ô đỗ</th>
                    <th>Thời gian vào </th>
                    <th>Thời gian ra dự kiến</th>
                    <th>Thời gian ra </th>
                    <th>Thành tiền</th>
                    <th>Tiền phạt</th>
                    <th>Tổng tiền</th>
                    <!-- <th>Quản lý</th> -->
                </tr>
                <?php
                $row_donhang=mysqli_fetch_array($sql_chitiet)
                    
                ?>
                <tr>
                   
                    <td><?php echo $row_donhang['ngaylaphd'] ?></td>
                    <td><?php echo $row_donhang['tenkh'] ?></td>
                    <td><?php echo $row_donhang['biensoxe'] ?></td>
                    <td><?php echo $row_donhang['tenodo'] ?></td>
                    <td><?php echo $row_donhang['thoigianvao'] ?></td>
                    <td><?php echo $row_donhang['thoigianradukien']?></td>
                    <td><?php 
                    if($row_donhang['thoigianra']=="" ){
                        echo '<input type="time" name="tgr" value="">';
                    }else{
                        echo $row_donhang['thoigianra'] ;
                    }
                    ?></td>
                    <td><?php echo number_format($row_donhang['tiendukien']).'vnđ' ?></td>
                    <td><?php echo number_format($row_donhang['tienphat']).'vnđ' ?></td>
                    <td><?php echo number_format($row_donhang['tongtien']).'vnđ' ?></td>
                    <input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['mahd'] ?>">
                    <input type="hidden" name="madat_xuly" value="<?php echo $row_donhang['madatcho'] ?>">
                    <input type="hidden" name="tiendukien" value="<?php echo $row_donhang['tiendukien'] ?>">
                    <input type="hidden" name="tgrdk" value="<?php echo $row_donhang['thoigianradukien'] ?>">
                    <input type="hidden" name="giatien" value="<?php echo $row_donhang['dongia'] ?>">
                    <input type="hidden" name="maodo" value="<?php echo $row_donhang['maodo'] ?>">

                </tr>
                <?php
                $tgtem=$row_donhang['thoigianra'];
                $tem=$row_donhang['trangthaihd'];
                
                ?>
            </table>
            <?php 
            if($tem!=1){
                if($tgtem==""){
                    echo '<input type="submit" value="Cập nhật hóa đơn" name="capnhathd" class="btn btn-success">';
                }else{
                    echo '<input type="submit" value="Thanh toán hóa đơn" name="thanhtoanhd" class="btn btn-success">';
                }
            }else{
                echo '<h5>Đã thanh toán</h5><br>';
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
            
            <div class="col-md-10" style="max-width: 100%;flex: none;">
            <h4>Danh sách hóa đơn</h4>
            <?php
            $sql_select=mysqli_query($mysqli,"select * from hoadon,khachhang,datcho,odo,loaiodo where hoadon.madatcho=datcho.madatcho and khachhang.makh=datcho.makh and odo.maodo=datcho.maodo and odo.maloaio=loaiodo.maloaio order by hoadon.mahd desc");
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>STT</th>
                    <th>Mã hóa đơn</th>
                    <th>Mã đặt chỗ</th>
                    <th>Tên ô đỗ</th>
                    <th>Trạng thái</th>
                    <th>Tên khách hàng</th>
                    <th>Ngày lập HĐ</th>
                    <th>Tổng tiền</th>
                    <th>Thao tác</th>
                    
                </tr>
                <?php
                $i=0;
                while($row_donhang=mysqli_fetch_array($sql_select)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row_donhang['mahd'] ?></td>
                    <td><?php echo $row_donhang['madatcho'] ?></td>
                    <td><?php echo $row_donhang['tenodo'] ?></td>
                    <td><?php 
                        if($row_donhang['trangthaihd']==0){
                            echo '<span style="color:red">Chưa thanh toán</span>';
                        }elseif($row_donhang['trangthaihd']==1){
                            echo '<span style="font-weight: bold;">Đã thanh toán</span>';
                        }
                     ?></td>
                    <td><?php echo $row_donhang['tenkh'] ?></td>
                    <td><?php echo $row_donhang['ngaylaphd'] ?></td>
                    <td><?php echo $row_donhang['tongtien'] ?></td>
                    <td><a href="?xoadonhang=<?php echo $row_donhang['mahd'].'&maodo='.$row_donhang['maodo']?>">Xóa</a>
                    | <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahd'] ?>">Xem chi tiết</a>
                     
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