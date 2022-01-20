<?php
include('../db/connect.php');
?>
<?php
   if(isset($_POST['themsanpham'])){
       $tensanpham=$_POST['tensanpham'];
       $tang=$_POST['tang'];
       $danhmuc=$_POST['danhmuc'];
       $trangthai=$_POST['trangthai'];
       $sql_insert_product=mysqli_query($mysqli,"insert into odo(tenodo,trangthai,tang,maloaio) value('$tensanpham','$trangthai','$tang','$danhmuc')");
   }elseif(isset($_POST['capnhatsanpham'])){
        $id_update=$_POST['id_update'];
        $tensanpham=$_POST['tensanpham'];
        $tang=$_POST['tang'];
        $danhmuc=$_POST['danhmuc'];
        $tinhtrang=$_POST['active'];
        $sql_update="update odo set tenodo='$tensanpham',tang='$tang',maloaio='$danhmuc',trangthai='$tinhtrang' where maodo='$id_update'";
        mysqli_query($mysqli,$sql_update);
        echo '<script>alert("Cập nhập thành công")</script>';
   }
   if(isset($_GET['xoa'])){
       $id=$_GET['xoa'];
       $sql_xoa=mysqli_query($mysqli,"delete from odo where maodo='$id'");
       
   }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Ô đỗ</title>
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
            <a class="nav-link" href="xulysanpham.php" style="color:red">Ô đỗ</a>
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
            if(isset($_GET['quanly'])=='capnhat'){
                $id_capnhat=$_GET['capnhat_id'];
                $sql_capnhat=mysqli_query($mysqli,"select * from odo where maodo='$id_capnhat'");
                $row_capnhat=mysqli_fetch_array($sql_capnhat);
                $id_category_1=$row_capnhat['maloaio'];
                ?>
                <div class="col-md-3">
                <h4>Cập nhật ô đỗ</h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label>Tên ô đỗ</label>
                    <input type="text" class="form-control" name="tensanpham" value="<?php echo $row_capnhat['tenodo'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['maodo'] ?>"><br>
                    <label>Tầng</label>
                    <input type="text" class="form-control" name="tang" value="<?php echo $row_capnhat['tang'] ?>"><br>
                    <label>Trạng thái</label>
                    <input type="text" class="form-control" name="active" value="<?php echo $row_capnhat['trangthai'] ?>"><br>
                    <label>Loại ô đỗ</label>
                    <?php
                    $sql_danhmuc=mysqli_query($mysqli,"select * from loaiodo order by maloaio")
                    ?>
                    <select name="danhmuc" class="form-control">
                        <option value="0">-----Chọn loại ô đỗ-----</option>
                        <?php
                        while($row_danhmuc=mysqli_fetch_array($sql_danhmuc)){
                            if($id_category_1==$row_danhmuc['maloaio']){
                        ?>
                        <option selected value="<?php echo $row_danhmuc['maloaio'] ?>"><?php echo $row_danhmuc['tenloaio'] ?></option>
                        <?php
                            }else{
                        ?>
                        <option value="<?php echo $row_danhmuc['maloaio'] ?>"><?php echo $row_danhmuc['tenloaio'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select><br>
                    <input type="submit" name="capnhatsanpham" value="Cập nhật ô đỗ" class="btn btn-default">
                </form>
            </div>
            <?php
            }else{
                ?>
                <div class="col-md-3">
                <h4>Thêm ô đỗ</h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label>Tên ô đỗ</label>
                    <input type="text" class="form-control" name="tensanpham" placeholder="Tên ô đỗ"><br>
                    <label>Tầng</label>
                    <input type="text" class="form-control" name="tang" placeholder="Tầng"><br>
                    <label>Trạng thái</label>
                    <select name="trangthai" class="form-control">
                        <option value="-1">----Chọn trạng thái ô đỗ----</option>
                        <option value="0">Trống</option>
                        <option value="1">Đã đặt chỗ</option>
                    </select><br>
                    <label>Loai ô đỗ</label>
                    <?php
                    $sql_danhmuc=mysqli_query($mysqli,"select * from loaiodo order by maloaio")
                    ?>
                    <select name="danhmuc" class="form-control">
                        <option value="0">-----Chọn loại ô đỗ-----</option>
                        <?php
                        while($row_danhmuc=mysqli_fetch_array($sql_danhmuc)){
                        ?>
                        <option value="<?php echo $row_danhmuc['maloaio'] ?>"><?php echo $row_danhmuc['tenloaio'] ?></option>
                        <?php
                        }
                        ?>
                    </select><br>
                    <input type="submit" name="themsanpham" value="Thêm ô đỗ" class="btn btn-default">
                </form>
            </div>
            <?php
            }
            ?>
            
            <div class="col-md-9">

            <?php 
                $sql_loc=mysqli_query($mysqli,"select * from loaiodo  ");
                
            ?>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="" style="width: 30%; display: inline;">
                <span class="" style="margin-right: 5px;">Loại ô đỗ</span>
                <select name="danhmuc_odo" class="form-control" style="width: 30%; display: inline;">
                    <option value="0">------Chọn loại ô đỗ------</option>
                    <?php
                    while($id_locodo=mysqli_fetch_array($sql_loc)){
                    ?>
                    <option value="<?php echo $id_locodo['maloaio'] ?>"><?php echo $id_locodo['tenloaio'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="" style="width: 30%; display: inline;">
                <span class="" style="margin-right: 5px;">Trạng thái ô đỗ</span>
                <select name="trangthai_odo" class="form-control" style="width: 30%; display: inline;">
                    <option value="-1">----Chọn trạng thái ô đỗ----</option>
                    
                    <option value="0">Đã đặt chỗ</option>
                    
                    <option value="1">Trống</option>
                    
                    ?>
                </select>
            </div>
                <button class="btn my-2 my-sm-0" name="seach_button_odo" type="submit" style="vertical-align: baseline;float: right;">Lọc kết quả</button>	
			</form>
            <?php
                $sql_select_sp=mysqli_query($mysqli,"select * from odo,loaiodo where odo.maloaio = loaiodo.maloaio order by odo.maodo ")
            ?>

            <?php
                if(isset($_POST['seach_button_odo'])){
                    $loaio=$_POST['danhmuc_odo'];
                    $trangthai=$_POST['trangthai_odo'];
                    if($loaio==0 && $trangthai==-1){
                        $sql_select_sp=mysqli_query($mysqli,"select * from odo,loaiodo where odo.maloaio = loaiodo.maloaio order by odo.maodo ");
                    }elseif($loaio==0){
                        $sql_select_sp=mysqli_query($mysqli,"select * from odo,loaiodo where odo.trangthai='$trangthai' and odo.maloaio = loaiodo.maloaio order by odo.maodo ");
                    }elseif($trangthai==-1){
                        $sql_select_sp=mysqli_query($mysqli,"select * from odo,loaiodo where odo.maloaio ='$loaio' and odo.maloaio = loaiodo.maloaio order by odo.maodo ");
                    }else{
                        $sql_select_sp = mysqli_query($mysqli,"select * from odo,loaiodo where odo.maloaio='$loaio' and odo.trangthai='$trangthai' and odo.maloaio=loaiodo.maloaio order by odo.maodo");
                    }
                }
            ?> 

            <h4>Liệt kê ô đỗ</h4>
               
                <table class="table table-responsive table-bordered ">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Tên ô đỗ</th>
                        <th>Tên loại ô</th>
                        <th>Tầng</th>
                        <th>Đơn giá</th>
                        <th>Trạng thái</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                    $i=0;
                    while($row_sp=mysqli_fetch_array($sql_select_sp)){
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_sp['tenodo'] ?></td> 
                        <td><?php echo $row_sp['tenloaio'] ?></td>
                        <td><?php echo $row_sp['tang'] ?></td>
                        <td><?php echo number_format($row_sp['dongia']).' vnđ' ?></td>
                        <td>
                            <?php 
                                if($row_sp['trangthai']==1){
                                    echo "Trống";
                                }else{
                                    echo "Đã đặt chỗ";
                                }
                            ?>
                        </td>
                        <td><a href="?xoa=<?php echo $row_sp['maodo'] ?>">Xóa</a> | <a href="xulysanpham.php?quanly=capnhat&capnhat_id=<?php echo $row_sp['maodo'] ?>">Sửa</a></td>
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