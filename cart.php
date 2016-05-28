<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if(!isset($_SESSION))
{
session_start();
} 
if(isset($_POST['submit']))
{
	//var_dump($_POST['qty']);
	//die('qty');
	//$key = STT sp.
	foreach($_POST['qty'] as $key=>$value)
	{
		if( ($value == 0) and (is_numeric($value)))
		{
			unset ($_SESSION['cart'][$key]);
		}
		elseif(($value > 0) and (is_numeric($value)))
		{
			$_SESSION['cart'][$key]=$value;
		}
	}
	header("location:index.php?go=dathang");
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link rel="stylesheet" href="Style/style.css" />
</head>
<body>
<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$total = 0;
$ok=1;
// var_dump($_SESSION['cart']);
//die('cart seession');
if(isset($_SESSION['cart']))
{
	//TODO for what ???
	foreach($_SESSION['cart'] as $k => $v)
	{
		if(isset($k))
		{
			$ok=2;
		}
	}
}
if($ok == 2)
{


			echo "<form action='cart.php' method='post'>";
			foreach($_SESSION['cart'] as $key=>$value)
			{
				$item[]=$key;
			}
			$str=implode(",",$item);
			$connect=mysql_connect("localhost","root","") or die("Can not connect database");
			mysql_select_db("banthuoc",$connect);
			//TODO Select sanpham with idsanpham in.
			$sql="select * from sanpham where idsanpham in ($str)";
			$query=mysql_query($sql);
			while($row=mysql_fetch_array($query))
			{
				//var_dump($row);
				//die('$row');
			echo "<div class='pro'>";
			echo $ten = "<h3>$row[Tensanpham]</h3>";		
			echo $gia = "Giá: ".number_format($row['Gia'],3)." VND<br />";
			//TODO Check have cart on session:
			$value_sl = ($_SESSION['cart'][$row['idsanpham']])? $_SESSION['cart'][$row['idsanpham']]: 1;
			//var_dump($_SESSION['cart'][$row['idsp']]);
			//die('sl');
			echo $soluong = "<p align='right'>Số lượng: <input type='text' name='qty[$row[idsanpham]]' size='5' value='$value_sl'> - ";
			echo "<a href='delcart.php?productid=$row[idsanpham]'>Xóa sản phẩm</a></p>";
			echo $tongtien = "<p align='right'> Giá tiền: ". number_format($_SESSION['cart'][$row['idsanpham']]*$row['Gia'],3) ." VND</p>";
			echo "</div>";
			$total+=$_SESSION['cart'][$row['idsanpham']]*$row['Gia'];
			}
		echo "<div class='pro' align='right'>";
		echo "<b>Tổng tiền: <font color='red'>".number_format($total,3)." VND</font></b>";
		echo "</div>";
		echo "<input type='submit' name='submit' value='Cập nhật giỏ hàng'>";
		echo "<div class='pro' align='center'>";
		echo "<b><a href='index.php'>Mua tiếp</a> - <a href='delcart.php?productid=0'>Xóa giỏ hàng</a> - <a href = '?go=dkdathang'>Đặt mua</a></b>";
		echo "</div>";
		echo "</form>";
	}

else
	{
		echo "<div class='pro'>";
		echo "<p align='center'>Ban khong co mon hang nao trong gio hang<br /><a href='index.php'>Trở lại</a></p>";
		echo "</div>";
	}
?>

</body>
</html>