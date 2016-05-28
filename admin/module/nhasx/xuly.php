<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    include("../../../ketnoi.php");
	$Ten = $_POST["Ten"];
	$diachi  = $_POST["diachi"];
	$sdt = $_POST["sdt"];
	$id = $_GET["id"];
	if(isset($_POST['them'])){
		if($_POST['Ten']==NULL){
			echo 'Không được để trống dữ liệu';
		}
		else{
	       $sql=mysql_query("INSERT INTO nhasx VALUE('','".$_POST['Ten']."','".$_POST['diachi']."','".$_POST['sdt']."')");
		            if($sql) echo'Thêm dữ liệu thành công';
					else echo'Thêm dữ liệu thất bại';
	}
	header("location:../../index.php?quanly=nhasx&ac=them");
	}
	else if(isset($_POST['sua'])){
		$sql = "UPDATE nhasx SET Ten='$Ten', diachi ='$diachi', sdt = '$sdt'  where id = '$id'";
		mysql_query($sql);
		header("location:../../index.php?quanly=nhasx&ac=sua&id".$id);
	}
		else
	{
		$sql = "delete from nhasx where id = '$id'";
		mysql_query($sql);
		header("location:../../index.php?quanly=nhasx&ac=them");
	}
?>

	
