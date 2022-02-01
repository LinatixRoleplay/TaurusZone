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

		$st = $con->prepare("SELECT * FROM `prendas` WHERE UserID = :usuario AND `Web`='0'");
		$st->bindParam(':usuario', $IDUser, PDO::PARAM_INT);
		$st->execute();
		
		
		$nums = $st->rowCount();
		
		if($nums == 4)
		{
			echo "3";
			return 0;
		}

	}
}

$stm = $con->prepare("SELECT * FROM `prendas` WHERE ID=:prenda AND UserID =:user AND `Web`= '1'");
$stm->bindParam(':user', $IDUser, PDO::PARAM_INT);
$stm->bindParam(':prenda', $p, PDO::PARAM_INT);
$stm->execute();


$rows = $stm->rowCount();

if($rows > 0)
{

//////////////////////////////////////////////////
$slot_libre = 0;
// Buscar Slot 1
$slot_1 = $con->prepare("SELECT * FROM `prendas` WHERE Slot=1 AND UserID=:user");
$slot_1->bindParam(':user', $IDUser, PDO::PARAM_INT); 
$slot_1->execute();

$sl_1 = $slot_1->rowCount();
if($sl_1 == 0)
{
	if($slot_libre == 0)
	{
		$slot_libre = 1;
	}
}
// Buscar Slot 2
$slot_2 = $con->prepare("SELECT * FROM `prendas` WHERE Slot=2 AND UserID=:user");
$slot_2->bindParam(':user', $IDUser, PDO::PARAM_INT); 
$slot_2->execute();

$sl_2 = $slot_2->rowCount();
if($sl_2 == 0)
{
	if($slot_libre == 0)
	{
		$slot_libre = 2;
	}
}
// Buscar Slot 3
$slot_3 = $con->prepare("SELECT * FROM `prendas` WHERE Slot=3 AND UserID=:user");
$slot_3->bindParam(':user', $IDUser, PDO::PARAM_INT); 
$slot_3->execute();

$sl_3 = $slot_3->rowCount();
if($sl_3 == 0)
{
	if($slot_libre == 0)
	{
		$slot_libre = 3;
	}
}
// Buscar Slot 4
$slot_4 = $con->prepare("SELECT * FROM `prendas` WHERE Slot=4 AND UserID=:user");
$slot_4->bindParam(':user', $IDUser, PDO::PARAM_INT); 
$slot_4->execute();

$sl_4 = $slot_4->rowCount();
if($sl_4 == 0)
{
	if($slot_libre == 0)
	{
		$slot_libre = 4;
	}
}
//////////////////////////////////////////////////

	$stm = $con->prepare("UPDATE prendas SET Web=0,Slot=:slots WHERE ID = :prenda");
	$stm->bindParam(':slots', $slot_libre, PDO::PARAM_INT);
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