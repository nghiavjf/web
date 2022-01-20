<?php
include('../db/connect.php');
?>
<?php
if(isset($_POST['lienhexuly'])){
    $id_capnhatlh=$_POST['id_lienhe'];
    $mess=$_POST['phanhoi'];
    $sql_updatelh=mysqli_query($mysqli,"update lienhe set ad_phanhoi='$mess' where lienhe_id='$id_capnhatlh' ");
    header('location: xulylienhe.php');
   }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Khách hàng</title>
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
            <a class="nav-link disabled" href="xulykhachhang.php">Khách hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="xulylienhe.php" style="color:red">Liên hệ</a>
        </li>
        </ul>
    </div>
    </nav><br> <br>
    <div class="container">
        <div class="row">
        <?php
            if(isset($_GET['quanly'])=='xuly'){
                $id_lienhe=$_GET['id'];
                $sql_lienhe=mysqli_query($mysqli,"select * from lienhe where lienhe_id='$id_lienhe'");
                $row_lienhe=mysqli_fetch_array($sql_lienhe);
                ?>
                <div class="col-md-4">
                
                <label>Trả lời message</label>
                <form action="" method="POST">
                    <input type="text" class="form-control" name="phanhoi" value="<?php echo $row_lienhe['ad_phanhoi'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_lienhe" value="<?php echo $row_lienhe['lienhe_id'] ?>">
                    <input type="submit" name="lienhexuly" value="Gửi phản hồi" class="btn btn-default">
                </form>
                </div>
            <?php
            }?>
            <div class="col-md-8">
            <h4>Liên hệ</h4>
            <?php
            $sql_select_lienhe=mysqli_query($mysqli,"select * from lienhe order by lienhe_id desc");
            ?>
                <table class="table table-responsive table-bordered ">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Tên người gửi</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Trả lời message</th> 
                        <th>Phản hồi</th>
                    </tr>
                    <?php
                    $i=0;
                    while($row_lienhe=mysqli_fetch_array($sql_select_lienhe)){
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row_lienhe['lienhe_name'] ?></td>
                        <td><?php echo $row_lienhe['lienhe_email'] ?></td>
                        <td><?php echo $row_lienhe['message'] ?></td>
                        <td><?php echo $row_lienhe['ad_phanhoi'] ?></td>
                        <td><a href="?quanly=xuly&id=<?php echo $row_lienhe['lienhe_id'] ?>">Xử lý</a></td>
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