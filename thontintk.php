<?php
        session_start();
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		$user = $_SESSION['User'];
       	$sql = "select user.idtk from user where User = '$user'";
		$taikhoan = mysql_query($sql);
		$dong = mysql_fetch_array($taikhoan);
		$idtk = $dong['idtk'];
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
                        <input type="text" name="txtUsername" value="<?php echo $dong["User"]?>" size="50" />
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
                        <input type="text" name="txtFullname" size="50" />
                    </td>
                </tr>
                <tr>
                  <td>Số điện thoại</td>
                  <td><input type="text" name="sdt" id="sdt" size="50"/></td>
                </tr>
                <tr>
                    <td>
                        Ngày sinh :
                    </td>
                    <td>
                        <input type="text" name="txtBirthday" size="50" />
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