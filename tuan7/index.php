<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php  
			include_once('database.php'); 
	?>
	
	<table border="2" >
		<tr>
			<td style="color: red;">Nhóm sản phẩm</td>
		</tr>
		<?php 
			$sql = "SELECT TenNhom FROM nhomsanpham";
			$results = mysqli_query($connect, $sql);
			while( ($rows = mysqli_fetch_assoc($results))!= NULL )
			{
		?>
		<tr>
			<td><?php echo $rows['TenNhom']; ?></td>
		</tr>
		<?php
			}  	
		?>
	</table>
	<table border="2" >
		<tr>
			<td colspan="4" style="color: red;">Danh sách Sản phẩm</td>
			
		</tr>
		<tr>
			<td style="background-color: yellow">STT</td>
			<td style="background-color: yellow">TÊN SP</td>
			<td style="background-color: yellow">GIÁ SP</td>
			<td style="background-color: yellow">THAO TÁC</td>
		</tr>
		<tr>
			<?php 
			$sql2 = "SELECT * FROM sanpham WHERE idNhomSP=1";
			$results2 = mysqli_query($connect, $sql2);
			while( ($rows2 = mysqli_fetch_assoc($results2))!= NULL )
			{
			?>
			<td><?php echo $rows2['id']; ?></td>
			<td><?php echo $rows2['TenSP']; ?></td>
			<td><?php echo $rows2['GiaSP']; ?></td>
			<td><a href="xoa.php?id=<?php echo $rows2['id'];?>" onclick="return confirm('Ban co chac chan khong?');">delete</a></td>
		</tr>
		<?php
			}  
			mysqli_close($connect);
		?>
	</table>
	
</body>
</html>