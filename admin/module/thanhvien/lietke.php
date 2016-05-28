 <?php

 error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
 $sql = "select * from user";
 $thanhvien  = mysql_query($sql);
 ?>
 <table width="1010" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên đăng nhập</div></td>
    <td><div align="center">Mật khẩu</div></td>
    <td><div align="center">Họ tên</div></td>
    <td><div align="center">Ngày sinh</div></td>
    <td><div align="center">Email</div></td>
    <td><div align="center">Điện thoại</div></td>
    <td><div align="center">Giới tính</div></td>
    <td><div align="center">Quản lý</div></td>
  </tr>
  <?php
       while($dong = mysql_fetch_array($thanhvien)){
  ?>
  <tr>
    <td><div align="center"><?php echo $dong["Idtk"]?></div></td>
    <td><div align="center"><?php echo $dong["User"]?></div></td>
    <td><div align="center"><?php echo $dong["Pass"]?></div></td>
    <td><div align="center"><?php echo $dong["hoten"]?></div></td>
    <td><div align="center"><?php echo $dong["ngaysinh"]?></div></td>
    <td><div align="center"><?php echo $dong["email"]?></div></td>
    <td><div align="center"><?php echo $dong["dienthoai"]?></div></td>
    <td><div align="center"><?php echo $dong["Gioitinh"]?></div></td>
    <td><div align="center"><a href="module/thanhvien/xuly.php?xoa=thanhvien&id=<?php echo $dong["Idtk"]?>">Xóa</div></td>
  </tr>
  <?php
	   }
  ?>
</table>
