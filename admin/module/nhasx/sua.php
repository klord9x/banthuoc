<?php
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
       	$sql = "select * from nhasx where id = '$_GET[id]'";
		$nhasx = mysql_query($sql);
		$dong = mysql_fetch_array($nhasx);
?>

<form action="module/nhasx/xuly.php?id=<?php echo $dong["id"]?>" method="post">
<div class="left">
<table width="470" border="0">
  <tr>
    <td colspan="3"><div align="left"><strong>SỬA THÔNG TIN NHÀ SẢN XUẤT</strong></div></td>
  </tr>
  <tr>
		<td>Tên nhà sản xuất</td>
							<td><input type="text" name="Ten" value="<?php echo $dong["Ten"]?>"></td>
	  </tr>
      <tr>
		<td>Địa chỉ</td>
							<td><input type="text" name="diachi" value="<?php echo $dong["diachi"]?>"></td>
	  </tr>
      <tr>
		<td>Số điện thoại</td>
							<td><input type="text" name="sdt" value="<?php echo $dong["sdt"]?>"></td>
	  </tr>
<tr>						
    <td><input type="submit" name="sua" id="sua" value="Sửa" /></td>
    <td width="105">&nbsp;</td>
    <td width="123"><input type="submit" name="reset" id="reset" value="Nhập lại" /></td>
  </tr>
</table>
</div>
</form>