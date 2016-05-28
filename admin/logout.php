<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php session_start();
 
if (isset($_SESSION['user'])){
    unset($_SESSION['user']); // xóa session login
}
header("location:index.php")
?>
