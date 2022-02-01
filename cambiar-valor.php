<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']) && isset($_GET['r']) && isset($_GET['v']))
{
	$rango = $_GET['r'];
	$valor = $_GET['v'];
	$User = $_SESSION['User'];

	$dbm = $con->prepare("SELECT * FROM `usuarios` WHERE `Username` = :usuario");
	$dbm->bindParam(':usuario', $User, PDO::PARAM_STR);
	$dbm->execute();
	

	$num_rows = $dbm->rowCount();
	
	if($num_rows > 0)
	{
		while($row = $dbm->fetch())
		{
			$faccionjugador = $row['Faccion'];
			$rangojugador = $row['Rango'];
			
			if($faccionjugador > 0)
			{
				if($rangojugador == 8)
				{
				// Rango 6
					if($rango == 19)
					{
						if($valor == 1) 
						{
							$sql = $con->prepare("UPDATE `facciones` SET `Rango7Inv`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango7Inv`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 20)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango7Exp`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{
							$sql = $con->prepare("UPDATE `facciones` SET `Rango7Exp`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 21)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango7Edi`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{
							$sql = $con->prepare("UPDATE `facciones` SET `Rango7Edi`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					// Rango 6
					if($rango == 16)
					{
						if($valor == 1) 
						{
							$sql = $con->prepare("UPDATE `facciones` SET `Rango6Inv`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT);
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango6Inv`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 17)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango6Exp`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{
							$sql = $con->prepare("UPDATE `facciones` SET `Rango6Exp`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 18)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango6Edi`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{
							$sql = $con->prepare("UPDATE `facciones` SET `Rango6Edi`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					// Rango 5
					if($rango == 1)
					{
						if($valor == 1) 
						{
							$sql = $con->prepare("UPDATE `facciones` SET `Rango5Inv`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango5Inv`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 2)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango5Exp`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{
							$sql = $con->prepare("UPDATE `facciones` SET `Rango5Exp`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 3)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango5Edi`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{
							$sql = $con->prepare("UPDATE `facciones` SET `Rango5Edi`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					// Rango 4
					if($rango == 4)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango4Inv`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango4Inv`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 5)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango4Exp`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango4Exp`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 6)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango4Edi`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango4Edi`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					// Rango 3
					if($rango == 7)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango3Inv`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango3Inv`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 8)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango3Exp`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango3Exp`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 9)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango3Edi`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango3Edi`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					// Rango 2
					if($rango == 10)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango2Inv`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango2Inv`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 11)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango2Exp`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango2Exp`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 12)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango2Edi`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango2Edi`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					// Rango 1
					if($rango == 13)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango1Inv`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango1Inv`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 14)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango1Exp`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango1Exp`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
					}
					if($rango == 15)
					{
						if($valor == 1) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango1Edi`=0 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
						}
						if($valor == 0) 
						{ 
							$sql = $con->prepare("UPDATE `facciones` SET `Rango1Edi`=1 WHERE id = :facc");
							$sql->bindParam(':facc', $faccionjugador, PDO::PARAM_INT); 
							$sql->execute();
							
							echo '3'; return 0; 
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