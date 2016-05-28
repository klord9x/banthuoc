<?php
if(!isset($_SESSION))
{
session_start();
} 

         if(isset($_GET['go'])){
          $tam = $_GET['go'];
	     }
		 		 else
		 {
			 $tam = "";
		 }
          if($tam == "gioithieu")
		   {
			   include("Gioithieu.php");
		   }
		  else if($tam == "dangnhap")
		   {
			   if (isset($_SESSION['User']) && $_SESSION['User']){
				   echo 'Bạn đã đăng nhập';
			   }
			   else{
			   include("login.php");
			   }
		   }
		   else if($tam == "dangky")
		   {
			   include("reg.php");
		   }
		  else if($tam == "lienhe")
		    {
				include("lienhe.php");
			}
		  else if($tam == "chitietsanpham")
		    {
				include("chitietsanpham.php");
			}
		  else if($tam == "dathang")
		  {
			  include("cart.php");
		  }
		  else if($tam == "taikhoan")
		  {
			  include("thontintk.php");
		  }
		  else if($tam == "timkiem")
		  {
			  include("timkiem.php");
		  }
		  else if($tam == "dkdathang")
		  {
			  include("dangki_muahang.php");
		  }
                  else if($tam == "tintuc")
                  {
                          include("tintuc.php");
                   }
	      else
		   {
			   include("danhmucsanpham.php");
		   }
	

?>