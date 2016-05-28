<?php
        //session_start();
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		$user = $_SESSION['User'];
		echo 'Xin chào '.$_SESSION['User']."<br/>";
       	$sql = "select * from khachhang where idkhachhang = 5";
		$taikhoan = mysql_query($sql);
		$dong = mysql_fetch_array($taikhoan);
		$idtk = $dong['idtaikhoan'];
?>
<div class="reg">
<fieldset style="width:550px;">
        <legend> Trang sửa thông tin tài khoản</legend>
        <form action="xuly.php" method="POST">
          <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
                        Tên đăng nhập :
                    </td>
                    <td>
                        <input type="text" name="txtUsername" value="<?php echo $dong["tentaikhoan"]?>" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type="password" name="txtPassword" value="<?php echo $dong["Pass"]?>" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input type="text" name="txtEmail" size="50" value="<?php echo $dong["email"]?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họ và tên :
                    </td>
                    <td>
                        <input type="text" name="txtFullname" size="50" value="<?php echo $dong["hoten"]?>" />
                    </td>
                </tr>
                <tr>
                  <td>Số điện thoại</td>
                  <td><input type="text" name="sdt" id="sdt" size="50" value="<?php echo $dong["dienthoai"]?>" /></td>
                </tr>
				<tr>
                  <td>Địa chỉ</td>
                  <td><input type="text" name="DC" id="DC" size="50" value="<?php echo $dong["diachi"]?>" /></td>
                </tr>
                <tr>
                    <td>
                        Ngày sinh :
                    </td>
                    <td>
                        <input type="text" name="txtBirthday" size="50" value="<?php echo $dong["ngaysinh"]?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Giới tính :
                    </td>
                    <td>
                        <select name="txtSex">
                            <option value=""></option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Sửa" />
            <input type="reset" value="Nhập lại" />
</form>
</fieldset>
</div>