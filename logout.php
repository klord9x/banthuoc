<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php session_start();
 
if (isset($_SESSION['User'])){
    unset($_SESSION['User']); // xóa session login
}
header("location:index.php")
?>
