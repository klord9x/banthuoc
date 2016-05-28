<?php
           $tenmaychu = "localhost";
		   $tentaikhoa = "root";
		   $matkhau = "";
		   $csdl = "ban_dt";
		   $con = mysql_connect($tenmaychu, $tentaikhoa, $matkhau);
		   mysql_select_db($con, $csdl);
?>