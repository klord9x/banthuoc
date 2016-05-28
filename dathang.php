<?php
include("ketnoi.php");
session_start();
if(!isset($_SESSION["user"]))
{
	header("location:index.php");
	exit();
}
else
{
$hoten = !(isset($_POST["txthoten"]))?"":$_POST["txthoten"];
$diachi = !(isset($_POST["txtdiachi"]))?"":$_POST["txtdiachi"];
$sdt = !(isset($_POST["txtsdt"]))?"":$_POST["txtsdt"];
$sotaikhoan = !(isset($_POST["txtemail"]))?"":$_POST["txtemail"];
//l?y idlogin c?a username dang mua hàng
$username = $_SESSION["user"];
$kq = mysql_query("select user.idtk from user where User = '$username'");
$row1 = mysql_fetch_row($kq);
$idlogin = $row1[0];
if(isset($_SESSION["cart"]))
{
	foreach($_SESSION["cart"] as $key => $value)
		{
			$id = $key;
			$sl = $value;
			$q = "select * from sanpham where idsp = {$id}";
			$ngaydh = date("Y-m-j");
			$r= mysql_db_query("ban_dt",$q);
			$row = mysql_fetch_array($r);
			$sql = "insert into dathang values({$id},'{$row["Tensp"]}','{$sl}','{$ngaydh}','$idlogin','$hoten','$diachi','$sdt','$email')";
			$result = mysql_db_query("ban_dt",$sql);
		}
		//header("location:trangchu.php?action=19&hoten=$hoten&diachi=$diachi&sdt=$sdt&sotaikhoan=$sotaikhoan");
}
}
?>
