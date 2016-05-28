<?php
          $sql = "select * from sanpham";
		  $sanpham  = mysql_query($sql);
?>
<div class="right">
<table width="1088" height="110" border="1">
  <tr>
    <td width="33"><div align="center"><strong>ID</strong></div></td>
    <td width="107"><div align="center"><strong>Tên sản phẩm</strong></div></td>
    <td width="107"><div align="center"><strong>Nhà sản xuất</strong></div></td>
    <td width="92"><div align="center"><strong>Công dụng</strong></div></td>
    <td width="94"><div align="center"><strong>Thành phần có trong sản phẩm</strong></div></td>
    <td width="63"><div align="center"><strong>Lô sản xuất</strong></div></td>
    <td width="87"><div align="center"><strong>Hình ảnh </strong></div></td>
    <td width="82"><div align="center"><strong>Ngày thêm</strong></div></td>
    <td width="53"><div align="center"><strong>Giá</strong></div></td>
    <td width="50"><div align="center"><strong>Số lượng còn</strong></div> 
	<td colspan="2"><div align="center"><strong>Quản lý</strong></div>      <div align="center"></div></td>
  </tr>
  <?php
       while($dong = mysql_fetch_array($sanpham)){
  ?>
  <tr>
    <td><div align="center"><?php echo $dong["idsanpham"]?></div></td>
    <td><div align="center"><?php echo $dong["Tensanpham"]?></div></td>
    <!--<td><div align="center"><?php echo $dong["id"]?></div></td>-->
    <td><?php echo $dong["Tennhacungcap"]?></td>
    <td><?php echo $dong["Congdung"]?></td>
    <td><?php echo $dong["Thanhphancotrongsanpham"]?></td>
    <td><?php echo $dong["Losanxuat"]?></td>
    <td><img src="../<?php echo $dong["Hinhanh"]; ?>" width="100" height="140" border="0" alt="Hình ảnh sản phẩm"/></td>
    <td><?php echo $dong["Ngaysanxuat"]?></td>
    <td><div align="center"><?php echo $dong["Gia"]; ?></div></td>
    <td><?php echo $dong["Soluongcon"]?></td>
    <td width="35"><div align="center"><a href="index.php?quanly=sanpham&ac=sua&idsp=<?php echo $dong["idsanpham"]?>">Sửa</a></div></td>
    <td width="37"><div align="center"><a href="module/hanghoa/xuly.php?xoa=mathang&idsp=<?php echo $dong["idsanpham"]?>">Xóa</a></div></td>
  </tr>
 <?php
	   }
 ?>
</table>
</div>