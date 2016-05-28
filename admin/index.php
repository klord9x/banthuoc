
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang quản trị nội dung</title>
</head>

<body>
  <?php
  if(!isset($_SESSION))
  {
   session_start();
  }
	   if (isset($_SESSION['user']) && $_SESSION['user']){
	   echo 'Xin chào '.$_SESSION['user']."<br/>";
	   echo '<a href="logout.php">Đăng xuất</a>';		
	   include("../ketnoi.php");
       include("module/banner.php");
	   include("module/menu.php");
	   include("module/content.php");
	   include("module/footer.php");

		   }
	   else{
	   header("location:login.php");
	   	   }

?>

</body>
</html>