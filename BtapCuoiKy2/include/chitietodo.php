<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}else{
		$id='';
	}
	$sql_chitiet = mysqli_query($mysqli,"select * from odo,loaiodo where loaiodo.maloaio=odo.maloaio and odo.maodo=$id");
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
					<li>Chi Tiết Ô ĐỖ</li>
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
								<li data-thumb="images/o.jpg">
								<div class="thumb-image">
									<img src="images/o.jpg" data-imagezoom="true" class="img-fluid" alt=""> 
								</div>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $row_chitiet["tenodo"] ?></h3>
					<p class="mb-3">
						<span class="item_price"><?php echo number_format( $row_chitiet["dongia"])."vnđ" ?></span>
					</p>
					<p> <span style="color: #000;">Trạng thái : <?php
						if($row_chitiet["trangthai"]==1){
							echo "Trống";
						}else{
							echo "Đã đặt";
						}
					?></span></p>
					<div class="product-single-w3l">
						<p>Loại ô đỗ : <?php echo  $row_chitiet["tenloaio"] ?></p><br>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="?quanly=giohang" method="post">
								<fieldset>
									<input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['tenodo'] ?>" />
									<input type="hidden" name="sp_id" value="<?php echo $row_chitiet['maodo'] ?>" />
									<input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['dongia'] ?>/1 Lượt"/>
									<input type="hidden" name="soluong" value="1" />

									<input type="submit" name="themgiohang" value="Đặt chỗ" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="category-tab shop-details-tab" style="margin-top:20px;width:100%">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
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