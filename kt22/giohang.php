<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Shop Books</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


</head>

<body>
  <div class="container" style="background:#while">
    <h3 align="center" style="color:red;font-size: 30px">GIỎ HÀNG</h3>
    <a href="index.php" type="button" class="btn btn-primary">Thêm mới</a>
    <hr>

    <table class="table-striped" id="example" style="margin-top: 20px">
      <thead>
        <tr>
            <?php if(!isset($_SESSION['sanpham'])){
     echo 'Bạn chưa mua sản phẩm nào';
            }else{ ?>
    
     
        </tr>
      </thead>
      <tbody>
        <?php
        $count =0;
        $so = 0;
        
         foreach ($_SESSION['sanpham'] as $sanpham)
        { 
          $count = $count +   $sanpham['thanhtien'] ;
          $so = $so + 1;
          ?>
          <tr>
            <td colspan="2"><b><?= $sanpham['title'] ?></b></td>
          </tr>
          <tr>
            <td><b>Số Lượng : </b><?= $sanpham['soluong'] ?><?php echo " -"; ?></td>
            <td style="text-align: right;"><b>Giá : </b><?= $sanpham['price'] ?><?php echo ".000 VND";  ?></td>
          </tr>
           <tr>
              <td colspan="2" style="text-align: right;"><b>Tổng Tiền Món Hàng Này : </b><?= $sanpham['thanhtien'] ?><?php echo ".000 VND";  ?></td>

           </tr>
           <tr>
            <td colspan="2" style="text-align: right;">
              <a href="delete.php?id=<?= $sanpham['id'] ?>"  type="button" class="btn btn-warning">Xóa</a>
              <a href="update.php?id=<?= $sanpham['id'] ?>"  type="button" class="btn btn-warning">Thêm</a>
            </td>
           </tr>
           
        <?php }
        echo "<b>"."Tổng tiền : "."</b>".$count.".000 VND"."<br>";
        echo "<b>"."Số sản phẩm : "."</b>".$so."<br>";
            
        ?>
            <tr><td><a href="delete_all.php" style="font-size: 20px; color: #993300">Xóa Tất Cả Giỏ Hàng</a></tr></tr><?php }?>
      </tbody>
      
    </table>
  </div>
</body>
</html>