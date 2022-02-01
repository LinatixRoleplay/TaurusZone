<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

function validarCadenaRango($cadena)
{ 
	if(strlen($cadena) < 2 || strlen($cadena) > 20)
	{ 
		return false; 
	} 
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ "; 
    for ($i=0; $i<strlen($cadena); $i++)
	{
		if (strpos($permitidos, substr($cadena,$i,1))===false)
		{
			return false; 
		}
    }
    return true; 
}

if(isset($_SESSION['User']) && isset($_GET['j']))
{
	$user_ses = $_SESSION['User'];
	$rango = $_GET['j'];
	$faccii = $_GET['v'];
	
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
			
			if($faccionjugador != $faccii && $rangojugador != 8)
			{
				echo '4';
				return 0;
			}
			
			$cantidad = strlen($rango);
			
			if($cantidad < 3 || $cantidad > 20)
			{
				echo '5';
				return 0;
			}
		
			if(validarCadenaRango($rango) == false)
			{
				echo '5';
				return 0;
			}
			
			$banda = $con->prepare("SELECT * FROM facciones WHERE id = :faccion");
			$banda->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
			$banda->execute();
			

			while($datos = $banda->fetch())
			{
				$rangolibre = 0;
				
				$Rango1 = $datos['Rango1'];
				$Rango2 = $datos['Rango2'];
				$Rango3 = $datos['Rango3'];
				$Rango4 = $datos['Rango4'];
				$Rango5 = $datos['Rango5'];
				$Rango6 = $datos['Rango6'];
				$Rango7 = $datos['Rango7'];
				$Rango8 = $datos['Rango8'];
				
				if ($rango == $Rango1 || $rango == $Rango2 || $rango == $Rango3 || $rango == $Rango4 || $rango == $Rango5 || $rango == $Rango6 || $rango == $Rango7 || $rango == $Rango8) 
				{ 
					echo '3';
					return 0;
				}

				if($Rango2 == null) { $rangolibre = 2; }
				if($Rango3 == null) { $rangolibre = 3; }
				if($Rango4 == null) { $rangolibre = 4; }
				if($Rango5 == null) { $rangolibre = 5; }
				if($Rango6 == null) { $rangolibre = 6; }
				if($Rango7 == null) { $rangolibre = 7; }

				if($rangolibre == 0) 
				{
					echo '2';
					return 0;
				}
				if($rangolibre == 2)
				{
					$agg = $con->prepare("UPDATE `facciones` SET Rango2 = :rango WHERE id = :faccion");
					$agg->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
					$agg->bindParam(':rango', $rango, PDO::PARAM_STR);
					$agg->execute();
					
					
					echo '1';
					return 0;
				}
				if($rangolibre == 3)
				{
					$agg = $con->prepare("UPDATE `facciones` SET Rango3 = :rango WHERE id = :faccion");
					$agg->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
					$agg->bindParam(':rango', $rango, PDO::PARAM_STR);
					$agg->execute();
					
					echo '1';
					return 0;
				}
				if($rangolibre == 4)
				{
					$agg = $con->prepare("UPDATE `facciones` SET Rango4 = :rango WHERE id = :faccion");
					$agg->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
					$agg->bindParam(':rango', $rango, PDO::PARAM_STR);
					$agg->execute();
					
					echo '1';
					return 0;
				}
				if($rangolibre == 5)
				{
					$agg = $con->prepare("UPDATE `facciones` SET Rango5 = :rango WHERE id = :faccion");
					$agg->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
					$agg->bindParam(':rango', $rango, PDO::PARAM_STR);
					$agg->execute();
					
					echo '1';
					return 0;
				}
				if($rangolibre == 6)
				{
					$agg = $con->prepare("UPDATE `facciones` SET Rango6 = :rango WHERE id = :faccion");
					$agg->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
					$agg->bindParam(':rango', $rango, PDO::PARAM_STR);
					$agg->execute();
					
					echo '1';
					return 0;
				}
				if($rangolibre == 7)
				{
					$agg = $con->prepare("UPDATE `facciones` SET Rango7 = :rango WHERE id = :faccion");
					$agg->bindParam(':faccion', $faccionjugador, PDO::PARAM_INT);
					$agg->bindParam(':rango', $rango, PDO::PARAM_STR);
					$agg->execute();
					
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