<?php
include('../db/connect.php');
?>
<?php
   if(isset($_POST['thembaiviet'])){
       $tenbaiviet=$_POST['tenbaiviet'];
       $hinhanh=$_FILES['hinhanh']['name'];
       $danhmuc=$_POST['danhmuc'];
       $mota=$_POST['mota'];
       $chitiet=$_POST['chitiet'];
        $path='../uploads/';
       $sql_insert_product=mysqli_query($mysqli,"insert into baiviet(tenbaiviet,tomtat,noidung,danhmuctin_id,baiviet_image) value('$tenbaiviet','$mota','$chitiet','$danhmuc','$hinhanh')");
        //move_uploaded_file($hinhanh_tmp,$path.$hinhanh);

   }elseif(isset($_POST['capnhatbaiviet'])){
        $id_update=$_POST['id_update'];
        $tenbaiviet=$_POST['tenbaiviet'];
        $hinhanh=$_FILES['hinhanh']['name'];
        $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        
        $danhmuc=$_POST['danhmuc'];
        $mota=$_POST['mota'];
        $chitiet=$_POST['chitiet'];
        $path='../uploads/';
        if($hinhanh==''){
            $sql_update_image="update baiviet set tenbaiviet='$tenbaiviet',noidung='$chitiet',tomtat='$mota',danhmuctin_id='$danhmuc' where baiviet_id='$id_update'";
        }else{
            move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
            $sql_update_image="update baiviet set tenbaiviet='$tenbaiviet',baiviet_image='$hinhanh',noidung='$chitiet',tomtat='$mota',danhmuctin_id='$danhmuc' where baiviet_id='$id_update'";
        }
        mysqli_query($mysqli,$sql_update_image);
   }
   if(isset($_GET['xoa'])){
       $id=$_GET['xoa'];
       $sql_xoa=mysqli_query($mysqli,"delete from baiviet where baiviet_id='$id'");
       
   }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Admin</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="xulydonhang.php">????n h??ng <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="xulydanhmuc.php">Danh m???c menu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="xulydanhmucbaiviet.php">Danh m???c b??i vi???t</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="xulybaiviet.php" style="color:red">B??i vi???t</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="xulysanpham.php">S???n ph???m</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="xulykhachhang.php">Kh??ch h??ng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="xulylienhe.php">Li??n h???</a>
        </li>
        </ul>
    </div>
    </nav><br> <br>
    <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['quanly'])=='capnhat'){
                $id_capnhat=$_GET['capnhat_id'];
                $sql_capnhat=mysqli_query($mysqli,"select * from baiviet where baiviet_id='$id_capnhat'");
                $row_capnhat=mysqli_fetch_array($sql_capnhat);
                $id_category_1=$row_capnhat['danhmuctin_id'];
                ?>
                <div class="col-md-4">
                <h4>C???p nh???t b??i vi???t</h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label>T??n b??i vi???t</label>
                    <input type="text" class="form-control" name="tenbaiviet" value="<?php echo $row_capnhat['tenbaiviet'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['baiviet_id'] ?>"><br>
                    <label>H??nh ???nh</label>
                    <input type="file" class="form-control" name="hinhanh"><br>
                    <img src="../uploads/<?php echo $row_capnhat['baiviet_image'] ?>" height="100" width="80" ><br>
                    
                    <label>T??m t???t</label>
                    <textarea class="form-control" rows="10" name="mota"><?php echo $row_capnhat['tomtat'] ?></textarea><br>
                    <label>N???i dung</label>
                    <textarea class="form-control" rows="10" name="chitiet"><?php echo $row_capnhat['noidung'] ?></textarea><br>
                    <label>Danh m???c</label>
                    <?php
                    $sql_danhmuc=mysqli_query($mysqli,"select * from danhmuc_tin order by danhmuctin_id desc")
                    ?>
                    <select name="danhmuc" class="form-control">
                        <option value="0">-----Ch???n danh m???c-----</option>
                        <?php
                        while($row_danhmuc=mysqli_fetch_array($sql_danhmuc)){
                            if($id_category_1==$row_danhmuc['dm_id']){
                        ?>
                        <option selected value="<?php echo $row_danhmuc['danhmuctin_id'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                        <?php
                            }else{
                        ?>
                        <option value="<?php echo $row_danhmuc['danhmuctin_id'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select><br>
                    <input type="submit" name="capnhatbaiviet" value="C???p nh???t b??i vi???t" class="btn btn-default">
                </form>
            </div>
            <?php
            }else{
                ?>
                <div class="col-md-4">
                <h4>Th??m b??i vi???t</h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label>T??n b??i vi???t</label>
                    <input type="text" class="form-control" name="tenbaiviet" placeholder="T??n b??i vi???t"><br>
                    <label>H??nh ???nh</label>
                    <input type="file" class="form-control" name="hinhanh"><br>
                    <label>M?? t???</label>
                    <textarea class="form-control" name="mota"></textarea><br>
                    <label>Chi ti???t</label>
                    <textarea class="form-control" name="chitiet"></textarea><br>
                    <label>Danh m???c</label>
                    <?php
                    $sql_danhmuc=mysqli_query($mysqli,"select * from danhmuc_tin order by danhmuctin_id desc")
                    ?>
                    <select name="danhmuc" class="form-control">
                        <option value="0">-----Ch???n danh m???c-----</option>
                        <?php
                        while($row_danhmuc=mysqli_fetch_array($sql_danhmuc)){
                        ?>
                        <option value="<?php echo $row_danhmuc['danhmuctin_id'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                        <?php
                        }
                        ?>
                    </select><br>
                    <input type="submit" name="thembaiviet" value="Th??m b??i vi???t" class="btn btn-default">
                </form>
            </div>
            <?php
            }
            ?>
            
            <div class="col-md-8">
            <h4>Li???t k?? b??i vi???t</h4>
            <?php
            $sql_select_bv=mysqli_query($mysqli,"select * from baiviet,danhmuc_tin where baiviet.danhmuctin_id=danhmuc_tin.danhmuctin_id order by baiviet.baiviet_id desc")
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>Th??? t???</th>
                    <th>T??n s???n ph???m</th>
                    <th>H??nh ???nh</th>
                    <th>Danh m???c</th>
                    <th>Qu???n l??</th>
                </tr>
                <?php
                $i=0;
                while($row_bv=mysqli_fetch_array($sql_select_bv)){
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row_bv['tenbaiviet'] ?></td> 
                    <td><img src="../uploads/<?php echo $row_bv['baiviet_image'] ?>" height="100" width="80"></td>
                   
                    <td><?php echo $row_bv['tendanhmuc'] ?></td>
                   
                    <td><a href="?xoa=<?php echo $row_bv['baiviet_id'] ?>">X??a</a> | <a href="xulybaiviet.php?quanly=capnhat&capnhat_id=<?php echo $row_bv['baiviet_id'] ?>">S???a</a></td>
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