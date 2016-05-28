<link rel="stylesheet" type="text/css" href="Style/danhmuc.css">
<?php	         
   			include("ketnoi.php");
			mysql_query("SET NAMES 'utf8'");
?>
<div class="danhmuc">
           		
            <div class="Tieude_danhmuc">DANH MỤC </div><!--Tieude_danhmuc-->
			 <!--<ul>
			    <li><img src="images/arrow-clip-art-right-arrow.jpg" width="9px" height="9px" /><a href="?go=danhmucsanpham&id=0">  Tất cả</li>
            </ul>-->	
            <?php
			       $sql="Select * from nhacungcap";
				   $result=mysql_query($sql);
				   while($d=mysql_fetch_array($result))
				   {
			?>
              <ul>
                <li><img src="images/arrow-clip-art-right-arrow.jpg" width="9px" height="9px"/><a href="?go=danhmucsanpham&id=<?php echo $d['idnhacungcap']; ?>">    <?php echo $d['Tennhacungcap']; ?></a></li>
             </ul>
             <?php
				   }
			 ?>
           </div>