<?php
	include("db/connect.php");
?>

<?php
	if(isset($_POST['themgiohang'])){
		$tensanpham=$_POST['tensanpham']; 
		$id_sanpham=$_POST['sp_id'];
		$giasanpham=$_POST['giasanpham'];
		$hinhanh=$_POST['hinhanh'];
		$soluong=$_POST['soluong'];
        $sql_select_giohang = mysqli_query($mysqli,"select * from giohang where sp_id='$id_sanpham'");
        $count = mysqli_num_rows($sql_select_giohang);
       
        if($count>0){
            $row_sanpham=mysqli_fetch_array($sql_select_giohang);
            $soluong=$row_sanpham['soluong']+ 1;
            $sql_giohang="update giohang set soluong='$soluong' where sp_id='$id_sanpham' ";
        }else{
            $soluong=$soluong;
            $sql_giohang="insert into giohang(tensanpham,sp_id,giasanpham,hinhanh,soluong) value('$tensanpham','$id_sanpham','$giasanpham','$hinhanh','$soluong')";
        }
        $insert_row=mysqli_query($mysqli,$sql_giohang);
		if($insert_row==0){
			header('location:index.php?quanly=chitietsp&id='.$id_sanpham);
        }
       
    }elseif(isset($_POST['capnhatsoluong'])){
 
        for($i=0;$i<count($_POST['product_id']);$i++){
            $id_sanpham=$_POST['product_id'][$i];
            $soluong=$_POST['soluong'][$i];
            if($soluong<=0){
                $sql_delete=mysqli_query($mysqli,"delete from giohang where sp_id='$id_sanpham'");
            }else{
                $sql_update=mysqli_query($mysqli,"update giohang set soluong='$soluong' where sp_id='$id_sanpham'");
            }
            
        }
    }elseif(isset($_POST['xoagiohang'])){
        $sql_delete_giohang=mysqli_query($mysqli,"delete from giohang ");
 
        // for($i=0;$i<count($_POST['product_id']);$i++){
        //     $id_sanpham=$_POST['product_id'][$i];
        //     $soluong=$_POST['soluong'][$i];
        //     if($soluong<=0){
        //         $sql_delete=mysqli_query($mysqli,"delete from giohang where sp_id='$id_sanpham'");
        //     }else{
        //         $sql_update=mysqli_query($mysqli,"update giohang set soluong='$soluong' where sp_id='$id_sanpham'");
        //     }
            
        // }
    }elseif(isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        $sql_delete=mysqli_query($mysqli,"delete from giohang where giohang_id='$id'");
    }elseif(isset($_GET['dangxuat'])){
        $id=$_GET['dangxuat'];
        if($id==1){
            unset($_SESSION['dangnhap_home']);
        }
        
    }elseif(isset($_POST['thanhtoan'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $note=$_POST['note'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $giaohang=$_POST['giaohang'];
        $sql_khachhang=mysqli_query($mysqli,"insert into khachhang(name,phone,address,note,email,password,giaohang) value('$name','$phone','$address','$note','$email','$password','$giaohang')");
        if($sql_khachhang){
            $sql_select_khachhang=mysqli_query($mysqli,"select * from khachhang order by khachhang_id desc limit 1");
            $mahang=rand(0,9999);
            $row_khachhang=mysqli_fetch_array($sql_select_khachhang);
            $khachhang_id=$row_khachhang['khachhang_id'];
            $_SESSION['dangnhap_home']=$row_khachhang['name'];
            $_SESSION['khachhang_id']=$khachhang_id;
            for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++){
                
                $id_sanpham=$_POST['thanhtoan_product_id'][$i];
                $soluong=$_POST['thanhtoan_soluong'][$i];
                $sql_donhang=mysqli_query($mysqli,"insert into donhang(sp_id,soluong,mahang,khachhang_id) value('$id_sanpham','$soluong','$mahang','$khachhang_id')");
                $sql_giaodich=mysqli_query($mysqli,"insert into giaodich(sp_id,soluong,magiaodich,khachhang_id) value('$id_sanpham','$soluong','$mahang','$khachhang_id')");
                $sql_delete_thanhtoan=mysqli_query($mysqli,"delete from giohang where sp_id='$id_sanpham'");
            }
            
        }
    }elseif(isset($_POST['thanhtoandangnhap'])){
        $khachhang_id=$_SESSION['khachhang_id'];
        $mahang=rand(0,9999);
            for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++){
                
                $id_sanpham=$_POST['thanhtoan_product_id'][$i];
                $soluong=$_POST['thanhtoan_soluong'][$i];
                $sql_donhang=mysqli_query($mysqli,"insert into donhang(sp_id,soluong,mahang,khachhang_id) value('$id_sanpham','$soluong','$mahang','$khachhang_id')");
                $sql_giaodich=mysqli_query($mysqli,"insert into giaodich(sp_id,soluong,magiaodich,khachhang_id) value('$id_sanpham','$soluong','$mahang','$khachhang_id')");
                $sql_delete_thanhtoan=mysqli_query($mysqli,"delete from giohang where sp_id='$id_sanpham'");
            }
            
        }
    
?>



<!-- checkout page -->
<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Gi??? h??ng c???a b???n</span>
			</h3>
            <?php
            if(isset($_SESSION['dangnhap_home'])){
                echo '<p style="color:#000">Xin ch??o b???n : '.$_SESSION['dangnhap_home'].' <a href="index.php?quanly=giohang&dangxuat=1">????ng xu???t</a> </p>';
            }
            ?>
			<!-- //tittle heading -->
			<div class="checkout-right">
                <?php
                    $sql_lay_giohang = mysqli_query($mysqli,"select * from giohang order by giohang_id desc");
                ?>

				<div class="table-responsive">
                    <form action="" method="POST">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Th??? t???</th>
								<th>S???n ph???m</th>
								<th>S??? l?????ng</th>
								<th>T??n s???n ph???m</th>
                                <th>Gi??</th>
                                <th>Gi?? t???ng</th>
								<th>Qu???n l??</th>
							</tr>
						</thead>
						<tbody>
                            <?php
                            $i=0;
                            $total=0;
                            while($row_fetch_giohang=mysqli_fetch_array($sql_lay_giohang)){
                                $subtotal=$row_fetch_giohang['soluong']*$row_fetch_giohang['giasanpham'];
                                $total+=$subtotal;
                                
                                $i++;
                            ?>
							<tr class="rem1">
								<td class="invert"><?php echo $i ?></td>
								<td class="invert-image">
									<a href="single.html">
                                                                            <img src="images/<?php echo $row_fetch_giohang['hinhanh'] ?>" alt=" " height='75px' class="img-responsive">
									</a>
								</td>
								<td class="invert">
                                    <input type="number" min='1' name="soluong[]" value="<?php echo $row_fetch_giohang['soluong'] ?>">
                                    <input type="hidden" name="product_id[]" value="<?php echo $row_fetch_giohang['sp_id'] ?>">
								</td>
								<td class="invert"><?php echo $row_fetch_giohang['tensanpham'] ?></td>
                                <td class="invert"><?php echo number_format( $row_fetch_giohang['giasanpham']).'vn??' ?></td>
                                <td class="invert"><?php echo number_format( $subtotal).'vn??' ?></td>
								<td class="invert">
									<a href="?quanly=giohang&xoa=<?php echo $row_fetch_giohang['giohang_id'] ?>">X??a</a>
								</td>
							</tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td colspan="7">T???ng ti???n : <?php echo number_format( $total).'vn??' ?></td>
                            </tr>
                            <tr>
                                <td colspan="7"><input type="submit" class="btn btn-success" value="C???p nh???t gi??? h??ng" name="capnhatsoluong">
                                <input type="submit" class="btn btn-success" value="X??a to??n b??? gi??? h??ng" name="xoagiohang">
                                

                                <?php
                                $sql_giohang_select=mysqli_query($mysqli,"select * from giohang");
                                $count_giohang_select=mysqli_num_rows($sql_giohang_select);
                                if(isset($_SESSION['dangnhap_home']) && $count_giohang_select>0){
                                    while($row_1=mysqli_fetch_array($sql_giohang_select)){

                                ?>
                                <input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_1['soluong'] ?>">
                                <input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_1['sp_id'] ?>">
                                <?php
                                    }
                                ?>
                                <input type="submit" class="btn btn-success" value="Thanh to??n gi??? h??ng" name="thanhtoandangnhap"></td>
                                <?php
                                }
                                ?>   
                            </tr>
                            
						</tbody>
                    </table>
                  
                    </form>
                    <tr><a href="index.php"><input type="submit" class="btn btn-primary" value="Ti???p t???c mua h??ng" name="muahang"></a></td></tr>
                   
				</div>
			</div>
            <?php
            if(!isset($_SESSION['dangnhap_home'])){
            ?>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Th??m ?????a ch??? giao h??ng</h4>
					<form action="" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="??i???n h??? v?? t??n..." required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="S??? ??i???n tho???i" name="phone" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="?????a ch???" name="address" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Email" name="email" required="">
                                    </div>
                                    <div class="controls form-group">
										<input type="password" class="form-control" placeholder="Password" name="password" required="">
                                    </div>
                                    <div class="controls form-group">
										<textarea style="resize: none" class="form-control" placeholder="Ghi ch??" name="note" required=""></textarea>
									</div>
									<div class="controls form-group">
										<select class="option-w3ls" name="giaohang">
											<option>Ch???n h??nh th???c giao h??ng</option>
											<option value="1">T???i ?????a ??i???m giao h??ng</option>
											<option value="0">Thanh to??n ATM</option>

										</select>
									</div>
                                </div>
                                <?php
                                $sql_lay_giohang=mysqli_query($mysqli,"select * from giohang order by giohang_id desc");
                                while($row_thanhtoan=mysqli_fetch_array($sql_lay_giohang)){
                                ?>
                                 <input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_thanhtoan['soluong'] ?>">
                                <input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_thanhtoan['sp_id'] ?>">
                                <?php
                                }
                                ?>
                                <input type="submit" name="thanhtoan" class="btn btn-success" style="width:30%" value="Thanh to??n">
                                

							</div>
						</div>
					</form>
					
				</div>
			</div>
            <?php
            }
            ?>
		</div>
	</div>
	<!-- //checkout page -->