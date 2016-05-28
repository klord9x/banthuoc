<?php
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
       	$sql = "select * from sanpham where idsanpham = '$_GET[idsp]'";
		$sanpham = mysql_query($sql);
		$dong = mysql_fetch_array($sanpham);
		$id = $dong['idsanpham'];
?>
<form action="module/hanghoa/xuly2.php?idsp=<?php echo $dong["idsanpham"]?>" method="post">
<div class="left">
<table width="499" border="0">
    <tr>
    <td colspan="3"><div align="left"><strong>SỬA THÔNG TIN SẢN PHẨM</strong></div></td>
  </tr>
  <tr>
		<td>Tên sản phẩm</td>
							<td><input type="text" name="Tensanpham" value="<?php echo $dong["Tensanpham"]?>"></td>
	  </tr>
						<tr>
							<?php
						      $sql = "select * from nhacungcap";
							  $nhasx = mysql_query($sql); 
						?>
							<td>Nhà sản xuất</td>
							<td><select name="id">
                            <?php
							while($dong_nhasx = mysql_fetch_array($nhasx)){
							?><option value="<?php echo $dong_nhasx['idnhacungcap']?>"><?php echo $dong_nhasx['Tennhacungcap']?></option>
                            <?php
							}
							?>
                            </select></td>
						</tr>
						<tr>
							<td>Thành phần</td>
							<td><input type="text" name="cauhinh" value="<?php echo $dong["Thanhphancotrongsanpham"]?>"></td>
						</tr>
						<tr>
							<td>Số đăng ký</td>
							<td><input type="text" name="kichthuoc"value="<?php echo $dong["Sodangky"]?>"></td>
						</tr>
						<!--<tr>
							<td>Giá</td>
							<td><input type="text" name="ketnoi" value="<?php echo $dong["Ketnoi"]?>"></td>
						</tr>-->
                        <tr>
							<td>Hình ảnh</td>
							<td><input type="text" name="bonho" value="<?php echo $dong["Hinhanh"]?>"></td>
						</tr>
                        <tr>
							<td>Ngày sản xuất</td>
							<td><input type="date" name="phukien" value="<?php echo $dong["Ngaysanxuat"]?>"></td>
						</tr>
                        <tr>
							<td>Lô sản xuất</td>
							<td><input type="text" name="baohanh" value="<?php echo $dong["Losanxuat"]?>"></td>
						</tr>
                        <tr>
							<td>Ngày hết hạn</td>
							<td>
                            <input type="date" name="ngayhethan" value="<?php echo $dong["Ngayhethan"]?>">
                            </td>
						</tr>
                        <tr>
							<td>Số lượng còn</td>
							<td><input type="text" name="ngaythem" value="<?php echo $dong["Soluongcon"]?>"></td>
						</tr>
      <tr>
		<td>Giá</td>
							<td><input type="number" name="gia"value="<?php echo $dong["Gia"]?>"></td>
	  </tr>
  <tr>
    <td><input type="submit" name="sua" id="sua" value="Sửa" /></td>
    <td width="105">&nbsp;</td>
    <td width="123"><input type="submit" name="reset" id="reset" value="Nhập lại" /></td>
  </tr>
</table>
</div>
</form>