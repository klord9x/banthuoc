<?php
    $Tensanpham = $_POST["Tensanpham"];
	$id = $_POST["id"];
	$cauhinh = $_POST["cauhinh"];
	$kichthuoc = $_POST["kichthuoc"];
	$ketnoi = $_POST["ketnoi"];
	$bonho = $_POST["bonho"];
	$phukien = $_POST["phukien"];
	$baohanh = $_POST["baohanh"];
	$ngaythem = $_POST["ngaythem"];
	$gia = $_POST["gia"];
    include("../../../ketnoi.php");
	$idsp = $_GET["idsp"];
	if(isset($_POST['them'])){
			$tenanh = $_FILES["anh"]["name"];
               if($tenanh != "")
			   {
				$time = date("Ymdhis");
				$tenanh = $time . $tenanh;
				$dich = "../../../images/Sanpham" . $tenanh;
				copy($_FILES["anh"]["tmp_name"],$dich);
				$dich = substr($dich,9);
				
			   }
			   /*$sql = "INSERT INTO sanpham(id, Tensanpham, Cauhinh, Kichthuoc, Ketnoi, Bonho, Phukien, Baohanh, Hinhanh, Ngaythem, Gia) VALUE ('$id','$cauhinh','$kichthuoc','$ketnoi','$bonho,'$phukien','$baohanh','$dich','$ngaythem','$gia')";*/
	       $sql=mysql_query("INSERT INTO sanpham VALUE('','".$_POST['id']."','".$_POST['Tensanpham']."','".$_POST['cauhinh']."','".$_POST['kichthuoc']."','".$_POST['ketnoi']."','".$_POST['bonho']."','".$_POST['phukien']."','".$_POST['baohanh']."',
		   '".$_POST['dich']."','".$_POST['ngaythem']."','".$_POST['gia']."')");
		            if($sql) echo'Thêm dữ liệu thành công';
					else echo'Thêm dữ liệu thất bại';
			
	
	header("location:../../index.php?quanly=sanpham&ac=them");
	}
	/*else if(isset($_POST['sua'])){
		$sql = "UPDATE sanpham SET id='$id', Tensanpham='$Tensanpham', Cauhinh='$cauhinh', Kichthuoc='$kichthuoc', Ketnoi='$ketnoi', Bonho='$bonho', Phukien='$phukien', Baohanh='$baohanh', Ngaythem='$ngaythem', Gia='$gia' where idsp = '$idsp'";
		mysql_query($sql);
		header("location:../../index.php?quanly=sanpham&ac=sua&id".$idsp);
	}*/
	else
	{
		$sql = "delete from sanpham where idsp = '$idsp'";
		mysql_query($sql);
		header("location:../../index.php?quanly=sanpham&ac=them");
	}
?>

	
