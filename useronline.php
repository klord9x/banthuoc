<fieldset>
<?php
include("ketnoi.php");
if(isset($REMOTE_ADDR)){
          $tam = $REMOTE_ADDR;
	     }
		  else
		 {
			 $tam = "";
		 }
if(isset($PHP_SELF)){
          $temp = $PHP_SELF;
	     }
		  else
		 {
			 $temp = "";
		 }
$tg=time();
$tgout=900;
$tgnew=$tg - $tgout;
$sql="insert into useronline(tgtmp,ip,local) values('$tg','$tam','$temp')";
$query=mysql_query($sql);
$sql="delete from useronline where tgtmp < $tgnew";
$query=mysql_query($sql);
$sql="SELECT DISTINCT ip FROM useronline WHERE local='$temp'";
$query=mysql_query($sql);
$user = mysql_num_rows($query);
echo "Số người online :$user";
?>
</fieldset>