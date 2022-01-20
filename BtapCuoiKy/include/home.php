<!-- top Products -->
<div class="ads-grid py-sm-5 py-4" style="margin-top:-20px;">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
<!--			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">-->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Danh mục sản phẩm</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
					<?php
						$sql_cate_home = mysqli_query($mysqli,"select * from danhmuc order by dm_id desc");
						while($row_cate_home=mysqli_fetch_array($sql_cate_home )){
							$id_dm=$row_cate_home["dm_id"];
					?>
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                                                    <h3 class="heading-tittle text-center font-italic"><?php echo $row_cate_home["dm_name"] ?></h3>
							<div class="row">
							<?php
							$sql_product = mysqli_query($mysqli,"select * from sanpham where sp_active='1' order by sp_id desc");
							while($row_sanpham=mysqli_fetch_array($sql_product )){
								if($row_sanpham["dm_id"]==$id_dm){
							?> 
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
                                                                                    <img src="images/<?php echo $row_sanpham["sp_image"] ?>" alt="" style="width: 200px;
                                                                                         height: 300px">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham["sp_id"] ?>" class="link-product-add-cart">Xem sản phẩm</a>
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
                                            <form action="?quanly=giohang&id=<?php echo $row_sanpham['sp_id'] ?>" method="post">
                                            <fieldset>
                                                <input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sp_name'] ?>" />
                                                <input type="hidden" name="sp_id" value="<?php echo $row_sanpham['sp_id'] ?>" />
                                                <input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sp_giakhuyenmai'] ?>" />
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
								}
								?>
								
							</div>
						</div>
						<!-- //first section -->
						<?php
						}
						?>
						
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
								<button class="btn my-2 my-sm-0" name="seach_button" type="submit">Tìm kiếm</button>
							</form>
						</div>
					
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
									$sql_product_slidebar = mysqli_query($mysqli,"select * from sanpham where sp_hot='1' order by sp_id desc");
									while($row_product_slidebar=mysqli_fetch_array($sql_product_slidebar)){
								?>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/<?php echo $row_product_slidebar["sp_image"] ?>" alt="" class="img-fluid"><br>
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php echo $row_product_slidebar["sp_name"] ?></a>
											<a href="" class="price-mar mt-2"><?php echo number_format( $row_product_slidebar["sp_giakhuyenmai"])."vnđ" ?></a>
											<del><?php echo number_format ($row_product_slidebar["sp_gia"])."vnđ" ?></del>
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
</div>	<!-- //top products -->