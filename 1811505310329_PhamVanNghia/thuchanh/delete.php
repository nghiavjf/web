<?php
	include("ketnoi.php");
	$sql = "DELETE FROM nguoidung WHERE id=4";
	$sql = "DELETE FROM nguoidung WHERE id=5";
	$result = $pdo->exec($sql);


	?>