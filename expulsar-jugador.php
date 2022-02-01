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
				$Rango1Edi = $datos['Rango1Edi'];
				$Rango2Edi = $datos['Rango2Edi'];
				$Rango3Edi = $datos['Rango3Edi'];
				$Rango4Edi = $datos['Rango4Edi'];
				$Rango5Edi = $datos['Rango5Edi'];
				$Rango6Edi = $datos['Rango6Edi'];
				$Rango7Edi = $datos['Rango7Edi'];
				
				if($rangojugador == 8 || $rangojugador == 1 && $Rango1Edi == 1 || $rangojugador == 2 && $Rango2Edi == 1 || $rangojugador == 3 && $Rango3Edi == 1 || $rangojugador == 4 && $Rango4Edi == 1 || $rangojugador == 5 && $Rango5Edi == 1 || $rangojugador == 6 && $Rango6Edi == 1 || $rangojugador == 7 && $Rango7Edi == 1)
				{
					$dbm2 = $con->prepare("SELECT * FROM `usuarios` WHERE `Username` = :usuario");
					$dbm2->bindParam(':usuario', $jugname, PDO::PARAM_STR);
					$dbm2->execute();
					

					$rows_num = $dbm2->rowCount();

					if($rows_num > 0)
					{
						while($row2 = $dbm2->fetch())
						{
							if($faccionjugador == $row2['Faccion'])
							{
								if($rangojugador > $row2['Rango'])
								{
									$sql = $con->prepare("UPDATE `usuarios` SET `Faccion` = '0', `Rango` = '0', `Duty` = '0' WHERE `Username` = :user");
									$sql->bindParam(':user', $jugname, PDO::PARAM_STR);
									$sql->execute();
									
									
									$sql_3 = $con->prepare("INSERT INTO `action_queue` (`faccj`, `user_ses`, `jugname`, `status`, `Fecha`, `type`) VALUES (:facc, :usuario, :jugadores, '0', NOW(), '3')");
									$sql_3->bindParam(':facc', $faccionjugador, PDO::PARAM_INT);
									$sql_3->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
									$sql_3->bindParam(':jugadores', $jugname, PDO::PARAM_STR);
									$sql_3->execute();
									
									
									echo '5';
									return 0;
								}
								else 
								{
									echo '4';
									return 0;
								}
							}
							else 
							{
								echo '3';
								return 0;
							}
						}
					}
					else 
					{
						echo '2';
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