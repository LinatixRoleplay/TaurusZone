<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

$p = $_POST['queryString'];

$pe = strlen($p);

if($pe > 7)
{
	$dbm = $con->prepare('SELECT * FROM usuarios WHERE Username LIKE ?');
	$dbm->bindValue(1, "%$p%", PDO::PARAM_STR);
	
	
	
	$dbm->execute();
	
	while($row = $dbm->fetch())
	{
		echo '<a href="javascript:fill(\''.$row['Username'].'\');"><div class="display_box" align="left"><div style="margin-right:6px;"><b>'.$row['Username'].'</b></div></a>';
	}
}
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104151474-1', 'auto');
  ga('send', 'pageview');

</script>