<?php
include('../db/connect.php');
?>
<?php
   if(isset($_POST['themdanhmuc'])){
       $tendanhmuc=$_POST['danhmuc'];
       $dongia=$_POST['dongia'];
       $sql_insert=mysqli_query($mysqli,"insert into loaiodo(tenloaio, dongia) value('$tendanhmuc', $dongia)");
   }elseif(isset($_POST['capnhatdanhmuc'])){
    $id_post_capnhat=$_POST['id_danhmuc'];
    $tendanhmuc=$_POST['danhmuc'];
    $dongia=$_POST['dongia'];
    $sql_update=mysqli_query($mysqli,"update loaiodo set tenloaio='$tendanhmuc', dongia=$dongia where maloaio='$id_post_capnhat' ");
    header('location: xulydanhmuc.php');
   }
   if(isset($_GET['xoa'])){
       $id=$_GET['xoa'];
       $sql_xoa=mysqli_query($mysqli,"delete from loaiodo where maloaio='$id'");
   }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Loại ô đỗ</title>
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
            <a class="nav-link" href="xulydanhmuc.php" style="color:red">Loại ô đỗ</a>
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
    </nav><br> <br>
    <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['quanly'])=='capnhat'){
                $id_capnhat=$_GET['id'];
                $sql_capnhat=mysqli_query($mysqli,"select * from loaiodo where maloaio='$id_capnhat'");
                $row_capnhat=mysqli_fetch_array($sql_capnhat);
                ?>
                <div class="col-md-4">
                <h4>Cập nhật loại ô đỗ</h4>
                <label>Tên loại ô đỗ</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="danhmuc" value="<?php echo $row_capnhat['tenloaio'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_danhmuc" value="<?php echo $row_capnhat['maloaio'] ?>">
                    <label>Đơn giá</label>
                    <input type="text" class="form-control" name="dongia" value="<?php echo $row_capnhat['dongia'] ?>"><br>
                    <input type="submit" name="capnhatdanhmuc" value="Cập nhật" class="btn btn-default">
                </form>
                </div>
            <?php
            }else{
                ?>
                <div class="col-md-4">
                <h4>Thêm loại ô đỗ</h4>
                <label>Tên loại ô đỗ</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="danhmuc" placeholder="Tên loại ô"><br>
                    <label>Đơn giá</label>
                    <input type="text" class="form-control" name="dongia" placeholder="Đơn giá"><br>
                    <input type="submit" name="themdanhmuc" value="Thêm loại ô đỗ" class="btn btn-default">
                </form>
            </div>
            <?php
            }
            ?>
            
            <div class="col-md-8">
            <h4>Liệt kê loại ô đỗ</h4>
            <?php
            $sql_select=mysqli_query($mysqli,"select * from loaiodo order by maloaio")
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Tên loại ô đỗ</th>
                    <th>Đơn giá</th>
                    <th>Quản lý</th>
                </tr>
                <?php
                $i=0;
                while($row_danhmuc=mysqli_fetch_array($sql_select)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_danhmuc['tenloaio'] ?></td>  
                    <td><?php echo number_format($row_danhmuc['dongia']).' vnđ'?></td>  
                    <td><a href="?xoa=<?php echo $row_danhmuc['maloaio'] ?>">Xóa</a> | <a href="?quanly=capnhat&id=<?php echo $row_danhmuc['maloaio'] ?>">Sửa</a></td>
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