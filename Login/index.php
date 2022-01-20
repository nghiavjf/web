<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<html>
<head>
	<title>trang chủ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body>
	<header style="background:#9fa7be ; height: 15%;  ">
		<div style="width:100%;height:auto;">
			<h1 style="margin-left: 30px;">
			<?php echo $_SESSION['username']; ?>
			</h1>
		</div>
		
	</header>

	
	<footer style="width: 20%;height: 100%;background:#373a3c;">

      <div class="pull-right">
          <ul class="list-inline" style="margin-left: 30px;">
             <li><a href="#">Trang quan tricing</a></li>
             <li><a href="#">Quan li sinh vien</a></li>
             <li><a href="#">Quan li dien dang</a></li>
             <li><a href="#">Bao cao thong ke</a></li>
          </ul>
      </div>
    </footer>
	
	
</body>
</html>