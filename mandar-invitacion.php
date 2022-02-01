<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']) && isset($_GET['p']) && isset($_GET['f']))
{
	$nombrej = $_GET['p'];
	$faccj = $_GET['f'];
	$user_ses = $_SESSION['User'];
	
	$dbm = $con->prepare("SELECT * FROM `usuarios` WHERE `Username` = :usuario");
	$dbm->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
	$dbm->execute();
	

	$num_rows = $dbm->rowCount();
	
	if($num_rows < 0)
	{
		echo '1';
		return 0;
	}
	else if($num_rows > 0)
	{
		while($row = $dbm->fetch())
		{
			$faccionjugador = $row['Faccion'];
			$rangojugador = $row['Rango'];
			
			if($row['Username'] == $user_ses && $faccionjugador == $faccj && $faccj > 0)
			{
				$banda = $con->prepare("SELECT * FROM facciones WHERE id = :faccion");
				$banda->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
				$banda->execute();
				
				
				while($datos = $banda->fetch())
				{
					$Rango1Inv = $datos['Rango1Inv'];
					$Rango2Inv = $datos['Rango2Inv'];
					$Rango3Inv = $datos['Rango3Inv'];
					$Rango4Inv = $datos['Rango4Inv'];
					$Rango5Inv = $datos['Rango5Inv'];
					$Rango6Inv = $datos['Rango6Inv'];
					$Rango7Inv = $datos['Rango7Inv'];
				
					if
					(
					$rangojugador == 8 || 
					$rangojugador == 1 && $Rango1Inv == 1 || 
					$rangojugador == 2 && $Rango2Inv == 1 || 
					$rangojugador == 3 && $Rango3Inv == 1 || 
					$rangojugador == 4 && $Rango4Inv == 1 || 
					$rangojugador == 5 && $Rango5Inv == 1 ||
					$rangojugador == 6 && $Rango6Inv == 1 ||
					$rangojugador == 7 && $Rango7Inv == 1
					)
					{						
						$dbm2 = $con->prepare("SELECT * FROM `usuarios` WHERE `Username` = :nombre");
						$dbm2->bindParam(':nombre', $nombrej, PDO::PARAM_STR);
						$dbm2->execute();
						
					
						$rows_num = $dbm2->rowCount();
						
						if($rows_num > 0)
						{
							while($row2 = $dbm2->fetch())
							{
								$dbm3 = $con->prepare("SELECT * FROM `facciones` WHERE `id` = :facc");
								$dbm3->bindParam(':facc', $faccj, PDO::PARAM_INT);
								$dbm3->execute();
								
			
								$numrows = $dbm3->rowCount();
								
								if($numrows > 0)
								{
									while($row3 = $dbm3->fetch())
									{
										if($row3['Integrantes'] <= $row3['MaxIntegrantes'])
										{										
											$dbm4 = $con->prepare("SELECT * FROM `invitaciones` WHERE `Invitado` = :nombre AND `BandaID` = :banda");
											$dbm4->bindParam(':nombre', $nombrej, PDO::PARAM_STR);
											$dbm4->bindParam(':banda', $faccj, PDO::PARAM_INT);
											$dbm4->execute();
											
			
											$rowsnum = $dbm4->rowCount();
											
											if($rowsnum <= 0)
											{
												if($row2['Faccion'] == 0)
												{												
													$stmt = $con->prepare("INSERT INTO `invitaciones` (Invitador, Invitado, BandaID) VALUES (:usuario, :nombre, :facc)");
													$stmt->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
													$stmt->bindParam(':nombre', $nombrej, PDO::PARAM_STR);
													$stmt->bindParam(':facc', $faccionjugador, PDO::PARAM_STR);
													$stmt->execute();
													

													echo '5';
													return 0;
												}
												else 
												{
													echo '2';
													return 0;
												}
											}
											else 
											{
												echo '71';
												return 0;
											}
										}
										else 
										{
											echo '46';
											return 0;
										}
									}
								}
								else 
								{
									echo '99';
									return 0;
								}
							}
						}
						else 
						{
							echo '44';
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
				echo '99';
				return 0;
			}
		}
	}
}
else 
{
	echo "<script>window.location='index.php';</script>";
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