<?php
	include("ketnoi.php");
	$sql = "UPDATE nguoidung SET name='Lê Thảo' WHERE id=2";
	$result = $pdo->prepare($sql); 
	$result->execute();

	?>