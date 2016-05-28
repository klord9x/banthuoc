 <link rel="stylesheet" type="text/css" href="Style/hotro.css">
 <?php	         
   			include("ketnoi.php");
?>
 <div class="Hotro">         
            <div class="Tieude_Hotro">HỖ TRỢ</div><!--Tieude_danhmuc-->  
            
            <!--<?php
			      $sql="Select * from lienhe";
				  $result=mysql_query($sql);
				  while($d=mysql_fetch_array($result))
				  {
			?>
             <ul>
                <li><?php echo $d['TenHT']; ?>:<div class="sdt"><?php echo $d['SDT']; ?></div></li>
             </ul>
             <?php 
				  }
			?>-->
            </div>
            
            <div class="imght"><img src="images/hotline.jpg" width="180" height="50"/>
            </br>
            <iframe frameborder="0" marginwidth="0" marginheight="0" src="http://thienduongweb.com/tool/weather/?size=160&fsize=12&bg=images/bg.png&repeat=repeat-x&r=1&w=1&g=1&col=1&d=0" width="180" height="350" scrolling="no"></iframe> <br/>
            <br/>
           <b> <?php include("useronline.php");?></b>
		<body>
   <script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",40208]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
 </body> tags
            </div>
