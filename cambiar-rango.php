<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']) && isset($_GET['j']) && isset($_GET['r']))
{
	$jugname = $_GET['j'];
	$newrank = $_GET['r'];
	$user_ses = $_SESSION['User'];

	$dbm = $con->prepare("SELECT * FROM `usuarios` WHERE `Username` = :usuario");
	$dbm->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
	$dbm->execute();
	
	
	$num_rows = $dbm->rowCount();
	
	if($newrank < 1 || $newrank > 8) 
	{
		echo "<script>window.location='index.php';</script>";
	}
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
				
				if($faccionjugador > 0)
				{
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
								if($row2['Faccion'] == $faccionjugador)
								{
									if($rangojugador >= $newrank)
									{
										if($rangojugador > $row2['Rango'])
										{
											$exrank = $row2['Rango'];
											$userlider = $row2['Username'];

											$sql = $con->prepare("UPDATE `usuarios` SET `Rango` = :nuevorango WHERE `Username` = :user");
											$sql->bindParam(':nuevorango', $newrank, PDO::PARAM_INT);
											$sql->bindParam(':user', $jugname, PDO::PARAM_STR);
											$sql->execute();
											

											if($rangojugador >= 8 && $newrank >= 8)
											{												
												$sql_2 = $con->prepare("UPDATE `usuarios` SET `Rango` = :nuevorango WHERE `Username` = :user");
												$sql_2->bindParam(':nuevorango', $exrank, PDO::PARAM_INT);
												$sql_2->bindParam(':user', $user_ses, PDO::PARAM_STR);
												$sql_2->execute();
												
												
												if($faccionjugador > 1)
												{													
													$sql_3 = $con->prepare("UPDATE `facciones` SET `Lider` = :lider WHERE `id` = :facc");
													$sql_3->bindParam(':lider', $userlider, PDO::PARAM_STR);
													$sql_3->bindParam(':facc', $faccj, PDO::PARAM_INT);
													$sql_3->execute();
													
												}
											}		

											
											$sql_4 = $con->prepare("INSERT INTO `action_queue` (`faccj`, `user_ses`, `jugname`, `status`, `Fecha`, `type`, `queue_params`) VALUES (:facc, :user, :jugador, '0', NOW(), '2', :nuevorango)");
											$sql_4->bindParam(':facc', $faccionjugador, PDO::PARAM_INT);
											$sql_4->bindParam(':user', $user_ses, PDO::PARAM_STR);
											$sql_4->bindParam(':jugador', $jugname, PDO::PARAM_STR);
											$sql_4->bindParam(':nuevorango', $newrank, PDO::PARAM_INT);
											$sql_4->execute();
											
											
											echo '7';
											return 0;
										}
										else 
										{
											echo '6';
											return 0;
										}
									}
									else 
									{
										echo '5';
										return 0;
									}
								}
								else 
								{
									echo '4';
									return 0;
								}
							}
						}
						else 
						{
							echo '3';
							return 0;
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
		die();
	}
}
else 
{
	echo "<script>window.location='index.php';</script>";
	die();
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