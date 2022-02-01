<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']))
{ 
    $User = $_SESSION['User'];
	$stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
	$stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
	$stmt->execute();
	

	while($row = $stmt->fetch())
    { 
        $name = $row['Username'];
        $money = $row['Money'];
		$idplayer = $row['ID'];
		$validarcorrero = $row['CorreoValido'];
		$cambiacorreo = $row['CambiaCorreo'];
		$correoacambiar = $row['CorreoACambiar'];
		$tiempocorreo = $row['TiempoCorreo'];
		$email = $row['Email'];
        $score = $row['Nivel'];
		$fz = $row['Moneda'];
		$ropa = $row['Skin'];
		$platabanco = $row['Banco'];
		$faccion = $row['Faccion'];
		$Online = $row['Online'];
		$ent_totem = $row['ent_totem'];
		$razon = $row['razon'];
		$ban = $row['Baneado'];
		$Conexion = $row['Conexion'];
    } 
} 
//else header('location: ingresar.php');
else echo "<script>window.location='ingresar.php';</script>";
$dinerototal = $money+$platabanco;

if($Conexion == '1')
{
	//header('location: reg.php?u=2');
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
<title><?php echo $NombreServidor?> Roleplay - <?php include_once('./kev/idioma.php'); echo $Texto_Index_53;?></title>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<script src="./js/jquery-latest2.js"></script>

<style>
label{display:inline-block;width:5em;}
.ui-tooltip{padding:5px;position:absolute;z-index:9999;max-width:300px;-webkit-box-shadow:0 0 5px #aaa;box-shadow:0 0 5px #aaa;background-color:#FFC;border:1px #999999 solid;}
body .ui-tooltip{border-width:1px;}.progress-label{float:left;text-align:center;margin-top:2px;width:100%;text-shadow:1px 1px 0 #fff;}
.texto-barra{float:left;margin-top:3px;text-align:center;text-shadow:1px 1px 0 #FFFFFF;width:100%;}
.ui-barra{background:url("imagenes/fondo-barra2.png") repeat-x scroll 50% 50% #CCCCCC;color:#222222;border:1px solid #AAAAAA;font-weight:bold;}
.fondo-barra{border-radius:4px;border:1px solid #AAAAAA;color:#222222;height:20px;overflow:hidden;text-align:left;float:left;width:93%}
.totem-16{width:16px;height:16px;background-image:url(imagenes/iconos/totemx16.png);float:left;margin-left:5px;margin-top:2px;}
.totem-si{width:16px;height:16px;background-image:url(imagenes/iconos/si.png);float:left;margin-left:5px;margin-top:2px;}
.totem-no{width:16px;height:16px;background-image:url(imagenes/iconos/no.png);float:left;margin-left:5px;margin-top:2px;}
.totem-gif{width:16px;height:16px;background-image:url(imagenes/iconos/spinner.gif);float:left;margin-left:5px;margin-top:2px;}
.usuario-td{color:#003366;font-size:12px;}</style>


</head>
<body>
<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
 
<tbody><tr>
<td width="997">
<?php include("header.php"); ?>
<div id="contenido">
<div id="contenido-izquierdo">

<div style="background-image:url(./imagenes/invitar-amigo-bg.png); width:653px; height:419px;margin-left: 15px;margin-top: 12px;">
<div style=" font-size:16px; color:#000000;text-shadow: 0 1px 0 #FFFFFF;font-weight: bold;margin-left: 25px;margin-top: 15px; float:left;width: 100%;"><?php echo $Texto_Index_53;?></div>
<div style="float:left;width: 94%; margin-left:20px; margin-top:160px; font-size:12px;">
<table width="100%" cellpadding="4">
<tbody><tr style="font-size:15px; color:#036;text-shadow: 0 1px 0 #FFFFFF;font-weight: bold;">
<td width="33%" align="center"><?php echo $Texto_Index_256;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td width="36%" align="center"><?php echo $Texto_Index_257;?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td width="30%" align="center"><?php echo $Texto_Index_258;?></td></tr>
<tr><td valign="top"><div style="width:180px"><font size="2px"><?php echo $Texto_Index_250;?>.</div></td><td valign="top">
<div style="width:190px"> <font size="2px"><?php echo $Texto_Index_251;?>:
<!-- <hr><font size="2px"> * <?php echo $Texto_Index_252;?> -->
<hr><font size="2px"> * <?php echo $Texto_Index_253;?>
<!-- <hr><font size="2px"> * <?php echo $Texto_Index_254;?>. -->
<!-- <hr><font size="2px"> * <?php echo $Texto_Index_255;?>. -->
</div>
</td><td valign="top"><font size="2px"><?php echo $Texto_Index_259;?>.<br><br><?php echo $Texto_Index_260;?>.</td></tr>
</tbody></table>
</div>
</div>
<div style="background-image:url(./imagenes/enlace-invitacion-bg.png); width:653px; height:93px;margin-left: 15px;">
<div style=" font-size:16px; color:#000000;text-shadow: 0 1px 0 #FFFFFF;font-weight: bold;margin-left: 25px;margin-top: 15px; float:left;width: 100%;"><?php echo $Texto_Index_261;?></div>
<div style="float:left;width: 94%; margin-left:20px; margin-top:5px"><?php echo '<input name="" type="text" value="http://'.$_SERVER['HTTP_HOST'].''.$NombreCarpeta.'/nuevo.php?u='.$idplayer.'" style="font-size:16px; font-family: verdana; color:#000000;text-shadow: 0 1px 0 #FFFFFF; border:1px solid #CCC; padding:5px; width:98%; text-align:center; background-color:#FF9">';?></div>
</div>
<hr>
<div class="td-gr">
<div class="icono-td"><img src="./imagenes/iconos/si.png"></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px"><?php echo $Texto_Index_262;?></div>
<center><hr>

<style type="text/css">.Estilo1 {font-size: 13px}</style>

<?php
	$stm = $con->prepare("SELECT * FROM usuarios WHERE totem = :name");
	$stm->bindParam(':name', $name, PDO::PARAM_STR);
	$stm->execute();
	
	
	$num_rows = $stm->rowCount();

?>

<?php
	if($num_rows == 0)
	{
?>
		<center><strong><hr/><font size="2.5px"><?php echo $Texto_Index_267;?>.<hr/></strong></center>
<?php
	}
	else
	{
?>

<table bgcolor="#CCCCCC" cellspacing="1" width="98%" cellpadding="10">
<tr>
<td bgcolor="#E6E6E6" width="10%"><strong><span class="Estilo1"><?php echo $Texto_Index_263;?></span></strong></td>
<td bgcolor="#E6E6E6" width="22%"><strong><span class="Estilo1"><?php echo $Texto_Index_264;?></span></strong></td>
<td bgcolor="#E6E6E6" width="68%"><strong><span class="Estilo1"><?php echo $Texto_Index_265;?></span></strong> <a href="#" title="<?php echo $Texto_Index_266;?>."><strong><span class="Estilo1">?</span></strong></a></td>
</tr>
<?php
	while($inv_afiliater = $stm->fetch())
	{
		$calc_porciento = (100*$inv_afiliater['Nivel'])/5;
		
		if($calc_porciento > 100) 
		{
			$calc_porciento = 100;
		}
		
		if($calc_porciento == 100 && $inv_afiliater['ent_totem'] == 0 && $Online == 0 && $inv_afiliater['Online'] == 0)
		{
			$state_inv = 'totem-si';

			$st = $con->prepare("UPDATE usuarios SET totems = totems+3 WHERE Username = :name");   
			$st->bindParam(':name', $name, PDO::PARAM_STR); 
			$st->execute();
			

			$stt = $con->prepare("UPDATE usuarios SET ent_totem='1' WHERE Username = :invitado");   
			$stt->bindParam(':invitado', $inv_afiliater['Username'], PDO::PARAM_STR); 
			$stt->execute();
			
		}
		
		else if($calc_porciento == 100 && $inv_afiliater['ent_totem'] == 0 && $Online == 1 || $inv_afiliater['Online'] == 1)
		{
			$state_inv = 'totem-gif';
		}
		
		else if($calc_porciento == 100 && $inv_afiliater['ent_totem'] == 1)
		{
			$state_inv = 'totem-16';
		}
		else
		{
			$state_inv = 'totem-no';
		}
?>
<tr>
<td bgcolor="#FFFFFF" class="usuario-td"><strong><?php echo $inv_afiliater['Username']; ?></strong></td>
<td bgcolor="#FFFFFF" align="center"><span class="Estilo1"><?php echo $inv_afiliater['Registro']; ?></span></td>
<td bgcolor="#FFFFFF"><div class="fondo-barra"><div class="texto-barra"><span class="Estilo1">Certificado de jugador estable</span> <strong><span class="Estilo1"><?php echo round($calc_porciento, 2); ?>%</span></strong><span class="Estilo1"> completado.</span></div><div class="ui-barra" style="height:100%;margin: -1px; width:<?php echo $calc_porciento; ?>%"></div></div>
<div class="<?php echo $state_inv; ?>" title="Cuando esta barra se complete, recibir&aacute;s un totem. Pero para que esto ocurra, el sistema tiene que detectar que tu amigo sea un jugador real y estable."></div></td>
</tr>

<?php
	}
?>

</table>

<?php
	}
?>

<hr></center> </div>
</div>
<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>