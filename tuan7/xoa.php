<?php
include("database.php");
if(isset($_GET["id"]))
{
	$key=$_GET["id"];

}
	$sl="delete from sanpham where id=".$_GET["id"];
//if(mysql_query($sl))
if(mysqli_query($connect,$sl))
{
	echo "<script language='javascript'>alert('Xoa thanh cong');";
		echo "location.href='index.php';</script>";
}


?>