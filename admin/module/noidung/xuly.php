<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    include("../../../ketnoi.php");
	$diachi = $_POST["diachi"];
	$email  = $_POST["email"];
	$gioithieu = $_POST["gioithieu"];
	$sdt = $_POST["sdt"];
	$id = $_GET["id"];
	if(isset($_POST['sua'])){
		$sql = "UPDATE footer SET diachi='$diachi', Email ='$email', gioithieu = '$gioithieu', SDT = '$sdt'  where id = '$id'";
		mysql_query($sql);
		header("location:../../index.php?quanly=noidung&ac=sua&id".$id);
	}
?>