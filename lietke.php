<?php
          include("ketnoi.php");
          $sql = "select * from sanpham";
		  $sanpham  = mysql_query($sql);
?>
<div class="right">
<table width="1025" height="110" border="1">
  <tr>
    <td width="31"><div align="center"><strong>ID</strong></div></td>
    <td width="101"><div align="center"><strong>Tên sản phẩm</strong></div></td>
    <td width="101"><div align="center"><strong>Nhà sản xuất</strong></div></td>
    <td width="87"><div align="center"><strong>Cấu hình</strong></div></td>
    <td width="89"><div align="center"><strong>Kích thước</strong></div></td>
    <td width="60"><div align="center"><strong>Kết nối</strong></div></td>
    <td width="58"><div align="center"><strong>Bộ nhớ</strong></div></td>
    <td width="74"><div align="center"><strong>Phụ kiện</strong></div></td>
    <td width="80"><div align="center"><strong>Bảo hành</strong></div></td>
    <td width="65"><div align="center"><strong>Hình ảnh </strong></div></td>
    <td width="67"><div align="center"><strong>Ngày thêm</strong></div></td>
    <td width="48"><div align="center"><strong>Giá</strong></div></td>
    <td colspan="2"><div align="center"><strong>Quản lý</strong></div>      <div align="center"></div></td>
  </tr>
  <?php
       while($dong = mysql_fetch_array($sanpham)){
  ?>
  <tr>
    <td><div align="center"><?php echo $dong["idsp"]?></div></td>
    <td><div align="center"><?php echo $dong["Tensp"]?></div></td>
    <td><div align="center"><?php echo $dong["id"]?></div></td>
    <td><?php echo $dong["Cauhinh"]?></td>
    <td><?php echo $dong["Kichthuoc"]?></td>
    <td><?php echo $dong["Ketnoi"]?></td>
    <td><?php echo $dong["Bonho"]?></td>
    <td><?php echo $dong["Phukien"]?></td>
    <td><?php echo $dong["Baohanh"]?></td>
    <td><img src="../../../images/Sanpham/<?php echo $dong["Hinhanh"]; ?>" width="70" height="100" border="0" alt="Hình ảnh sản phẩm"/></td>
    <td><?php echo $dong["Ngaythem"]?></td>
    <td><?php echo $dong["Gia"]?></td>
    <td width="34"><div align="center"><a href="index.php?quanly=sanpham&ac=sua&idsp=<?php echo $dong["idsp"]?>">Sửa</a></div></td>
    <td width="42"><div align="center"><a href="module/hanghoa/xuly.php?xoa=mathang&idsp=<?php echo $dong["idsp"]?>">Xóa</a></div></td>
  </tr>
 <?php
	   }
 ?>
</table>
</div>