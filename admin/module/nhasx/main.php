<?php
   $ac = $_GET['ac'];
   if($ac == "them")
   {
	   include("module/nhasx/them.php");
   }
   else
   {
	   include("module/nhasx/sua.php");
   }
   include("module/nhasx/lietke.php");
?>