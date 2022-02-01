<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']) && isset($_GET['j']))
{
	$user_ses = $_SESSION['User'];
	$jugname = $_GET['j'];
	
	$dbm = $con->prepare("SELECT * FROM `usuarios` WHERE `Username` = :usuario");
	$dbm->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
	$dbm->execute();
	
	
	$num_rows = $dbm->rowCount();
	
	if($num_rows > 0)
	{
		while($row = $dbm->fetch())
		{
			$faccionjugador = $row['Faccion'];
			$rangojugador = $row['Rango'];

			$banda = $con->prepare("SELECT * FROM facciones WHERE id = :faccion");
			$banda->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
			$banda->execute();
			

			while($datos = $banda->fetch())
			{			
				if($rangojugador == 8)
				{
					if($jugname == 7)
					{
						$banda2 = $con->prepare("UPDATE `facciones` SET Rango7=NULL WHERE id=:faccion");
						$banda2->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
						$banda2->execute();
						
						
						echo '5';
						return 0;
					}
					if($jugname == 6)
					{
						$banda2 = $con->prepare("UPDATE `facciones` SET Rango6=NULL WHERE id=:faccion");
						$banda2->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
						$banda2->execute();
						
						
						echo '5';
						return 0;
					}
					if($jugname == 5)
					{
						$banda2 = $con->prepare("UPDATE `facciones` SET Rango5=NULL WHERE id=:faccion");
						$banda2->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
						$banda2->execute();
						
						
						echo '5';
						return 0;
					}
					if($jugname == 4)
					{
						$banda2 = $con->prepare("UPDATE `facciones` SET Rango4=NULL WHERE id=:faccion");
						$banda2->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
						$banda2->execute();
						
						
						echo '5';
						return 0;
					}
					if($jugname == 3)
					{
						$banda2 = $con->prepare("UPDATE `facciones` SET Rango3=NULL WHERE id=:faccion");
						$banda2->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
						$banda2->execute();
						
						
						echo '5';
						return 0;
					}
					if($jugname == 2)
					{
						$banda2 = $con->prepare("UPDATE `facciones` SET Rango2=NULL WHERE id=:faccion");
						$banda2->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
						$banda2->execute();
						
						
						echo '5';
						return 0;
					}
				}
				else 
				{
					echo '1';
					return 0;
				}
			}
		}
	}
	else 
	{
		echo "<script>window.location='index.php';</script>";
		return 0;
	}
}
else 
{
	echo "<script>window.location='index.php';</script>";
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