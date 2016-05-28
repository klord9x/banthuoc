<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    include("../../../ketnoi.php");
	$idsp = $_GET["idsp"];
    $Tensanpham = $_POST["Tensanpham"];
	$id = $_POST["id"];
	$cauhinh = $_POST["cauhinh"];
	$kichthuoc = $_POST["kichthuoc"];
	$ketnoi = $_POST["ketnoi"];
	$bonho = $_POST["bonho"];
	$phukien = $_POST["phukien"];
	$baohanh = $_POST["baohanh"];
	$ngayhethan = $_POST["ngayhethan"];
	$ngaythem = $_POST["ngaythem"];
	$gia = $_POST["gia"];
	 if(isset($_POST['sua'])){
		$sql = "UPDATE sanpham SET Tensp='$Tensanpham', idsanpham ='$id', Thanhphancotrongsanpham = '$cauhinh', Kichthuoc = '$kichthuoc', Gia = '$ketnoi', Hinhanh = '$bonho', Ngaysanxuat = '$phukien', Losanxuat = '$baohanh', Soluongcon = '$ngaythem', Gia = '$gia', Ngayhethan = '$ngayhethan' where idsp = '$idsp'";
		mysql_query($sql);
		header("location:../../index.php?quanly=sanpham&ac=sua&idsp".$idsp);
	}
?>