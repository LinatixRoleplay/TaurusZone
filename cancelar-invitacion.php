<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']) && isset($_GET['f']))
{
	$faccj = $_GET['f'];
	$user_ses = $_SESSION['User'];
	
	$dbm = $con->prepare("SELECT * FROM `invitaciones` WHERE `Invitado` = :usuario");
	$dbm->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
	$dbm->execute();
	

	$num_rows = $dbm->rowCount();
	
	if($num_rows > 0)
	{
		while($row = $dbm->fetch())
		{
			if($row['BandaID'] == $faccj)
			{
				$stmt = $con->prepare("DELETE FROM `invitaciones` WHERE `Invitado` = :usuario AND `BandaID` = :faccion");
				$stmt->bindParam(':usuario', $user_ses, PDO::PARAM_STR);
				$stmt->bindParam(':faccion', $faccj, PDO::PARAM_INT);
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