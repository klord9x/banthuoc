<?php
       include("ketnoi.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Style/sanpham.css">
<div class="content_sanpham">
       <?php
	   if(isset($_GET['id'])){
          $tam = $_GET['id'];
	     }
		  else
		 {
			 $tam = "";
		 }
		 if($tam == 0)
		 {
			 $sql="Select * from sanpham";
		 }
		 else
		 {
			  $id=$_GET["id"];
			  $sql="Select * from sanpham where id='$id'";
		 }

				   $result=mysql_query($sql);
				   while($d_sp=mysql_fetch_array($result))
				   {
		?>
         <div class="main_content_sp">
                <div class="content_img">
                    <img src=<?php echo $d_sp['Hinhanh']; ?> width="160" height="180" border="0" alt="Hình ảnh sản phẩm"/>
                </div><!--end content_img-->
                <div class="content_info">
                       <a href="?go=chitietsanpham&idsp=<?php echo $d_sp['idsp']; ?>&id=<?php echo $d_sp['id']?>"><?php echo $d_sp['Tensp']; ?></a> <br/>
                        <?php echo number_format( $d_sp['Gia']); ?> VNĐ
                </div><!--end content_info-->

         </div><!--end main_content-->
          <?php
		  }
          ?>
</div><!--end content_sanpham-->