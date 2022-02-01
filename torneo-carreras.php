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
			$money = $datos['Money'];
			$score = $datos['Nivel'];
			$oz = $datos['Moneda'];
			$ropa = $datos['Skin'];
			$platabanco = $datos['Banco'];
			$faccion = $datos['Faccion'];
			$razon = $datos['razon'];
			$ban = $datos['Baneado'];
			$Conexion = $datos['Conexion'];
			$validarcorrero = $datos['CorreoValido'];
			$cambiacorreo = $datos['CambiaCorreo'];
			$correoacambiar = $datos['CorreoACambiar'];
			$tiempocorreo = $datos['TiempoCorreo'];
			$email = $datos['Email'];
		}
	}
	catch(PDOException $e) 
	{
		echo 'Error: ' . $e->getMessage();
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

<title>Tabla de posiciones - Torneo de carreras - <?php echo $NombreServidor?> Roleplay</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css">

<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />

<style>.ft1{width:300px;float:left;padding:10px;margin-left:35px;}.ft2{width:300px;float:left;padding:10px;}.ft1 img{background-color:#FFFFFF;padding:5px;border:solid 1px #CCCCCC;width:250px;height:150px}.ft2 img{background-color:#FFFFFF;padding:5px;border:solid 1px #CCCCCC;width:250px;height:150px}.datos2{background-color:#FFFFFF;padding:5px;float:left;width:250px;border-left:solid 1px #CCCCCC;border-right:solid 1px #CCCCCC;border-bottom:solid 1px #CCCCCC;}.datos2 span{text-align:right;float:right;font-weight:bold}.ft1 a{background-image:url(imagenes/iconos/carrito.png);background-repeat:no-repeat;height:16px;padding-left:20px;width:0;float:right;overflow:hidden;margin-left:5px;}.ft2 a{background-image:url(imagenes/iconos/carrito.png);background-repeat:no-repeat;height:16px;padding-left:20px;width:0;float:right;overflow:hidden;margin-left:5px;}.verde-btn{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#8DCC35,#459015) repeat scroll 0 0 #459015;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8DCC35',endColorstr='#459015');background:-webkit-gradient(linear,left top,left bottom,from(#8DCC35),to(#459015));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF!important;text-shadow:0 1px 0 rgba(0,0,0,0.3);font-size:15px!important;padding:2px 10px!important;}.verde-btn:hover{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#A2D956,#479815) repeat scroll 0 0 #A2D956;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#A2D956',endColorstr='#479815');background:-webkit-gradient(linear,left top,left bottom,from(#A2D956),to(#479815));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF;text-shadow:0 1px 0 rgba(0,0,0,0.3);}.btn{padding:4px 12px;margin-bottom:0;line-height:20px;text-align:center;vertical-align:middle;cursor:pointer;color:#333333;border-radius:7px}</style>

<style>
.ft1{width:300px;float:left;padding:10px;margin-left:35px;}
.ft2{width:300px;float:left;padding:10px;}
.ft1 img{background-color:#FFFFFF;padding:5px;border:solid 1px #CCCCCC;width:250px;height:150px}
.ft2 img{background-color:#FFFFFF;padding:5px;border:solid 1px #CCCCCC;width:250px;height:150px}
.datos2{background-color:#FFFFFF;padding:5px;float:left;width:250px;border-left:solid 1px #CCCCCC;border-right:solid 1px #CCCCCC;border-bottom:solid 1px #CCCCCC;}
.datos2 span{text-align:right;float:right;font-weight:bold}
.ft1 a{background-image:url(./imagenes/iconos/carrito.png);background-repeat:no-repeat;height:16px;padding-left:20px;width:0;float:right;overflow:hidden;margin-left:5px;}
.ft2 a{background-image:url(./imagenes/iconos/carrito.png);background-repeat:no-repeat;height:16px;padding-left:20px;width:0;float:right;overflow:hidden;margin-left:5px;}
</style>

</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

 

<tbody><tr>

<script async="" src="//www.google-analytics.com/analytics.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16687198-9', 'auto');
  ga('send', 'pageview');

</script>

<td width="997">
<?php include("header.php"); ?>
<div id="contenido">
<div id="contenido-izquierdo">

<div class="td-gr">
<div class="icono-td"><img src="imagenes/iconos/carrera.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Tabla de posiciones - Torneo de carreras LV <!-- - Julio 2016 --></div>
<div style="padding:10px 10px 10px 10px; float:left">
<table width="658" cellspacing="1" cellpadding="8" border="0" bgcolor="#DCDCDC">
<tbody>
<tr>
<?php
		$carrera_1 = $con->prepare("SELECT Username,PuntosCarrera,Skin FROM usuarios ORDER BY PuntosCarrera DESC LIMIT 1");
		$carrera_1->execute();
		
		
		while($datos = $carrera_1->fetch())
		{
			$nombre_1 = $datos['Username'];
			$puntos_1 = $datos['PuntosCarrera'];
			$skin_1 = $datos['Skin'];
		}
		
		$carrera_2 = $con->prepare("SELECT Username,PuntosCarrera,Skin FROM usuarios ORDER BY PuntosCarrera DESC LIMIT 1 OFFSET 1");
		$carrera_2->execute();
		
		
		while($datos2 = $carrera_2->fetch())
		{
			$nombre_2 = $datos2['Username'];
			$puntos_2 = $datos2['PuntosCarrera'];
			$skin_2 = $datos2['Skin'];
		}
		
		$carrera_3 = $con->prepare("SELECT Username,PuntosCarrera,Skin FROM usuarios ORDER BY PuntosCarrera DESC LIMIT 1 OFFSET 2");
		$carrera_3->execute();
		
		
		while($datos3 = $carrera_3->fetch())
		{
			$nombre_3 = $datos3['Username'];
			$puntos_3 = $datos3['PuntosCarrera'];
			$skin_3 = $datos3['Skin'];
		}
?>
<td colspan="2" bgcolor="#FFFFFF" align="center" valign="middle">
<table width="200" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0"><td align="center" valign="middle" width="20" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><font size="2px">1.</td><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><strong><font size="2px"><?php echo $nombre_1?></strong></td></tr>
<tr>
<td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><div style="background-image:url(./imagenes/personajes/<?php echo $skin_1?>.png); background-position:top center; overflow:hidden; width:80px; height:80px"></div></td>
</tr>
<tr class="primertd"><td align="center" colspan="2"><font size="2px"><?php echo $puntos_1?> Puntos <!--(<strong>=</strong>)--></td></tr>
</tbody>
</table>
</td>
</tr>

<tr>

<td bgcolor="#FFFFFF" align="center" valign="middle">
<table width="200" cellspacing="1" cellpadding="5" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr class="segundoytercero" bgcolor="#F0F0F0"><td align="center" valign="middle" width="20" class="primertd" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;">2.</td><td align="left" class="primertd" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><?php echo $nombre_2?></td></tr>
<tr>
<td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><div style="background-image:url(./imagenes/personajes/<?php echo $skin_2?>.png); background-position:top center; overflow:hidden; width:60px; height:60px"></div></td>
</tr>
<tr class="primertd"><td align="center" colspan="2"><font size="2px"><?php echo $puntos_2?> Puntos <!--(<strong>=</strong>)--></td></tr>
</tbody>
</table>
</td>

<td bgcolor="#FFFFFF" align="center" valign="middle">
<table width="200" cellspacing="1" cellpadding="5" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr class="segundoytercero" bgcolor="#F0F0F0"><td align="center" valign="middle" width="20" class="primertd" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;">3.</td><td align="left" class="primertd" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><?php echo $nombre_3?></td></tr>
<tr>
<td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><div style="background-image:url(./imagenes/personajes/<?php echo $skin_3?>.png); background-position:top center; overflow:hidden; width:60px; height:60px"></div></td>
</tr>
<tr class="primertd"><td align="center" colspan="2"><font size="2px"><?php echo $puntos_3?> Puntos <!--(<strong>=</strong>)--></td></tr>
</tbody>
</table>
</td>

</tr>

<tr>
<td colspan="2" align="center" valign="middle" bgcolor="#FFFFFF">
<table width="100%" cellspacing="1" cellpadding="8" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr class="segundoytercero primertd">

<?php

$carrera = $con->prepare("SELECT Username,PuntosCarrera FROM usuarios ORDER BY PuntosCarrera DESC LIMIT 22 OFFSET 3");
$carrera->execute();


$counter = 3;

if($row = $carrera->fetch(PDO::FETCH_ASSOC))
{
	do
	{
		$counter++;
		echo "<td align='center' valign='middle' width='20' style='border-top: 1px solid #FFFFFF;'>".$counter.".</td><td align='left' style='border-top: 1px solid #FFFFFF;'>".$row["Username"]."</td><td align='right' width='70' style='border-top: 1px solid #FFFFFF;'>".$row["PuntosCarrera"]." Puntos</td></tr><tr class='segundoytercero primertd'>"; 
	}
	while($row = $carrera->fetch(PDO::FETCH_ASSOC)); 
}

?>

<!--

<td align='center' width='50' title='Cambio de posiciones respecto al día de ayer.' style='border-top: 1px solid #FFFFFF;'><img src='./imagenes/suba.gif'> <font color='green' size='-2'>+-1</font></td>

<td align='center' valign='middle' width='20'>4.</td><td align='left'>German_Braga</td><td align='right' width='70'>27 Puntos</td><td align='center' width='50' title='Cambio de posiciones respecto al día de ayer.'>=</td></tr><tr class='segundoytercero' bgcolor='#F0F0F0'
<td align='center' valign='middle' width='20' style='border-top: 1px solid #FFFFFF;'>".$counter.".</td><td align='left' style='border-top: 1px solid #FFFFFF;'>".$row["Username"]."</td><td align='right' width='70' style='border-top: 1px solid #FFFFFF;'>".$row["PuntosCarrera"]." Puntos</td><td align='center' width='50' title='Cambio de posiciones respecto al día de ayer.' style='border-top: 1px solid #FFFFFF;'><img src='./imagenes/suba.gif'> <font color='green' size='-2'>+-1</font></td></tr><tr class='segundoytercero primertd'>

-->

</table>
</td>
</tr>
<!--<tr class="segundoytercero" bgcolor="#F0F0F0"><td align="center" valign="middle" width="20" colspan="2"> <strong>Al finalizar el mes de Julio, se entregarán los siguientes premios.</strong></td></tr>-->
</tr>
<!--<tr class="segundoytercero primertd"><td align="center" valign="middle" width="20" colspan="2"> <strong>Primer puesto: <font color="#660000">1 Totem</font>.</strong></td></tr>-->
</tr>
<!--<tr class="segundoytercero primertd"><td align="center" valign="middle" width="20" colspan="2"> <strong>Segundo puesto: <font color="#009900">$145500</font> <a title="Este premio incrementará con el transcurso del tiempo.">(?)</a></strong></td></tr>-->
</tr>
<!--<tr class="segundoytercero primertd"><td align="center" valign="middle" width="20" colspan="2"> <strong>Tercer puesto: <font color="#009900">$97000</font></font> <a title="Este premio incrementará con el transcurso del tiempo.">(?)</a></strong></td></tr>-->
</tbody>
</table>
</div>
</div>
</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>