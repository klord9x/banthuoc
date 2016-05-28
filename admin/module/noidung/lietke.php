
 <?php
 $sql = "select * from footer";
 $gioithieu  = mysql_query($sql);
 ?>
 <table width="573" border="1">
  <tr>
    <td width="116"><div align="center">Địa chỉ</div></td>
    <td width="108"><div align="center">Email</div></td>
    <td width="205"><div align="center">Giới thiệu</div></td>
    <td width="116"><div align="center">Số điện thoại</div></td>
    <td width="116"><div align="center">Quản lý</div></td>
  </tr>
  <?php
       while($dong = mysql_fetch_array($gioithieu)){
  ?>
  <tr>
    <td><?php echo $dong['diachi']?></td>
    <td><?php echo $dong['Email']?></td>
    <td><?php echo $dong['gioithieu']?></td>
    <td><?php echo $dong['SDT']?></td>
    <td><div align="center"><a href="index.php?quanly=noidung&ac=sua&id=<?php echo $dong["id"]?>">Sửa</a></div></td>
  </tr>
  <?php
	   }
	   ?>
</table>
 