﻿<link rel="stylesheet" type="text/css" href="Style/chitietsp.css">
<?php
     if(!isset($_SESSION))
     {
     session_start();
     } 
     $sql = "select * from sanpham where idsanpham = '$_GET[idsp]'";
	 $result=mysql_query($sql);
     $dsp=mysql_fetch_array($result);
?>
<div class="chitiet">
<div class="title">
  <div align="center">
    <blockquote>
      <p>----<strong>Chi tiết sản phẩm</strong>----</p>
    </blockquote>
  </div>
</div><!--end title-->
<div class="all">
    <div class="img">
       <img src="<?php echo $dsp['Hinhanh'];?>" width="200px" height="250px" />
    </div>
    <div class="right">
        <ul>
        <li><font color="#0099FF"><?php echo $dsp['Tensanpham'];?></font></li>
        <li><font color="#CC0000">Giá</font>: <?php echo number_format( $dsp['Gia']);?> VNĐ</li>
        <li><img src="images/cart_1.jpg" width="20" height="17" /><a href="addcart.php?item=<?php echo $dsp['idsanpham']; ?>" id ="dathang" item = "<?php echo $dsp['idsanpham']; ?>">Đặt hàng</a></li>
        <!-- TODO submit form to addcart and redirect to cart. -->
      
 
        </ul>
    </div>
</div>
    <div class="info">
      <ul>
       <li>Công dụng : <?php echo $dsp['Congdung'];?></li>
       <li>Đóng gói : <?php echo $dsp['Donggoi'];?></li>
       <li>Tên nhà cung cấp : <?php echo $dsp['Tennhacungcap'];?></li>
       <li>Thành phần có trong sản phẩm: <?php echo $dsp['Thanhphancotrongsanpham'];?></li>
       <li>Số đăng ký: <?php echo $dsp['Sodangky'];?></li>
       <li>Ngày sản xuất: <?php echo $dsp['Ngaysanxuat'];?></li>
       <li>Ngày hết hạn: <?php echo $dsp['Ngayhethan'];?></li>
       <li>Lô sản xuất: <?php echo $dsp['Losanxuat'];?></li>
       <li>Số lượng còn: <?php echo $dsp['Soluongcon'];?></li>
      </ul>
    </div><!--end info-->
    <div class="spk">
    
    </div>
</div><!--end chitiet-->

<!-- javascript -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#dathang").click(function(){
        event.preventDefault();
        // console.log('this', $(this).attr('item'));
        $.post("addcart.php",
        {
            item: $(this).attr('item'),
            sl: 1
        },
        function(data, status){
            if(status === "success"){
                // alert("Giỏ hàng đã được cập nhật thành công");
                // alert(data);
                $.get("cart.php");
                var data = $.parseJSON(data);
                $("#cart_sl").html(Object.keys(data.cart).length+" món hàng");
                // console.log(Object.keys(data.cart).length);

            }
        });
    });
  });
</script>