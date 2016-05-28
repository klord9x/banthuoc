<?php
       include("ketnoi.php");
?>
<link rel="stylesheet" type="text/css" href="Style/footer.css">
<?php
     $sql = "select * from thongtin";
	 $result=mysql_query($sql);
     $d=mysql_fetch_array($result);
?>
<div class="footer">
<ul>
       <li>Địa chỉ: <?php echo $d['diachi'];?></li>
       <li>Email: <?php echo $d['Email'];?></li>
       <li>SDT: <?php echo $d['SDT']; ?></li>
</ul>
</div>