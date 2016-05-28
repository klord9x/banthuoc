<?php	    
        session_start();
  		include("ketnoi.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link a href="Style/index.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/main.js"></script>
<title>CHĂM SÓC SỨC KHỎE ONLINE </title>
</head>

<body>

<div class="wrapper">

    <div class="header">
    
         <div class="banner">
         <img src="images/bannobanthuoc.jpg" width="1024" height="250" />
         </div><!--- end banner-->
         
         <div class="menu_top"> 
               <?php
			        include("Menu_top.php");
               ?>
         </div><!--- menu_top-->
         
    </div><!--- header-->
    
    <div class="content">
	
         <div class="menu_left">
         <?php
       if (isset($_SESSION['User']) && $_SESSION['User']){
           echo 'Xin chào '.$_SESSION['User']."<br/>";
		   echo '<a href="?go=taikhoan&idtk">Thông tin cá nhân</a>'."<br/>";
           echo '<a href="logout.php">Đăng xuất</a>';
       }
       else{
           echo 'Bạn chưa đăng nhập';
       }
if (isset($_SESSION['User']) && $_SESSION['User'])
{
$ok=1;
 if(isset($_SESSION['cart']))
 {
  foreach($_SESSION['cart'] as $k=>$v)
  {
   if(isset($v))
   {
   $ok=2;
   }
  }
 }
 if ($ok != 2)
  {
  echo '<p>Chưa có hàng trong giỏ</p>';
 } else {
  $items = $_SESSION['cart'];
  echo '<p>Đang có <a href="?go=dathang">'.count($items).' món hàng</a> trong giỏ</p>';

 }
}
else
{
	unset($_SESSION['cart']);
}
?>
      
         <?php
		      include("Danhmuc.php");
         ?>
         <?php
		      include("Hotro.php");
         ?>       
         </div><!--- end menu_left-->
      <div class="main_content">
	
                <?php 
				   include("duongdan.php");
                ?>
      </div><!--- end main_content-->
    </div><!--- end content-->
    
  <div class="footer">
  <?php include("footer.php");?>
    </div><!--- end footer-->
    
</div><!--- end wrapper-->
</body>
</html>