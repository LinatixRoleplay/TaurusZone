<?php

session_start(); 
error_reporting(0); 
include_once('./css/index.php');
  
if(isset($_SESSION['User']))
{
   echo "<script>window.location='cuenta.php';</script>";
}
?>

<?php
require("./conectados/samp_query.php");
try
{
    $rQuery = new QueryServer( $serverIP2, $serverPort );

    $aInformation = $rQuery->GetInfo( );
    $aServerRules = $rQuery->GetRules( );
    $aBasicPlayer = $rQuery->GetPlayers( );
    $aTotalPlayers = $rQuery->GetDetailedPlayers( );

    $rQuery->Close( );
}
catch (QueryServerException $pError)
{

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<!-- Anuncio -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1072011961085613",
    enable_page_level_ads: true
  });
</script>
<!-- Anuncio -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<title><?php echo $NombreServidor?> Roleplay - Restablecer contrase&ntildea</title>

<link rel="stylesheet" type="text/css" href="css/estilos3.css"/>

<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />

<link rel="stylesheet" href="./css/style.css"/>

</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

<?php
function validarCadena($cadena)
{ 
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ0123456789"; 
    for ($i=0; $i<strlen($cadena); $i++)
	{
		if (strpos($permitidos, substr($cadena,$i,1))===false)
		{
			return false; 
		}
    }
    return true; 
}
?> 

<tr>

<td width="997">
<?php include("header.php"); ?>
<div id="contenido">
<div id="contenido-izquierdo">

<?php 
	$token = $_GET['tkp'];
	$idusuario = $_GET['oz'];
	
	$aldp = $con->prepare("SELECT * FROM recuperarclave WHERE token = :token");
	$aldp->bindParam(':token', $token, PDO::PARAM_STR);
	$aldp->execute();
	
	
	$num_rows = $aldp->rowCount();
	
	if($num_rows == 1)
	{
		$usuario = $aldp->fetch(PDO::FETCH_ASSOC);

		$hahn = $usuario['username'];

		if( sha1($usuario['idusuario']) == $idusuario )
		{
?>
			<section class="elcontenedor">
				<div class="login">
					<h1><?php echo $Texto_Index_269;?></h1>
						<form method="post">
							<p><input type="password" name="nuevaclave" value="" placeholder="<?php echo $Texto_Index_270;?>."></p>
							<p><input type="password" name="nuevaclave2" value="" placeholder="<?php echo $Texto_Index_271;?>."></p>
							<p><input type="submit" name="submit" value="<?php echo $Texto_Index_272;?>"></p>
						</form>
				</div>
			</section>
<?php 
		}
		else
		{
			echo "<script>window.location='index.php';</script>";
		}
	}
	else
	{
		echo "<script>window.location='index.php';</script>";
	}
?>

<?php 

$submit = $_POST['submit'];
$contranueva = $_POST['nuevaclave'];
$contranueva2 = $_POST['nuevaclave2'];

if($submit)
{
	if($contranueva || $contranueva2)
	{
		if($contranueva == $contranueva2)
		{
			if(validarCadena($contranueva) == true && validarCadena($contranueva2) == true)
			{
				$stmt = $con->prepare("UPDATE usuarios SET Password = :password WHERE Username = :usuario");                              
				$stmt->bindParam(':password', md5($contranueva), PDO::PARAM_STR); 
				$stmt->bindParam(':usuario', $hahn, PDO::PARAM_STR);  
				$stmt->execute();
				
				
				$stm2 = $con2->prepare("UPDATE smf_members SET passwd=SHA1(CONCAT(LOWER(:usuario), :password)) WHERE member_name = :usuario");                              
				$stm2->bindParam(':password', $contranueva, PDO::PARAM_STR); 
				$stm2->bindParam(':usuario', $hahn, PDO::PARAM_STR);  
				$stm2->execute(); 
				
				
				$stm3 = $con->prepare("DELETE FROM recuperarclave WHERE token = :token");                              
				$stm3->bindParam(':token', $token, PDO::PARAM_STR); 
				$stm3->execute(); 
				
				
				echo '<div class="login" style="padding:5px;top:20px;background-color:#06AD00; color:#FFFFFF; width:560px; text-align:center;"><strong>Cambio realizado correctamente.</strong></div>';
				session_destroy();
			}
			else
			{
				echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>No puedes usar caracteres invalidos en la contrase&ntilde;a.</strong></div>';
			}
		}
		else
		{
			echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Las contrase&ntilde;as no son iguales.</strong></div>';
		}
	}
	else
	{
		echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Te faltaron ingresar los datos.</strong></div>';  
	}
}

?>

</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>