<?php
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
       	$sql = "select * from footer where id = '$_GET[id]'";
		$noidung = mysql_query($sql);
		$dong = mysql_fetch_array($noidung);
?>
<form action="module/noidung/xuly.php?id=<?php echo $dong["id"]?>" method="post">
<div class="left">
<table width="470" border="0">
  <tr>
    <td colspan="3"><div align="left"><strong>SỬA THÔNG TIN</strong></div></td>
  </tr>
  <tr>
		<td>Địa chỉ</td>
							<td><input type="text" name="diachi" value="<?php echo $dong["diachi"]?>"></td>
	  </tr>
  <tr>	
  <tr>
		<td>Email</td>
							<td><input type="text" name="email" value="<?php echo $dong["Email"]?>"></td>
	  </tr>
  <tr>
  <tr>
    <td>Giới thiệu</td>
    <td><textarea name="gioithieu" cols="30" rows="10"><?php echo $dong["gioithieu"]?></textarea></td>
  </tr>
  <tr>
		<td>Số điện thoại</td>
							<td><input type="text" name="sdt" value="<?php echo $dong["SDT"]?>"></td>
	  </tr>
  <tr>	
    <td><input type="submit" name="sua" id="sua" value="Sửa" /></td>
    <td width="105">&nbsp;</td>
    <td width="123"><input type="submit" name="reset" id="reset" value="Nhập lại" /></td>
  </tr>
</table>
</div>
</form>