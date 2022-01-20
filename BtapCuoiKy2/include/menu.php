<?php
		$sql_dm = mysqli_query($mysqli,"select * from loaiodo order by maloaio");
	?>
	<div class="navbar-inner" style="background: #c94f0800">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">Loại ô đỗ</option>
							<?php
								while($row_dm = mysqli_fetch_array($sql_dm)){
							?>
							<option value="Danh mục sản phẩm"><a href="?quanly=dm&id=<?php echo $row_dm["maloaio"] ?>"><?php echo $row_dm["tenloaio"] ?></a></option>
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
							<a class="nav-link" href="index.php">
								<span style="font-weight: bold;font-size: 18px;" >Trang chủ</span>
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<?php
							$sql_dm_ngang = mysqli_query($mysqli,"select * from loaiodo order by maloaio");
							while($row_dm_ngang = mysqli_fetch_array($sql_dm_ngang)){
						?>
						<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">

							<a class="nav-link " href="?quanly=dm&id=<?php echo $row_dm_ngang["maloaio"]?>" role="button" aria-haspopup="true" aria-expanded="false">
								<?php echo $row_dm_ngang["tenloaio"]?>
							</a>
						<?php
							}
						?>
						</li>
						
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
						<?php 
						 ?>
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Thông tin
							</a>
							<div class="dropdown-menu">
								 <a class="dropdown-item" href="?quanly=tintuc">Bản giá</a>
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