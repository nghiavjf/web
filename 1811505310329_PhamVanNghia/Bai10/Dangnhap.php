<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><form id="form1" name="form1" method="post" action="dangnhap.php">
<table width="300" border="1" align="left">
<tr>
<td>Username:</td>
<td><input type="text" name="username" id="username" />
</td>
</tr>
<tr>
<td>Password:</td>
<td><input type="text" name="password" id="password" /></td>
</tr>
<tr>
<td colspan="2"><label>
<input type="checkbox" name="remember" id="remember" />
      Remember</label></td>
</tr>
<tr>
<td><input type="submit" name="dangnhap" id="dangnhap" value="Dang Nhap" /></td>
<td><input type="reset" name="huy" id="huy" value="Huy" /></td>
</tr>
</table></form>
<?php 
session_start();
ob_start();
include("../connect.php");
$username=$_POST['username'];
$password=$_POST['password'];
$sl="select * from users where Username='".$username."' and Password='".$password."'";
$kq=mysql_query($sl);
$row=mysql_fetch_array($kq);
if(mysql_num_rows($kq)>0)
{ /*$d=mysql_fetch_array($kq);
echo "Chao ban ".$d['HoTen'];*/

$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['hoten']=$row['HoTen'];
echo "<script language='javascript'>alert('Dang nhap thanh cong');";
			echo "location.href='noidung.php';</script>";
}
else
{
echo "<script language='javascript'>alert('Dang nhap that bai');";
			echo "location.href='dangnhap.php';</script>";
}
?>
</body>
</html>



