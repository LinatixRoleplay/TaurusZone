<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']) && isset($_GET['f']))
{
	$user_ses = $_SESSION['User'];
	$faccj = $_GET['f'];

	$dbm = $con->prepare("SELECT * FROM `invitaciones` WHERE `Invitado` = :usuario AND `BandaID` = :facc");
	$dbm->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
	$dbm->bindParam(':facc', $faccj, PDO::PARAM_INT);
	$dbm->execute();
	

	$num_rows = $dbm->rowCount();

	if($num_rows > 0)
	{		
		$dbm2 = $con->prepare("SELECT * FROM `usuarios` WHERE `Username` = :usuario");
		$dbm2->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
		$dbm2->execute();
		

		$rows_num = $dbm2->rowCount();

		if($rows_num > 0)
		{
			while($row2 = $dbm2->fetch())
			{
				if($row2['Faccion'] == 0)
				{				
					$dbm3 = $con->prepare("SELECT * FROM `facciones` WHERE `id` = :facc");
					$dbm3->bindParam(':facc', $faccj, PDO::PARAM_INT);
					$dbm3->execute();
					

					$numrows = $dbm3->rowCount();

					if($numrows > 0)
					{
						while($row3 = $dbm3->fetch())
						{
							$stmt3 = $con->prepare("SELECT COUNT(Faccion) FROM usuarios WHERE Faccion = :facc");
							$stmt3->bindParam(':facc', $faccj, PDO::PARAM_INT);
							$stmt3->execute();
							
							
							$cantidad_integrantes = $stmt3->fetchColumn();
							
							if($cantidad_integrantes <= $row3['MaxIntegrantes'])
							{
								$sql = $con->prepare("UPDATE `usuarios` SET `Faccion` = :facc, `Rango` = '1' WHERE `Username` = :usuario");
								$sql->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
								$sql->bindParam(':facc', $faccj, PDO::PARAM_INT);
								$sql->execute();
								

								$sql_3 = $con->prepare("DELETE FROM `invitaciones` WHERE `Invitado` = :usuario AND `BandaID` = :facc");
								$sql_3->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
								$sql_3->bindParam(':facc', $faccj, PDO::PARAM_INT);
								$sql_3->execute();
								
								
								
								$sql_4 = $con->prepare("INSERT INTO `action_queue` (`faccj`, `user_ses`, `status`, `Fecha`, `type`) VALUES (:facc, :usuario, '0', NOW(), '1')");
								$sql_4->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
								$sql_4->bindParam(':facc', $faccj, PDO::PARAM_INT);
								$sql_4->execute();
								
								
								echo '5';
								return 0;
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
		}
		else 
		{
			unset($_SESSION['User']);
			session_destroy();
			echo "<script>window.location='ingresar.php';</script>";
			return 0;
		} 
	}
	else 
	{
		echo '1';
		return 0;
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