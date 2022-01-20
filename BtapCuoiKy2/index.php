<?php
	session_start();
	include("db/connect.php");
?>
<!DOCTYPE html>
<html lang="vn">
<head>
	<title>Website gửi xe</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar() { 
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/price-range.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Meta tag Keywords -->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"rel="stylesheet">
	<!-- //web fonts -->
</head>

<body style="background: #e9e9e9;">
<?php
	include("include/topbar.php");
	include("include/menu.php");
	include("include/slider.php");
	if(isset($_GET['quanly'])){
		$tam = $_GET['quanly'];
	}else{
		$tam = '';
	}
	if($tam=='dm'){
	include("include/danhmuc.php");
	}elseif($tam=='timkiem'){
		include("include/timkiem.php");
	}elseif($tam=='tintuc'){
		include("include/tintuc.php");
	}elseif($tam=='lienhe'){
		include("include/lienhe.php");
	}elseif($tam=='xemdonhang'){
		include("include/xemdatcho.php");
	}elseif($tam=='chitiettin'){
		include("include/chitiettin.php");
	}elseif($tam=='chitietsp'){
		include("include/chitietodo.php");
	}elseif($tam=='giohang'){
		include("include/datcho.php");
	}else {
		include("include/home.php");
	}
	include("include/footer.php");
?>

	<div class="copy-right py-3" style="margin-bottom: -50px;">
		<div class="container">
			<p class="text-center text-white">© 2021 TLN Book Store. All rights reserved | Design by VNGHIA
			</p>
		</div>
	</div>
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->
	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	
	<!-- //cart-js -->

	<!-- password-script -->
	
	<!-- imagezoom -->
	<script src="js/imagezoom.js"></script>
	<!-- //imagezoom -->
	<!-- flexslider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->
	<!-- //password-script -->
	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->
	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<script>
		const sl_input = document.querySelector('#sluot')
		const dgia = document.querySelector('#dgia')
		const tt = document.querySelector('#tt')


		sl_input.addEventListener('change', (e) =>{
			var tong = e.target.value * dgia.value
			var tongtien = new Intl.NumberFormat('en-IN', { maximumSignificantDigits: 3 }).format(tong)
			tt.innerHTML = tongtien+'vnđ'
		})
	</script>
</body>

</html>