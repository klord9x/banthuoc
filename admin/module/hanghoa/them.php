<form action="module/hanghoa/xuly.php" method="post" enctype="multipart/form-data">
<div class="left">
<table width="470" border="0">
  <tr>
    <td colspan="3"><div align="left"><strong>THÊM MỚI SẢN PHẨM</strong></div></td>
  </tr>
  <tr>
		<td>Tên sản phẩm</td>
							<td><input type="text" name="Tensanpham"></td>
	  </tr>
						<tr>
                        <?php
						      $sql = "select * from nhasx";
							  $nhasx = mysql_query($sql); 
						?>
							<td>Nhà sản xuất</td>
							<td><select name="id">
                            <?php
							while($dong_nhasx = mysql_fetch_array($nhasx)){
							?><option value="<?php echo $dong_nhasx['id']?>"><?php echo $dong_nhasx['Ten']?></option>
                            <?php
							}
							?>
                            </select></td>
						</tr>
						
						<tr>
							<td>Công dụng</td>
							<td><input type="text" name="congdung"></td>
						</tr>
						<tr>
							<td>Thành phần có trong sản phẩm</td>
							<td><input type="text" name="thanhphancotrongsanphan"></td>
						</tr>
                        <tr>
							<td>Lô sản xuất</td>
							<td><input type="text" name="losanxuat"></td>
						</tr>
                        <tr>
							<td>Hình ảnh</td>
							<td><input type="text" name="hinhanh"></td>
						</tr>
                        <tr>
							<td>Số lượng còn</td>
							<td><input type="text" name="soluongcon"></td>
						</tr>
                        <tr>
							<td>Quản lý</td>
							<td>
                            <input type="file" name="quanly">
                            </td>
						</tr>
                        <tr>
							<td>Ngày thêm</td>
							<td><input type="date" name="ngaythem"></td>
						</tr>
      <tr>
		<td>Giá</td>
							<td><input type="number" name="gia"></td>
	  </tr>
  <tr>
    <td><input type="submit" name="them" id="them" value="Thêm" /></td>
    <td width="105">&nbsp;</td>
    <td width="123"><input type="submit" name="reset" id="reset" value="Nhập lại" /></td>
  </tr>
</table>
</div>
</form>