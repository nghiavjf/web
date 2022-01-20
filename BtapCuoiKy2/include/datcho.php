<?php
	include("db/connect.php");
    if(isset($_POST['themgiohang'])){
		$id=$_POST['sp_id'];
        $soluot=$_POST['soluong']; 
	}else{
		$id='';
	}
	$sql_category = mysqli_query($mysqli,"select * from loaiodo,odo where loaiodo.maloaio = odo.maloaio and odo.maodo='$id'");
	$row_title= mysqli_fetch_array($sql_category);
    
?>
<?php
    if(isset($_GET['dangxuat'])){
        $id=$_GET['dangxuat'];
        if($id==1){
            unset($_SESSION['dangnhap_home']);
        }
    }elseif(isset($_POST['thanhtoandangnhap'])){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $giodk=date("H:i:s");
        $khachhang_id=$_SESSION['khachhang_id'];
        $id_sanpham=$_POST['maodo'];
        $biensoxe=$_POST['bsx'] ;
        $ngaydk=date("Y-m-d");
        $tgvao=$_POST['tgv'];
        $dongia=$_POST['dg'];
        $soluot=$_POST['soluot'];
        $thanhtien=$dongia*$soluot;
        $timestamp = strtotime($tgvao);
        $tgr = $timestamp + 3600*$soluot;
        $tgra = strftime('%H:%M:%S', $tgr);
        $sql_donhang=mysqli_query($mysqli,"insert into datcho(maodo,makh,biensoxe,ngaydangky,giodangky,thoigianvao,soluot,thoigianradukien,tiendukien) 
        value('$id_sanpham','$khachhang_id','$biensoxe','$ngaydk','$giodk','$tgvao','$soluot','$tgra','$thanhtien')");
        $sql_update_sl="update odo set trangthai=0 where maodo=$id_sanpham";
        mysqli_query($mysqli,$sql_update_sl);
        echo '<script language="javascript">';
        echo 'alert("Đặt chỗ thành công")';
        echo '</script>';
        
    }
?>
<!-- checkout page -->
<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Đ</span>ặt chỗ
			</h3>
            <?php
            if(isset($_SESSION['dangnhap_home'])){
                echo '<p style="color:#000">Xin chào bạn : '.$_SESSION['dangnhap_home'].' <a href="index.php?quanly=giohang&dangxuat=1">Đăng xuất</a></p>';
            }
            ?>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<div class="table-responsive">
                    <form action="" method="POST">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Tên ô đỗ</th>
                                <th>Biển số xe</th>
                                <th>Thời gian vào</th>
								<th>Số lượt đỗ</th>
								<th>Loại ô đỗ</th>
                                <th>Đơn giá</th>
                                <th>Tổng tiền</th>
							</tr>
						</thead>
						<tbody>
                            <?php
                               if(isset($_POST['themgiohang'])){
                                
                                $subtotal=0;
                                $tgv="07:00:00";
                                
                            ?>
							<tr class="rem1">
								<td class="invert"><?php echo $row_title['tenodo'] ?></td>
                                <td class="invert">
                                    <input type="text" name="bsx" value=""style="text-transform:uppercase">
								</td>
								<td class="invert">
                                    <input type="time" name="tgv" value="<?php echo $tgv ?>">
								</td>
								<td class="invert">
                                    <input type="number" min='1' name="soluot" id="sluot" value="<?php echo $soluot ?>">
                                    <input type="hidden" name="maodo" value="<?php echo $row_title['maodo'] ?>">
                                    <input type="hidden" id="dgia" name="dg" value="<?php echo $row_title['dongia'] ?>">
								</td>
								<td class="invert"><?php echo $row_title['tenloaio'] ?></td>
                                <td class="invert" ><?php echo number_format($row_title['dongia']).'vnđ' ?></td>
                                <td class="invert" id="tt" ><?php echo number_format($row_title['dongia']).'vnđ' ?></td>
							</tr>
                            <?php
                               }
                            ?>
                            <tr>
                                <td colspan="7">
                                    
                                    <a href="index.php"><input style="width:84px;" class="btn btn-success" value="Hủy" name="huy"></a>
                                    <input type="submit" class="btn btn-success" value="Đặt chỗ" name="thanhtoandangnhap">
                                </td>
                            </tr>
						</tbody>
                    </table>
                    </form>
                    <tr><a href="index.php"><input type="submit" class="btn btn-primary" value="Đặt ô đỗ khác" name="muahang"></a></td></tr>
				</div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->

 