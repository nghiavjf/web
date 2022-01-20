<?php
if(isset($_GET['huydon'])&&isset($_GET['magiaodich'])){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $giohuy=date("H:i:s");
    $giodat=$_GET['giohuy'];
    $giodatcho= strtotime($giodat)+1800; 
    $huydon=$_GET['huydon'];
    $magiaodich=$_GET['magiaodich'];
    $maodo=$_GET['maodo'];
    if(strtotime($giohuy)<=$giodatcho){
        $sql_update_donhang=mysqli_query($mysqli,"update datcho set trangthaidat=$huydon where madatcho='$magiaodich'");
        $sql_update_odo=mysqli_query($mysqli,"update odo set trangthai=1 where maodo='$maodo'");
    }else{
        $message='Hủy không thành công';
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
if(isset($_GET['yeucauhuy'])&&isset($_GET['magiaodich'])){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $giohuy=date("H:i:s");
    $giodat=$_GET['giohuy'];
    $giodatcho= strtotime($giodat)+1800; 
    $huydon=$_GET['yeucauhuy'];
    $magiaodich=$_GET['magiaodich'];
    if(strtotime($giohuy)<=$giodatcho){
        $sql_update_donhang=mysqli_query($mysqli,"update datcho set trangthaidat=$huydon where madatcho='$magiaodich'");
    }else{
        $message='Hủy không thành công';
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>
<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Lịch Sử Đặt Chỗ</h3>
        <!-- //tittle heading -->
        <div class="row">
            <!-- product left -->
            <div class="agileinfo-ads-display col-lg-9" style="max-width: none;" >
                <div class="wrapper">
                    <!-- first section -->
                    <div class="row"> 
                        <?php 
                        if(isset($_SESSION['dangnhap_home'])){
                            echo 'Đặt chỗ :' .$_SESSION['dangnhap_home'];
                        }
                        ?>
                    </div>
                    <div class="col-md-12" style="width: 1300px; max-width:none;">
                            
                        <?php
                        if(isset($_GET['khachhang'])){
                            $id_khachhang=$_GET['khachhang'];
                        }else{
                            $id_khachhang='';
                        }
                        $sql_select=mysqli_query($mysqli,"select * from datcho, odo, loaiodo where datcho.maodo=odo.maodo and odo.maloaio=loaiodo.maloaio and datcho.makh='$id_khachhang' group by madatcho");
                        ?>
                        <table class="table table-responsive table-bordered ">
                            <tr>
                                <th>STT</th>
                                <th>Mã đặt chỗ</th>
                                <th>Biển số xe</th>
                                <th>Tên ô đỗ</th>
                                <th>Ngày đặt</th>
                                <th>Thời gian vào</th>
                                <th>Số lượt</th>
                                <th>Tg ra dự kiến</th>
                                <th>Thành tiền</th>
                                <th>Tình trạng</th>
                                <th>Thao tác</th>
                                <th>Hóa đơn</th>
                            </tr>
                            <?php
                            $i=0;
                            while($row_donhang=mysqli_fetch_array($sql_select)){
                                $i++;
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $row_donhang['madatcho'] ?></td>
                                <td style="text-transform:uppercase"><?php echo $row_donhang['biensoxe'] ?></td>
                                <td><?php echo $row_donhang['tenodo'] ?></td>
                                <td><?php echo $row_donhang['ngaydangky'] ?></td>
                                <td><?php echo $row_donhang['thoigianvao'] ?></td>
                                <td><?php echo $row_donhang['soluot'] ?></td>
                                <td><?php echo $row_donhang['thoigianradukien'] ?></td>
                                <td><?php echo number_format($row_donhang['tiendukien']).' vnđ'?></td>
                                <td><?php
                                if($row_donhang['trangthaidat']==0){
                                    echo '<span style="color:red;">Đang chờ xử lý</span>';
                                }elseif($row_donhang['trangthaidat']==1){
                                    echo '<span style="font-weight: bold;">Đã xác nhận<span>';
                                }elseif($row_donhang['trangthaidat']==2){
                                ?>
                                    <p>Đang chờ hủy...</p>
                                <?php 
                                }elseif($row_donhang['trangthaidat']==3){
                                ?>
                                    <p>Đã hủy</p>
                                <?php 
                                }
                                elseif($row_donhang['trangthaidat']==4){
                                    echo '<span style="font-weight: bold;">Đã thanh toán<span>';
                                }
                                ?>
                                </td>
                                <td>
                                <?php 
                                if($row_donhang['trangthaidat']==0){
                                ?>
                                    <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>&giohuy=<?php echo $row_donhang['giodangky'] ?>&magiaodich=<?php echo $row_donhang['madatcho'] ?>&huydon=3&maodo=<?php echo $row_donhang['maodo']?>">Hủy</a>
                                <?php 
                                }elseif($row_donhang['trangthaidat']==1){
                                ?>
                                    <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>&giohuy=<?php echo $row_donhang['giodangky']  ?>&magiaodich=<?php echo $row_donhang['madatcho'] ?>&yeucauhuy=2">Yêu cầu hủy</a>
                                <?php 
                                }
                                ?>
                                </td>
                                <td>
                                <?php 
                                if($row_donhang['trangthaidat']==4){
                                ?>
                                    <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>&magiaodich=<?php echo $row_donhang['madatcho'] ?>&xemhoadon=1">Xem hóa đơn</a>
                                <?php 
                                }
                                ?>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <p>Hóa đơn :</p><br>
                        <?php
                        if(isset($_GET['magiaodich']) && isset($_GET['xemhoadon'])){
                            $magiaodich=$_GET['magiaodich'];
                        }else{
                            $magiaodich='';
                        }
                        $sql_select_2=mysqli_query($mysqli,"select * from hoadon,datcho,odo,loaiodo where hoadon.madatcho=datcho.madatcho and datcho.maodo=odo.maodo and odo.maloaio=loaiodo.maloaio and datcho.makh='$id_khachhang' and hoadon.madatcho='$magiaodich'");
                        ?>
                        <table class="table table-responsive table-bordered ">
                            <tr>
                                <th>Mã hóa đơn</th>
                                <th>Ngày lập HĐ</th>
                                <th>Biển số xe</th>
                                <th>Thời gian ra</th>
                                <th>Thành tiền</th>
                                <th>Tiền phạt</th>
                                <th>Tổng tiền</th>
                                <th>trạng thái</th>
                                
                            </tr>
                            <?php
                            
                            while($row_donhang_2=mysqli_fetch_array($sql_select_2)){
                            ?>
                            <tr>
                                <td><?php echo $row_donhang_2['mahd'] ?></td>
                                <td><?php echo $row_donhang_2['ngaylaphd'] ?></td>
                                <td><?php echo $row_donhang_2['biensoxe'] ?></td>
                                <td><?php echo $row_donhang_2['thoigianra'] ?></td>
                                <td><?php echo number_format($row_donhang_2['tiendukien']).' vnđ'?></td>
                                <td><?php echo number_format($row_donhang_2['tienphat']).' vnđ'?></td>
                                <td><?php echo number_format($row_donhang_2['tongtien']).' vnđ'?></td>
                                
                                <td><?php
                                if($row_donhang_2['trangthaihd']==0){
                                    echo '<span style="color:red;">Chưa thanh toán</span>';
                                }else{
                                    echo 'Đã thanh toán';
                                }
                                ?></td>  
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                                    
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



