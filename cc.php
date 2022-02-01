<?php

session_start();
error_reporting(0);
include_once('./css/index.php');

if(isset($_SESSION['User']))
{
    $User = $_SESSION['User'];
	try
	{
		$stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
		$stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
		$stmt->execute();
		

		while($datos = $stmt->fetch())
		{
			$name = $datos['Username'];
			$password = $datos['Password'];
			$money = $datos['Money'];
			$validarcorrero = $datos['CorreoValido'];
			$cambiacorreo = $datos['CambiaCorreo'];
			$correoacambiar = $datos['CorreoACambiar'];
			$tiempocorreo = $datos['TiempoCorreo'];
			$email = $datos['Email'];
			$score = $datos['Nivel'];
			$fz = $datos['Moneda'];
			$ropa = $datos['Skin'];
			$platabanco = $datos['Banco'];
			$faccion = $datos['Faccion'];
			$razon = $datos['razon'];
			$ban = $datos['Baneado'];
			$Conexion = $datos['Conexion'];
			$estaonline = $datos['Online'];
		}
	}
	catch(PDOException $e)
	{
		echo 'Error: ' . $e->getMessage();
	}
}

else echo "<script>window.location='ingresar.php';</script>";
$dinerototal = $money+$platabanco;

if($Conexion == '1')
{
	echo "<script>window.location='reg.php?u=2';</script>";
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

$tucuentaAC = "-ac";
$mcc = "actual1";
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
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title><?php echo $NombreServidor?> Roleplay - <?php include_once('./kev/idioma.php'); echo $Texto_Index_226;?></title>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css"> 
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<link rel="stylesheet" href="./css/style.css">
<script src="./js/jquery-latest2.js"></script>
<style>DIV#loader.loading{background:url(./imagenes/iconos/spinner.gif) no-repeat center center;}#loader{width:300px;height:344px;background-color:#000000}#negro{background-color:#FFFFFF;width:300px;border:solid 1px #DEDEDE;padding:3px;margin-top:5px;margin-left:15px;margin-bottom:5px;float:left;}.skinid{border:solid 1px #DEDEDE;font-size:11px;width:20px;margin:3px 3px 0 3px;padding:3px}.botonskin{border:solid 1px #DEDEDE;font-size:11px;margin:3px 3px 0 3px;padding:2px;background-color:#FFFFFF;cursor:pointer}.bloquederecho{float:left;width:345px;}.bloq{background-color:#FFFFFF;border:solid 1px #DEDEDE;margin:5px;padding:5px;}body{ font-size: 1px;}</style>
</head>
<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

<tbody><tr>
<td width="997">

<?php include("header.php"); ?>

<div id="contenido">
<div id="contenido-izquierdo">

<?php

function validarCadena($cadena)
{ 
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ0123456789-_@."; 
    for ($i=0; $i<strlen($cadena); $i++)
	{
		if (strpos($permitidos, substr($cadena,$i,1))===false)
		{
			return false; 
		}
    }
    return true; 
}

$submit			= $_POST['commit'];
$contraactual	= $_POST['vieja'];
$contranueva	= $_POST['nueva'];
$contranueva2	= $_POST['nueva2'];
$hashedPassword	= md5($contraactual);

if($submit)
{
	if($estaonline == 0)
	{
		if($contraactual || $contranueva || $contranueva2)
		{
			if($hashedPassword == $password)
			{
				if($contranueva == $contranueva2)
				{
					if(validarCadena($contraactual) == true && validarCadena($contranueva) == true && validarCadena($contranueva2) == true)
					{
						$stmt = $con->prepare("UPDATE usuarios SET Password = :password WHERE Username = :usuario");
						$stmt->bindParam(':password', md5($contranueva), PDO::PARAM_STR);
						$stmt->bindParam(':usuario', $name, PDO::PARAM_STR);
						$stmt->execute();
						

						$stm2 = $con2->prepare("UPDATE smf_members SET passwd=SHA1(CONCAT(LOWER(member_name), :password)) WHERE member_name = :usuario");
						$stm2->bindParam(':password', $contranueva, PDO::PARAM_STR);
						$stm2->bindParam(':usuario', $name, PDO::PARAM_STR);
						$stm2->execute();
						

						echo '<div class="login" style="padding:5px;top:20px;background-color:#06AD00; color:#FFFFFF; width:560px; text-align:center;"><strong>Cambio realizado correctamente</strong></div>';
						session_destroy();
					}
					else
					{
						echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>No puedes usar caracteres invalidos en la contrase&ntilde;a</strong></div>';
					}
				}
				else
				{
					echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Las contrase&ntilde;as no son iguales</strong></div>';
				}
			}
			else
			{
				echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>La contrase&ntilde;a actual ingresada no es correcta</strong></div>';
			}
		}
		else
		{
			echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Te faltaron ingresar los datos.</strong></div>';
		}
	}
	else
	{
		echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:667px; text-align:center;"><strong>Tienes que estar desconectado para cambiarte la contrase&ntilde;a.</strong></div>';
	}
}
else
{
	echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>'.$Texto_Index_230.' ';?><?php echo $NombreServidor?><?php echo ', '.$Texto_Index_231.'.</strong></div>';
}

?>

<section class="elcontenedor">

<div class="login">

<h1><?php echo $Texto_Index_226;?></h1>

<form method="post" name="cambio" autocomplete="off">

<input name="viejaa" type="password" maxlength="30" placeholder="<?php echo $Texto_Index_227;?>" style="display:none" autocomplete="off">
<input name="cambiar" type="hidden" value="1" >
<p><input name="vieja" type="password" maxlength="30" placeholder="<?php echo $Texto_Index_227;?>" autocomplete="off"></p>
<p><input name="nueva" type="password" maxlength="30" placeholder="<?php echo $Texto_Index_228;?>" autocomplete="off"></p>
<p><input name="nueva2" type="password" maxlength="30" placeholder="<?php echo $Texto_Index_229;?>" autocomplete="off"></p>
<p><input type="submit" name="commit" value="<?php echo $Texto_Index_226;?>"></p>

</form>

</div>

</section>

</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>