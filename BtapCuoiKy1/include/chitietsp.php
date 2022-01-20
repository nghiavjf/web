<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}else{
		$id='';
	}
	$sql_chitiet = mysqli_query($mysqli,"select * from sanpham where sanpham.sp_id=$id");
?>

<!-- page -->
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Chi Tiết SP</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<?php
		while($row_chitiet=mysqli_fetch_array($sql_chitiet)){
	?>
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider" style='height="400" width="200"'>
							<ul class="slides">
								<li data-thumb="images/<?php echo $row_chitiet["sp_image"] ?>">
									<div class="thumb-image">
										<img src="images/<?php echo $row_chitiet["sp_image"] ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
								
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $row_chitiet["sp_name"] ?></h3>
					<p class="mb-3">
						<span class="item_price"><?php echo number_format( $row_chitiet["sp_giakhuyenmai"])."vnđ" ?></span>
						<del class="mx-2 font-weight-light"><?php echo number_format( $row_chitiet["sp_gia"])."vnđ" ?></del>
						<label>Miễn phí vận chuyển</label>
					</p>
					<p> <span style="color: #000;">Số Lượng : <?php echo number_format( $row_chitiet["sp_soluong"]) ?></span> </p>
					<div class="product-single-w3l">
						<p><?php echo  $row_chitiet["sp_chitiet"] ?></p><br>
						<p><?php echo  $row_chitiet["sp_mota"] ?></p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="?quanly=giohang" method="post">
								<fieldset>
									<input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['sp_name'] ?>" />
									<input type="hidden" name="sp_id" value="<?php echo $row_chitiet['sp_id'] ?>" />
									<input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['sp_gia'] ?>" />
									<input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['sp_image'] ?>" />
									<input type="hidden" name="soluong" value="1" />

									<input type="submit" name="themgiohang" value="Thêm vào giỏ hàng" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                         
                            <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                       
                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <ul>
                                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2021</a></li>
                                </ul>
                                <p>Với giải pháp giấu dây tiện lợi từ Samsung dây cáp được ẩn gọn gàng trong chân đế, cùng kích thước tivi Samsung 55 inch phù hợp để trên kệ tủ hay treo trên tường ở nhiều nơi như: Phòng khách, phòng họp, phòng làm việc,... mang đến tổng thể tinh tế, hài hòa cho không gian nội thất nhà bạn.</p>
                                <p><b>Write Your Review</b></p>

                                <form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
                                    <textarea name="" ></textarea>
                                    <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                                    <button type="button" class="btn btn-default pull-right">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div><!--/category-tab-->
			</div>
		</div>
	</div>
	<!-- //Single Page -->
	<?php
		}
		?>