<?php
include('../db/connect.php');
?>
<?php
   if(isset($_POST['themsanpham'])){
       $tensanpham=$_POST['tensanpham'];
       $hinhanh=$_FILES['hinhanh']['name'];
       $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
       $soluong=$_POST['soluong'];
       $gia=$_POST['giasanpham'];
       $giakhuyenmai=$_POST['giakhuyenmai'];
       $danhmuc=$_POST['danhmuc'];
       $mota=$_POST['mota'];
       $chitiet=$_POST['chitiet'];
       $tinhtrang=$_POST['active'];
        $path='../uploads/';
       $sql_insert_product=mysqli_query($mysqli,"insert into sanpham(sp_name,sp_chitiet,sp_mota,sp_gia,sp_giakhuyenmai,sp_soluong,sp_image,dm_id,sp_active) value('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc','$tinhtrang')");
        move_uploaded_file($hinhanh_tmp,$path.$hinhanh);

   }elseif(isset($_POST['capnhatsanpham'])){
        $id_update=$_POST['id_update'];
        $tensanpham=$_POST['tensanpham'];
        $hinhanh=$_FILES['hinhanh']['name'];
        $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $soluong=$_POST['soluong'];
        $gia=$_POST['giasanpham'];
        $giakhuyenmai=$_POST['giakhuyenmai'];
        $danhmuc=$_POST['danhmuc'];
        $mota=$_POST['mota'];
        $chitiet=$_POST['chitiet'];
        $tinhtrang=$_POST['active'];
        $banchay=$_POST['banchay'];
        $path='../uploads/';
        if($hinhanh==''){
            $sql_update_image="update sanpham set sp_name='$tensanpham',sp_chitiet='$chitiet',sp_mota='$mota',sp_gia='$gia',sp_giakhuyenmai='$giakhuyenmai',sp_soluong='$soluong',dm_id='$danhmuc',sp_active='$tinhtrang',sp_hot='$banchay' where sp_id='$id_update'";
        }else{
            move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
            $sql_update_image="update sanpham set sp_name='$tensanpham',sp_chitiet='$chitiet',sp_mota='$mota',sp_gia='$gia',sp_giakhuyenmai='$giakhuyenmai',sp_soluong='$soluong',sp_image='$hinhanh',dm_id='$danhmuc',sp_active='$tinhtrang',sp_hot='$banchay' where sp_id='$id_update'";
        }
        mysqli_query($mysqli,$sql_update_image);
   }
   if(isset($_GET['xoa'])){
       $id=$_GET['xoa'];
       $sql_xoa=mysqli_query($mysqli,"delete from sanpham where sp_id='$id'");
       
   }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Sản phẩm</title>
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
            <a class="nav-link" href="xulysanpham.php" style="color:red">Sản phẩm</a>
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
                $id_capnhat=$_GET['capnhat_id'];
                $sql_capnhat=mysqli_query($mysqli,"select * from sanpham where sp_id='$id_capnhat'");
                $row_capnhat=mysqli_fetch_array($sql_capnhat);
                $id_category_1=$row_capnhat['dm_id'];
                ?>
                <div class="col-md-3">
                <h4>Cập nhật sản phẩm</h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="tensanpham" value="<?php echo $row_capnhat['sp_name'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['sp_id'] ?>"><br>
                    <label>Hình ảnh</label>
                    <input type="file" class="form-control" name="hinhanh"><br>
                    <img src="../uploads/<?php echo $row_capnhat['sp_image'] ?>" height="100" width="80" ><br>
                    <label>Giá</label>
                    <input type="text" class="form-control" name="giasanpham" value="<?php echo $row_capnhat['sp_gia'] ?>"><br>
                    <label>Giá khuyến mãi</label>
                    <input type="text" class="form-control" name="giakhuyenmai" value="<?php echo $row_capnhat['sp_giakhuyenmai'] ?>"><br>
                    <label>Số lượng</label>
                    <input type="text" class="form-control" name="soluong" value="<?php echo $row_capnhat['sp_soluong'] ?>"><br>
                    <label>Mô tả</label>
                    <textarea class="form-control" rows="10" name="mota"><?php echo $row_capnhat['sp_mota'] ?></textarea><br>
                    <label>Chi tiết</label>
                    <textarea class="form-control" rows="10" name="chitiet"><?php echo $row_capnhat['sp_chitiet'] ?></textarea><br>
                    <label>Hiển thị sản phẩm</label>
                    <input type="text" class="form-control" name="active" value="<?php echo $row_capnhat['sp_active'] ?>"><br>
                    <label>Sản phẩm bán chạy</label>
                    <input type="text" class="form-control" name="banchay" value="<?php echo $row_capnhat['sp_hot'] ?>"><br>
                    <label>Danh mục</label>
                    <?php
                    $sql_danhmuc=mysqli_query($mysqli,"select * from danhmuc order by dm_id desc")
                    ?>
                    <select name="danhmuc" class="form-control">
                        <option value="0">-----Chọn danh mục-----</option>
                        <?php
                        while($row_danhmuc=mysqli_fetch_array($sql_danhmuc)){
                            if($id_category_1==$row_danhmuc['dm_id']){
                        ?>
                        <option selected value="<?php echo $row_danhmuc['dm_id'] ?>"><?php echo $row_danhmuc['dm_name'] ?></option>
                        <?php
                            }else{
                        ?>
                        <option value="<?php echo $row_danhmuc['dm_id'] ?>"><?php echo $row_danhmuc['dm_name'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select><br>
                    <input type="submit" name="capnhatsanpham" value="Cập nhật sản phẩm" class="btn btn-default">
                </form>
            </div>
            <?php
            }else{
                ?>
                <div class="col-md-3">
                <h4>Thêm sản phẩm</h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="tensanpham" placeholder="Tên sản phẩm"><br>
                    <label>Hình ảnh</label>
                    <input type="file" class="form-control" name="hinhanh"><br>
                    <label>Giá</label>
                    <input type="text" class="form-control" name="giasanpham" placeholder="Giá sản phẩm"><br>
                    <label>Giá khuyến mãi</label>
                    <input type="text" class="form-control" name="giakhuyenmai" placeholder="Giá khuyến mãi"><br>
                    <label>Số lượng</label>
                    <input type="text" class="form-control" name="soluong" placeholder="Số lượng"><br>
                    <label>Mô tả</label>
                    <textarea class="form-control" name="mota"></textarea><br>
                    <label>Chi tiết</label>
                    <textarea class="form-control" name="chitiet"></textarea><br>
                    <label>Hiển thị sản phẩm</label>
                    <input type="text" class="form-control" name="active" placeholder="Hiện(1)/Ẩn(0)"><br>
                   
                    <label>Danh mục</label>
                    <?php
                    $sql_danhmuc=mysqli_query($mysqli,"select * from danhmuc order by dm_id desc")
                    ?>
                    <select name="danhmuc" class="form-control">
                        <option value="0">-----Chọn danh mục-----</option>
                        <?php
                        while($row_danhmuc=mysqli_fetch_array($sql_danhmuc)){
                        ?>
                        <option value="<?php echo $row_danhmuc['dm_id'] ?>"><?php echo $row_danhmuc['dm_name'] ?></option>
                        <?php
                        }
                        ?>
                    </select><br>
                    <input type="submit" name="themsanpham" value="Thêm sản phẩm" class="btn btn-default">
                </form>
            </div>
            <?php
            }
            ?>
            
            <div class="col-md-9">
            <h4>Liệt kê sản phẩm</h4>
            <?php
            $sql_select_sp=mysqli_query($mysqli,"select * from sanpham,danhmuc where sanpham.dm_id=danhmuc.dm_id order by sanpham.sp_id desc")
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Thứ tự</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Danh mục</th>
                    <th>Giá sản phẩm</th>
                    <th>Giá khuyến mãi</th>
                    <th>Hiển thị sản phẩm</th>
                    <th>Quản lý</th>
                </tr>
                <?php
                $i=0;
                while($row_sp=mysqli_fetch_array($sql_select_sp)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_sp['sp_name'] ?></td> 
                    <td><img src="../uploads/<?php echo $row_sp['sp_image'] ?>" height="100" width="80"></td>
                    <td><?php echo $row_sp['sp_soluong'] ?></td>
                    <td><?php echo $row_sp['dm_name'] ?></td>
                    <td><?php echo number_format($row_sp['sp_gia']).'vnđ' ?></td>
                    <td><?php echo number_format($row_sp['sp_giakhuyenmai']).'vnđ' ?></td>
                    <td><?php echo $row_sp['sp_active'] ?></td>
                    <td><a href="?xoa=<?php echo $row_sp['sp_id'] ?>">Xóa</a> | <a href="xulysanpham.php?quanly=capnhat&capnhat_id=<?php echo $row_sp['sp_id'] ?>">Sửa</a></td>
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