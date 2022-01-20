<!-- 
	<?php
	if(isset($_POST['seach_button'])){
		$tukhoa=$_POST['seach_product'];
		$sql_product = mysqli_query($mysqli,"select * from odo,loaiodo where odo.trangthai='1' and odo.maloaio=loaiodo.maloaio and (odo.tenodo like '%$tukhoa%' or loaiodo.tenloaio like'%$tukhoa%') order by maodo");
    	$title=$tukhoa;
	}
	?> 
-->
<!-- 
	<?php
	if(isset($_POST['seach_button1'])){
		$tukhoa=$_POST['chon_hang'];
		$sql_product = mysqli_query($mysqli,"select * from odo,loaiodo where odo.trangthai='1' and odo.maloaio=loaiodo.maloaio and (odo.tenodo like '%$tukhoa%' or loaiodo.tenloaio like'%$tukhoa%') order by maodo");
    	$title=$tukhoa;
	}
	?> 
-->
<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Từ khóa tìm kiếm: <?php echo $title ?></h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<?php
								while($row_sanpham=mysqli_fetch_array($sql_product)){
									?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center" style="height: 150px;">
											<img src="images/o.jpg" alt="" style="width:150px;">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham["maodo"]?>" class="link-product-add-cart">Xem ô đỗ</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham["maodo"] ?>"></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format( $row_sanpham["dongia"])."vnđ" ?>/1 Lượt</span>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<form action="?quanly=giohang" method="post">
                                            <fieldset>
                                                <input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sp_name'] ?>" />
                                                <input type="hidden" name="sp_id" value="<?php echo $row_sanpham['sp_id'] ?>" />
                                                <input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sp_gia'] ?>" />
                                                <input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['sp_image'] ?>" />
                                                <input type="hidden" name="soluong" value="1" />

                                                <input type="submit" name="themgiohang" value="Đặt chỗ" class="button" />
                                            </fieldset>
                                        </form>
											</div>
										</div>
									</div>
								</div>
								
								<?php
								}
								?>
							</div>
						</div>
						<!-- //first section -->
						
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm kiếm..</h3>
							<form action="index.php?quanly=timkiem" method="post">
								<input type="search" placeholder="Tìm kiếm" name="seach_product" required="">
								<button class="btn my-2 mt-2" name="seach_button" type="submit">Tìm kiếm</button>
							</form>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="w3l-range">
								<ul>
								<input type="radio" name="chon_gia" value="15000" >15,000vnđ<br>
								<input type="radio" name="chon_gia" value="20000">20,000vnđ <br>
								<input type="radio" name="chon_gia" value="30000">30,000vnđ <br>									
								</ul>
							</div>
						</div>
						<!-- //price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Loại ô đỗ</h3>
							<form action="index.php?quanly=timkiem" method="post">
							<div class="w3l-range">
								<ul>
								<input type="radio" name="chon_hang" value="4 chỗ">Xe 4 chỗ<br>
								<input type="radio" name="chon_hang" value="7 chỗ">Xe 7 chỗ<br>
								<input type="radio" name="chon_hang" value="16 chỗ">Xe 16 chỗ<br>
								<button class="btn my-2 my-sm-0" name="seach_button1" type="submit">Lọc kết quả</button>																		
								</ul>
							</div>
							</form>
						</div>
						
						<!-- electronics -->
						<div class="left-side border-bottom py-2"> 
						
							<h3 class="agileits-sear-head mb-3">Danh sách loại ô đỗ</h3>
							
								<?php
								$sql_category1 = mysqli_query($mysqli,"select * from loaiodo order by maloaio");
								while($row_title1= mysqli_fetch_array($sql_category1)){
								// while($row_dmslidebar= mysqli_fetch_array($sql_dm_slidebar)){
								?>
							
							<ul>
								<li>
									<!--<input type="checkbox" class="checked">-->
									
									<a href="?quanly=dm&id=<?php echo $row_title1["maloaio"] ?>"> <?php echo $row_title1["tenloaio"] ?></a>
								</li>
								
							</ul>
							<?php
								}
								?>
						</div>
						<!-- //electronics -->
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Ô đỗ trống</h3>
							<div class="box-scroll">
								<div class="scroll">
								<?php
									$sql_product_slidebar = mysqli_query($mysqli,"select * from odo,loaiodo where odo.maloaio=loaiodo.maloaio order by maodo");
									while($row_product_slidebar=mysqli_fetch_array($sql_product_slidebar)){
								?>
									<div class="row">
										<div class=" left-mar" style="max-width:30%">
											<img src="images/o.jpg" alt="" class="img-fluid" >
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd" style="max-width:70%">
											<a href=""><?php echo $row_product_slidebar["tenodo"]?></a><br/>
											<a href=""><?php echo $row_product_slidebar["tenloaio"]?></a>
											<a href="" class="price-mar"><?php echo number_format( $row_product_slidebar["dongia"])."vnđ"?></a>
										</div>
									</div><br>
									<?php
									}
									?>
								</div>
							</div>
						</div>
						<!-- //best seller -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->