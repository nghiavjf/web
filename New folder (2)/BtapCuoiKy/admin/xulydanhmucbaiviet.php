<?php
include('../db/connect.php');
?>
<?php
   if(isset($_POST['themdanhmuc'])){
       $tendanhmuc=$_POST['danhmuc'];
       $sql_insert=mysqli_query($mysqli,"insert into danhmuc_tin(tendanhmuc) value('$tendanhmuc')");
   }elseif(isset($_POST['capnhatdanhmuc'])){
    $id_post_capnhat=$_POST['id_danhmuc'];
    $tendanhmuc=$_POST['danhmuc'];
    $sql_update=mysqli_query($mysqli,"update danhmuc_tin set tendanhmuc='$tendanhmuc' where danhmuctin_id='$id_post_capnhat' ");
    header('location: xulydanhmucbaiviet.php');
   }
   if(isset($_GET['xoa'])){
       $id=$_GET['xoa'];
       $sql_xoa=mysqli_query($mysqli,"delete from danhmuc_tin where danhmuctin_id='$id'");
   }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Danh mục</title>
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
            <a class="nav-link" href="xulydanhmucbaiviet.php" style="color:red">Danh mục bài viết</a>
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
    </nav><br> <br>
    <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['quanly'])=='capnhat'){
                $id_capnhat=$_GET['id'];
                $sql_capnhat=mysqli_query($mysqli,"select * from danhmuc_tin where danhmuctin_id='$id_capnhat'");
                $row_capnhat=mysqli_fetch_array($sql_capnhat);
                ?>
                <div class="col-md-4">
                <h4>Cập nhật danh mục</h4>
                <label>Tên danh mục</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="danhmuc" value="<?php echo $row_capnhat['tendanhmuc'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_danhmuc" value="<?php echo $row_capnhat['danhmuctin_id'] ?>">
                    <input type="submit" name="capnhatdanhmuc" value="Cập nhật danh mục" class="btn btn-default">
                </form>
                </div>
            <?php
            }else{
                ?>
                <div class="col-md-4">
                <h4>Thêm danh mục</h4>
                <label>Tên danh mục</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="danhmuc" placeholder="Tên danh mục"><br>
                    <input type="submit" name="themdanhmuc" value="Thêm danh mục" class="btn btn-default">
                </form>
            </div>
            <?php
            }
            ?>
            
            <div class="col-md-8">
            <h4>Liệt kê danh mục</h4>
            <?php
            $sql_select=mysqli_query($mysqli,"select * from danhmuc_tin order by danhmuctin_id desc")
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Tên danh mục</th>
                    <th>Quản lý</th>
                </tr>
                <?php
                $i=0;
                while($row_danhmuc=mysqli_fetch_array($sql_select)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_danhmuc['tendanhmuc'] ?></td>  
                    <td><a href="?xoa=<?php echo $row_danhmuc['danhmuctin_id'] ?>">Xóa</a> | <a href="?quanly=capnhat&id=<?php echo $row_danhmuc['danhmuctin_id'] ?>">Sửa</a></td>
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