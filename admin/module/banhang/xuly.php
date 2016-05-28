<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    include("../../../ketnoi.php");
	$ten = $_POST["ten"];
	$idnsx  = $_POST["idnsx"];
	$sl = $_POST["sl"];
	$tt = $_POST["tt"];
	$ngaynhap = $_POST["ngaynhap"];
	$id = $_GET['id'];
	if(isset($_POST['them'])){

	       $sql=mysql_query("INSERT INTO phieunhap VALUE('','".$_POST['idnsx']."','".$_POST['ten']."','".$_POST['sl']."','".$_POST['tt']."','".$_POST['ngaynhap']."')");
		            if($sql) echo'Thêm dữ liệu thành công';
					else echo'Thêm dữ liệu thất bại';
	
	header("location:../../index.php?quanly=banhang&ac=them");
	}

	
	else
	{
		$sql = "delete from phieunhap where id = '$id'";
		mysql_query($sql);
		header("location:../../index.php?quanly=banhang&ac=them");
	}
?>

	
