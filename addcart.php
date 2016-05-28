
<?php
session_start();
// var_dump($_POST);
// die('POST');
$id=$_POST['item'];
$sl=$_POST['sl'];
if (isset($_SESSION['User']) && $_SESSION['User'])
{
if(isset($_SESSION['cart'][$id]))
{
 $qty = $_SESSION['cart'][$id] +1;
}
else
{
 $qty=1;
}
$_SESSION['cart'][$id]=$qty;
echo json_encode($_SESSION);
// header("location:cart.php");
}
else
{
	header("location:index.php?go=dangnhap");
}
exit();
?>