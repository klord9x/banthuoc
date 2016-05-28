<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Style/tintuc.css">
<?php 
include("ketnoi.php");
 ?>
<div class="main">
<?php
   $sql = "select * from tintuc ";
   $result=mysql_query($sql);
   while($d_tt=mysql_fetch_array($result))
 {
?>
<div class="tieude"><?php echo $d_tt['tenbaiviet']; ?></div>
<div class="noidung"><?php echo $d_tt['noidung']; ?></div>
<?php
}
?>
</div>