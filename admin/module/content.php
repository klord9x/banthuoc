<div id="content">
<?php
     if(isset($_GET['quanly']))
	 {
     $tam = $_GET['quanly'];
	 }
	 else
	 {
		 $tam = "";
	 }
	 if($tam == "sanpham")
	 {
		 include("module/hanghoa/main.php");
	 }
	 else if($tam == "nhasx")
	 {
		 include("module/nhasx/main.php");
	 }
	 else if($tam == "noidung")
	 {
		 include("module/noidung/main.php");
	 }
	 else if($tam == "thanhvien")
	 {
		 include("module/thanhvien/main.php");
	 }
	 else if($tam == "banhang")
	 {
		 include("module/banhang/main.php");
	 }
?>
</div>