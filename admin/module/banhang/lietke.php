<?php
 error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
 $sql = "select * from phieunhap";
 $phieunhap  = mysql_query($sql);
?>
<table width="524" border="1">
  <tr>
    <td width="32"><div align="center"><strong>ID</strong></div></td>
    <td width="68"><div align="center"><strong>Nhà sản xuất</strong></div></td>
    <td width="67"><div align="center"><strong>Tên sản phẩm</strong></div></td>
    <td width="76"><div align="center"><strong>Số lượng</strong></div></td>
    <td width="72"><div align="center"><strong>Tổng tiền</strong></div></td>
    <td width="80"><div align="center"><strong>Ngày nhập</strong></div></td>
    <td width="83"><div align="center"><strong>Quản lý</strong></div></td>
  </tr>
  <?php
       while($dong = mysql_fetch_array($phieunhap)){
  ?>
  <tr>
    <td><div align="center"><?php echo $dong["id"]?></div></td>
    <td><div align="center"><?php echo $dong["idnsx"]?></div></td>
    <td><div align="center"><?php echo $dong["ten"]?></div></td>
    <td><div align="center"><?php echo $dong["soluong"]?></div></td>
    <td><div align="center"><?php echo $dong["tongtien"]?></div></td>
    <td><div align="center"><?php echo $dong["ngaynhap"]?></div></td>
    <td><div align="center"><a href="module/banhang/xuly.php?xoa=phieunhap&id=<?php echo $dong["id"]?>">Xóa</div></td>
  </tr>
  <?php
	   }
	   ?>
</table>
