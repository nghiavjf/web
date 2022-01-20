<?php
		$sql_dm = mysqli_query($mysqli,"select * from danhmuc order by dm_id asc");
	?>
	<div class="navbar-inner" style="background: #c94f0800">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">Danh mục sản phẩm</option>
							<?php
								while($row_dm = mysqli_fetch_array($sql_dm)){
							?>
							<option value="Danh mục sản phẩm"><a href="?quanly=dm&id=<?php echo $row_dm["dm_id"] ?>"><?php echo $row_dm["dm_name"] ?></a></option>
							<?php
								}
							?>
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<?php
							$sql_dm_ngang = mysqli_query($mysqli,"select * from danhmuc order by dm_id asc");
							while($row_dm_ngang = mysqli_fetch_array($sql_dm_ngang)){
						?>
						<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">

							<a class="nav-link " href="?quanly=dm&id=<?php echo $row_dm_ngang["dm_id"]?>" role="button" aria-haspopup="true" aria-expanded="false">
								<?php echo $row_dm_ngang["dm_name"]?>
							</a>
						<?php
							}
						?>
						</li>
						
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
						<?php 
						$sql_danhmuctin=mysqli_query($mysqli,"select * from danhmuc_tin order by danhmuctin_id desc");
						 ?>
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tin tức
							</a>
							<div class="dropdown-menu">
								<?php 
								while($row_danhmuctin=mysqli_fetch_array($sql_danhmuctin)){
								?>
								 <a class="dropdown-item" href="?quanly=tintuc&id_tin=<?php echo $row_danhmuctin['danhmuctin_id'] ?>"><?php echo $row_danhmuctin['tendanhmuc']  ?></a>
								<?php
								}
								?>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Trang
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="product.html">Sản phẩm mới</a>
								
								
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="checkout.html">Kiểm tra hàng</a>
								<a class="dropdown-item" href="payment.html">Thanh toán</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?quanly=lienhe">Liên hệ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->