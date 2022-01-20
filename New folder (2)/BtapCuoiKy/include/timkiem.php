<!-- <?php
	if(isset($_POST['seach_button'])){
		$tukhoa=$_POST['seach_product'];
	
	$sql_product = mysqli_query($mysqli,"select * from sanpham where sp_name like '%$tukhoa%' order by sp_id desc");
	
    $title=$tukhoa;
}
?> -->
<!-- <?php
	if(isset($_POST['seach_button1'])){
		$tukhoa=$_POST['chon_hang'];
	
	$sql_product = mysqli_query($mysqli,"select * from sanpham where sp_name like '%$tukhoa%' order by sp_id desc");
	
    $title=$tukhoa;
}
?> -->
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
										<div class="men-thumb-item text-center">
											<img src="images/<?php echo $row_sanpham["sp_image"] ?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham["sp_id"] ?> ?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham["sp_id"] ?>"><?php echo $row_sanpham["sp_name"] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format( $row_sanpham["sp_giakhuyenmai"])."vnđ" ?></span>
												<del><?php echo number_format( $row_sanpham["sp_gia"])."vnđ" ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<form action="?quanly=giohang" method="post">
                                            <fieldset>
                                                <input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sp_name'] ?>" />
                                                <input type="hidden" name="sp_id" value="<?php echo $row_sanpham['sp_id'] ?>" />
                                                <input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sp_gia'] ?>" />
                                                <input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['sp_image'] ?>" />
                                                <input type="hidden" name="soluong" value="1" />

                                                <input type="submit" name="themgiohang" value="Thêm vào giỏ hàng" class="button" />
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
							<h3 class="agileits-sear-head mb-3">Tìm kiếm...</h3>
							<form action="index.php?quanly=timkiem" method="post">
								<input type="search" placeholder="Tìm kiếm" name="seach_product" required="">
								<button class="btn my-2 my-sm-0" name="seach_button" type="submit"> Tìmkiếm</button>
							</form>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="w3l-range">
								<ul>
								<input type="radio" name="chon_gia" value="1_5" checked> Từ 1 triệu-5 triệu<br>
								<input type="radio" name="chon_gia" value="5_10"> Từ 5 triệu-10 triệu<br>
								<input type="radio" name="chon_gia" value="10_20"> Từ 10 triệu-20 triệu<br><br>
								
								</ul>
							</div>
						</div>
						<!-- //price -->
						
						<!-- reviews -->
						<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Khách hàng Review</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
								
							</ul>
						</div>

						<!-- //reviews -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Hãng</h3>
							<form action="index.php?quanly=timkiem" method="post">
							<div class="w3l-range">
								<ul>
								<input type="radio" name="chon_hang" value="LG">LG<br>
								<input type="radio" name="chon_hang" value="SAMSUNG">SAMSUNG<br>
								<input type="radio" name="chon_hang" value="IPHONE">IPHONE<br><br>
								<button class="btn my-2 my-sm-0" name="seach_button1" type="submit">Tìm kiếm</button>																		
								</ul>
							</div>
							</form>
						</div>
						<!-- electronics -->
						<div class="left-side border-bottom py-2"> 
						
							<h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
							
								<?php
								$sql_category1 = mysqli_query($mysqli,"select * from danhmuc order by dm_id desc");
								while($row_title1= mysqli_fetch_array($sql_category1)){
								// while($row_dmslidebar= mysqli_fetch_array($sql_dm_slidebar)){
								?>
							
							<ul>
								<li>
									<!--<input type="checkbox" class="checked">-->
									
									<a href="?quanly=dm&id=<?php echo $row_title1["dm_id"] ?>"> <?php echo $row_title1["dm_name"] ?></a>
								</li>
								
							</ul>
							<?php
								}
								?>
						</div>
						<!-- //electronics -->
					
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
							<div class="box-scroll">
								<div class="scroll">
								<?php
									$sql_product_slidebar = mysqli_query($mysqli,"select * from sanpham where sp_hot='0' order by sp_id desc");
									while($row_product_slidebar=mysqli_fetch_array($sql_product_slidebar)){
								?>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/<?php echo $row_product_slidebar["sp_image"] ?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php echo $row_product_slidebar["sp_name"] ?></a>
											<a href="" class="price-mar mt-2"><?php echo number_format( $row_product_slidebar["sp_giakhuyenmai"])."vnđ" ?></a>
											<del><?php echo number_format ($row_product_slidebar["sp_gia"])."vnđ" ?></del>
										</div>
									</div>
									<?php
									}
									?>
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->