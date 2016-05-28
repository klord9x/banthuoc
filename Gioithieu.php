<div class="gioithieu">
<?php
   $sql = "select * from footer";
   $gioithieu  = mysql_query($sql);
   while($dong = mysql_fetch_array($gioithieu)){
	   ?>
       <pre><i><strong><?php echo $dong["gioithieu"]?></strong></i></pre>
       
       <?php
       }
	   ?>
</div>