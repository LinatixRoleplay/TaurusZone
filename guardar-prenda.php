<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if (!isset($_SESSION['User'])){
    echo "1";
    return 0;
}

$User = $_SESSION['User'];
$p = $_GET['p'];

$stmt = $con->prepare("SELECT * FROM `usuarios` WHERE `Username` = :usuario");
$stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
$stmt->execute();


$num_rows = $stmt->rowCount();

if($num_rows > 0)
{
	while($datos = $stmt->fetch())
	{
		if($datos['Online'] == 1)
		{
			echo "2";
			return 0;
		}
		$IDUser = $datos['ID'];
	}
}
$stm = $con->prepare("SELECT * FROM `prendas` WHERE ID=:prenda AND UserID =:user AND `Web`= '0'");
$stm->bindParam(':prenda', $p, PDO::PARAM_INT);
$stm->bindParam(':user', $IDUser, PDO::PARAM_INT);
$stm->execute();


$rows = $stm->rowCount();

if($rows > 0)
{
	$stm = $con->prepare("UPDATE prendas SET Web=1,Slot=0,ObjUsed=0 WHERE ID = :prenda");
	$stm->bindParam(':prenda', $p, PDO::PARAM_INT);
	$stm->execute();
	
	
	echo "5";
	return 0;
}
else 
{
	echo "3";
	return 0;
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