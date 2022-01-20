<?php
	include("ketnoi.php");
	$sql = "SELECT * FROM nguoidung";
	if($result = $pdo->query($sql))
		{
			//đếm số record lấy được
			echo 'so ban ghi la : '.$result->rowCount();
		}
	?>