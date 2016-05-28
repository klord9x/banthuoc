<?php

   $ac = $_GET['ac'];
   if($ac == "them")
   {
	   include("module/hanghoa/them.php");
   }
   else
   {
	   include("module/hanghoa/sua.php");
   }
   include("module/hanghoa/lietke.php");
?>