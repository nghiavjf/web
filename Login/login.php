<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V19</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<?php
	//G???i file connection.php ??? b??i tr?????c
	require_once("login.php");
	// Ki???m tra n???u ng?????i d??ng ???? ??n n??t ????ng nh???p th?? m???i x??? l??
	if (isset($_POST["btn_submit"])) {
		// l???y th??ng tin ng?????i d??ng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//l??m s???ch th??ng tin, x??a b??? c??c tag html, k?? t??? ?????c bi???t 
		//m?? ng?????i d??ng c??? t??nh th??m v??o ????? t???n c??ng theo ph????ng th???c sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username ho???c password b???n kh??ng ???????c ????? tr???ng!";
		}else{
			if ($username!= "admin"&&$password!="admin") {
				echo "t??n ????ng nh???p ho???c m???t kh???u kh??ng ????ng !";
			}else{
				//ti???n h??nh l??u t??n ????ng nh???p v??o session ????? ti???n x??? l?? sau n??y
				$_SESSION['username'] = $username;
                // Th???c thi h??nh ?????ng sau khi l??u th??ng tin v??o session
                // ??? ????y m??nh ti???n h??nh chuy???n h?????ng trang web t???i m???t trang g???i l?? index.php
                header('Location: index.php');
			}
		}
	}
?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="POST" action="login.php">
					<span class="login100-form-title p-b-33">
						Account Login
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" >
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" name="btn_submit" type="submit">
							Sign in
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>

</body>
</html>