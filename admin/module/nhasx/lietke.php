<?php
          $sql = "select * from nhasx";
		  $nhasx  = mysql_query($sql);
?>
<div class="right">
<table width="923" height="110" border="1">
  <tr>
    <td width="154"><div align="center"><strong>ID</strong></div></td>
    <td width="351"><div align="center"><strong>Tên nhà sản xuất</strong></div></td>
    <td width="136"><div align="center"><strong>Địa chỉ</strong></div></td>
    <td width="134"><div align="center"><strong>Số điện thoại</strong></div></td>
    <td colspan="2"><div align="center"><strong>Quản lý</strong></div>      <div align="center"></div></td>
  </tr>
  <?php
       while($dong = mysql_fetch_array($nhasx)){
  ?>
  <tr>
    <td><div align="center"><?php echo $dong["id"]?></div></td>
    <td><div align="center"><?php echo $dong["Ten"]?></div></td>
    <td width="136"><div align="center"><?php echo $dong["diachi"]?></div></td>
    <td width="134"><div align="center"><?php echo $dong["sdt"]?></div></td>
    <td width="59"><div align="center"><a href="index.php?quanly=nhasx&ac=sua&id=<?php echo $dong["id"]?>">Sửa</a></div></td>
    <td width="49"><div align="center"><a href="module/nhasx/xuly.php?xoa=mansx&id=<?php echo $dong["id"]?>">Xóa</a></div></td>
  </tr>
 <?php
	   }
 ?>
</table>
</div>