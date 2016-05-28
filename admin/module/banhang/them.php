<form action="module/banhang/xuly.php" method="post">
<div class="left">
<table width="329" border="0">
  <tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" name="ten" id="ten"></td>
  </tr>
  <tr>
              <?php
						      $sql = "select * from nhasx";
							  $nhasx = mysql_query($sql); 
						?>
							<td>Nhà sản xuất</td>
							<td><select name="idnsx">
                            <?php
							while($dong_nhasx = mysql_fetch_array($nhasx)){
							?><option value="<?php echo $dong_nhasx['id']?>"><?php echo $dong_nhasx['Ten']?></option>
                            <?php
							}
							?>
                            </select></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="sl" id="sl"></td>
  </tr>
  <tr>
    <td>Tổng tiền</td>
    <td><input type="text" name="tt" id="tt"></td>
  </tr>
  <tr>
    <td>Ngày nhập</td>
    <td><input type="date" name="ngaynhap" id="ngaynhap"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" id="them" value="Thêm">
      <input type="submit" name="reset" id="reset" value="Nhập lại">
    </div></td>
  </tr>
</table>
</div>
</form>
