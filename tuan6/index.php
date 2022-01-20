<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>sql</title>
	</head>

	<body>
		<?php  
			include_once('connect.php'); 
		?>
		<table align="center" border="1" width="600" >
			<tr align="center">
				<td colspan="2">bang mat hang</td>
			</tr>
			<?php 
				$sql = "SELECT * FROM mathang";
				$results = mysqli_query($connect, $sql);
				while( ($rows = mysqli_fetch_assoc($results))!= NULL )
				{
				?>
				<tr align="center">
					<td>
						<?php echo $rows['MaHang']; ?>
					</td>
					<td>
						<?php echo $rows['TenHang']; ?>
					</td>
					<td>
						<?php echo $rows['MaCongTy']; ?>
					</td>
					 <td>
					 	<?php echo $rows['MaLoaiHang']; ?>
					 </td>
					<td>
					 	<?php echo $rows['DonViTinh']; ?>
					 </td>
					 <td>
					 	<?php echo $rows['GiaHang']; ?>
					 </td>
				</tr>
				<?php 
				} 
				mysqli_close($connect);
			?>
		</table>

	</body>
</html>