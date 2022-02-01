<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']))
{
    $User = $_SESSION['User'];
	
	$stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
	$stmt->bindParam(':usuario', $User, PDO::PARAM_STR); 
	$stmt->execute();
	
    while($datos = $stmt->fetch())
	{
		$ID = $datos['ID'];
    }
} 
else echo "<script>window.location='ingresar.php';</script>";

if(!@$_GET['s'] < 300 && !@$_GET['s'] > -1)
{
	echo "1";
	return 0;
}

$stm = $con->prepare("SELECT * FROM usuarios WHERE ID = :id");
$stm->bindParam(':id', $ID, PDO::PARAM_INT); 
$stm->execute();

$num_rows = $stm->rowCount();

if($num_rows > 0)
{
	while($dato = $stm->fetch())
	{
		$Moneda = $dato['Moneda'];
		$member_name = $dato['Username'];
		$Skin = $_GET['s'];
		
		if($dato['Online'] == 1)
		{
			echo "4";
			return 0;
		}
		if(@$_GET['s'] == 271 || @$_GET['s'] == 272 || @$_GET['s'] == 269)
		{
			$Precio = 10;
			if($dato['Moneda'] < 10)
			{
				echo "2";
				return 0;
			}
		}
		else
		{
			$Precio = 5;
			if($dato['Moneda'] < 5)
			{
				echo "3";
				return 0;
			}
		}
		
		$st = $con->prepare("UPDATE usuarios SET Skin = :skin, Moneda = :moneda-:precio WHERE ID = :id");   
		$st->bindParam(':skin', $Skin, PDO::PARAM_INT); 
		$st->bindParam(':moneda', $Moneda, PDO::PARAM_INT); 
		$st->bindParam(':precio', $Precio, PDO::PARAM_INT); 
		$st->bindParam(':id', $ID, PDO::PARAM_INT); 
		$st->execute(); 
		
		$avatar = 'personajes/'.$Skin.'.png';
		
		$st2 = $con2->prepare("UPDATE `smf_members` SET `avatar` = :avatar WHERE `member_name` = :member_name");   
		$st2->bindParam(':avatar', $avatar, PDO::PARAM_STR); 
		$st2->bindParam(':member_name', $member_name, PDO::PARAM_STR); 
		$st2->execute(); 
		
		echo "5";
		return 0;
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