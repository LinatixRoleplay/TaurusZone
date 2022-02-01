<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']))
{
	$user_ses = $_SESSION['User'];

	$dbm = $con->prepare("SELECT * FROM `usuarios` WHERE `Username` = :usuario");
	$dbm->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
	$dbm->execute();
	

	$num_rows = $dbm->rowCount();
	
	if($num_rows > 0)
	{
		while($row = $dbm->fetch())
		{
			$faccionjugador = $row['Faccion'];
			
			if($row['Rango'] < 8)
			{
				if($faccionjugador != 0)
				{			
					$sql_2 = $con->prepare("INSERT INTO `action_queue` (`faccj`, `user_ses`, `status`, `Fecha`, `type`) VALUES (:faccju, :userses, '0', NOW(), '4')");
					$sql_2->bindParam(':faccju', $faccionjugador, PDO::PARAM_INT);
					$sql_2->bindParam(':userses', $user_ses, PDO::PARAM_STR);
					$sql_2->execute();
					
					
					$sql_3 = $con->prepare("UPDATE `usuarios` SET `Faccion` = '0', `Rango` = '0' WHERE `Username` = :userses");
					$sql_3->bindParam(':userses', $user_ses, PDO::PARAM_STR);
					$sql_3->execute();
					
					
					echo "<script>window.location='cuenta.php';</script>";
					return 0;
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
		}
	}
	else 
	{
		echo "<script>window.location='logout.php';</script>";
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