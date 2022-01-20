<?php
if(isset($_GET['huydon'])&&isset($_GET['magiaodich'])){
    $huydon=$_GET['huydon'];
    $magiaodich=$_GET['magiaodich'];
}else{
    $huydon='';
    $magiaodich='';
}
$sql_update_donhang=mysqli_query($mysqli,"update donhang set huydon='$huydon' where mahang='$magiaodich'");
$sql_update_giaodich=mysqli_query($mysqli,"update giaodich set huydon='$huydon' where magiaodich='$magiaodich'");
?>
<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Xem đơn hàng</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						
							<div class="row">
                                <?php 
                                if(isset($_SESSION['dangnhap_home'])){
                                    echo 'đơn hàng :' .$_SESSION['dangnhap_home'];
                                }
                                ?>
							</div>
                            <div class="col-md-12">
                                
                                <?php
                                if(isset($_GET['khachhang'])){
                                    $id_khachhang=$_GET['khachhang'];
                                }else{
                                    $id_khachhang='';
                                }
                                $sql_select=mysqli_query($mysqli,"select * from giaodich where khachhang_id='$id_khachhang' group by magiaodich");
                                ?>
                                <table class="table table-responsive table-bordered ">
                                    <tr>
                                        <th>Thứ tự</th>
                                        <th>Mã giao dịch</th>
                                        
                                        <th>Ngày đặt</th>
                                        <th>Tình trạng</th>
                                        <th>Quản lý</th>
                                        <th>Yêu cầu</th>
                                       
                                    </tr>
                                    <?php
                                    $i=0;
                                    while($row_donhang=mysqli_fetch_array($sql_select)){
                                        $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row_donhang['magiaodich'] ?></td>
                                        
                                        
                                        <td><?php echo $row_donhang['ngaythang'] ?></td>
                                        <td><?php
                                        if($row_donhang['tinhtrangdon']==0){
                                            echo 'Đang chờ xử lý';
                                        }else{
                                            echo 'Đã xử lý | Đang giao hàng';
                                        }
                                        ?>
                                        </td>
                                        <td><a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>&magiaodich=<?php echo $row_donhang['magiaodich'] ?>">Xem chi tiết</a></td>
                                        <td>
                                        <?php 
                                        if($row_donhang['huydon']==0){
                                        ?>
                                        <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>&magiaodich=<?php echo $row_donhang['magiaodich'] ?>&huydon=1">Yêu cầu hủy</a>
                                        <?php
                                        }elseif($row_donhang['huydon']==1){
                                            ?>

                                           <p>Đang chờ hủy...</p>
                                        <?php 
                                        }else{
                                            echo 'Đã hủy';
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
                                    <p>Chi tiết đơn hàng :</p><br>
                                    <?php
                                    if(isset($_GET['magiaodich'])){
                                        $magiaodich=$_GET['magiaodich'];
                                    }else{
                                        $magiaodich='';
                                    }
                                    $sql_select=mysqli_query($mysqli,"select * from khachhang,giaodich,sanpham where giaodich.sp_id=sanpham.sp_id and  khachhang.khachhang_id=giaodich.khachhang_id and giaodich.magiaodich='$magiaodich' order by khachhang.khachhang_id desc");
                                    ?>
                                    <table class="table table-responsive table-bordered ">
                                        <tr>
                                            <th>Thứ tự</th>
                                            <th>Mã giao dịch</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Ngày đặt</th>
                                           
                                        </tr>
                                        <?php
                                        $i=0;
                                        while($row_donhang=mysqli_fetch_array($sql_select)){
                                            $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $row_donhang['magiaodich'] ?></td>
                                            <td><?php echo $row_donhang['sp_name'] ?></td>
                                            <td><?php echo $row_donhang['soluong'] ?></td>
                                            <td><?php echo $row_donhang['ngaythang'] ?></td>
                                            
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                    
                                    </div>
						
						<!-- //first section -->
						
					</div>
				</div>
				<!-- //product left -->
				
			
			</div>
		</div>
	</div>
	<!-- //top products -->