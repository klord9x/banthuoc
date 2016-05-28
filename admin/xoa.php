<?php
if(!isset($_SESSION))
{
session_start();
}
			   if (isset($_SESSION['username']) && $_SESSION['username']){
				   include("index.php");
			   }
			   else{
			   include("login.php");
			   } 
?>