<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if(!isset($_SESSION))
{
session_start();
} 

include("ketnoi.php");
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['user']);
    $password = addslashes($_POST['pass']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    //$password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysql_query("SELECT idquantri, user, pass FROM quantrivien WHERE user='$username'");
    if (mysql_num_rows($query) == 0)
	{
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysql_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['pass']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
	//$_SESSION['idquantri'] = $idtk;
    $_SESSION['user'] = $username;
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='index.php'>Về trang chủ</a>";
    die();
}
?>
<div class="login">
<fieldset style="width:300px">

<legend>Đăng nhập</legend>
<form action="login.php?do=login" method="post">
<table width="299" border="0">  <tr>
    <td width="92">Username</td>
    <td width="191"><input type="text" name="user" id="user"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="pass" id="pass"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="dangnhap" id="dangnhap" value="Đăng nhập">
    </div></td>
  </tr>
</table>
</form>
</fieldset>
</div>