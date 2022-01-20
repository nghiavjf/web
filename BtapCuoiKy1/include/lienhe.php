<?php
if(isset($_POST['lienhe'])){
	$hoten=$_POST['hoten_lh'];
	$email_lh=$_POST['email_lh'];
	$message=$_POST['message'];
	$sql_lienhe=mysqli_query($mysqli,"insert into lienhe(lienhe_name,lienhe_email,message) value('$hoten','$email_lh','$message')");
}
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
					<li>Liên hệ</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- contact -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>L</span>iên
				<span>H</span>ệ
			</h3>
			<!-- //tittle heading -->
			<div class="row contact-grids agile-1 mb-5">
				<div class="col-sm-4 contact-grid agileinfo-6 mt-sm-0 mt-2">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-map-marker-alt rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Địa chỉ</h4>
						<p>Quảng Bình
							<label>Việt Nam.</label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6 my-sm-0 my-4">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-phone rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Gọi cho chúng tôi</h4>
						<p>+(84)899633453
							<label>+(84)899633453</label>
						</p>
					</div>
				</div>
				<div class="col-sm-4 contact-grid agileinfo-6">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-envelope-open rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
						<p>
							<a href="mailto:info@example.com">tn757922@gmail.com</a>
							<label>
								<a href="mailto:info@example.com">Vannghia@gmail.com</a>
							</label>
						</p>
					</div>
				</div>
			</div>
			<!-- form -->
			<form action="" method="post">
				<div class="contact-grids1 w3agile-6">
					<div class="row">
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label" >Họ và tên</label>
							<input type="text" class="form-control" name="hoten_lh" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label" >Email</label>
							<input type="email" class="form-control" name="email_lh" placeholder="" required="">
						</div>
					</div>
					<div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label" >Message</label>
						<textarea name="message" class="form-control" placeholder="" required=""> </textarea>
					</div>
					<div class="contact-form">
						<input type="submit" name="lienhe" value="Phản hồi">
					</div>
				</div>
			</form>
			<!-- //form -->
		</div>
	</div>
	<!-- //contact -->