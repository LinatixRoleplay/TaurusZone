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
	

	while($datos = $stmt->fetch())
	{
		$name = $datos['Username'];
		$money = $datos['Money'];
		$score = $datos['Nivel'];
		$fz = $datos['Moneda'];
		$ropa = $datos['Skin'];
		$platabanco = $datos['Banco'];
		$faccion = $datos['Faccion'];
		$razon = $datos['razon'];
		$ban = $datos['Baneado'];
		$Conexion = $datos['Conexion'];
    }
	$dominio = strstr($email, '@');
}
//else header('location: ingresar.php');
else echo "<script>window.location='ingresar.php';</script>";

if($Conexion == '1')
{
	//header('location: reg.php?u=2');
	echo "<script>window.location='reg.php?u=2';</script>";
}

if($numerotlf == 0)
{
	$numerodetelefono == "No tiene";
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
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
<title><?php echo $NombreServidor?> Roleplay - Comprar <?php echo $Diminutivo?></title>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<link rel="stylesheet" href="./css/style.css">
<style>#paises{margin-top:40px;float:left}#paises a{float:left;text-align:center;width:80px;margin-left:30px;}#paises2{margin-top:30px;float:left}#paises2 a{float:left;text-align:center;width:160px;margin-left:210px;margin-right:210px;margin-bottom:30px;}input[type=text],select{border:solid 1px #999999;padding:2px;background-color:#EBEBEB;margin:2px;}</style>
</head>
<body>
<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
 
<tr>
<td width="997">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16687198-9', 'auto');
  ga('send', 'pageview');

</script>
<style>.alertas{float:left;margin-left:660px;margin-top:170px;position:absolute;background-color:#0081ff;border-radius:3px;padding:0.2em 0.4em 0.2em;color:#FFFFFF;font-weight:bold;}.alertas a{color:#FFF;}.alertas:hover{background-color:#0068ce;}.alertas a:hover{color:#f0f0f0;}</style>
<div style="background-color:#000; position:absolute; width:997px; height:164px; top:29px; background-image:url(./imagenes/fondos-cabecera/<?php $andi = rand(1, 6); echo $andi;?>.jpg)"></div>

<div class="header-s3-2">
<div class="ip">
<font size="2px">IP S1:</font> <b><a href="samp://<?php echo $serverIP ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?>" style="color:#FFFFFF; font-size: 13px;" title="Agregar a favoritos"><?php echo $serverIP ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?></a></b>
</div>
<div class="logged-usuario"><font size="2px;"><?php $quitargion=str_replace("_"," ",$name); echo $quitargion?></div>
<div class="img-usuario"><?php echo '<img src="./imagenes/personajes/'.$ropa.'.png">';?></div>
<div class="iconos-usuario">
<a href="./cuenta.php" title="Tu cuenta"><img src="./imagenes/iconos/casa.png" align="absmiddle" border="0"/></a> &nbsp;
<a href="./logout.php" title="Cerrar sesi&oacute;n - Salir"><img src="./imagenes/iconos/llave_salir.png" align="absmiddle" border="0"/></a>
</div>
</div>

<div id="menu-superior-s3">
<ul>
<li id="principal"><a href="index.php">Pincipal</a></li>
<li id="foro"><a href="./foro/">Foro</a></li>
<li id="tucuenta-ac"><a href="./cuenta.php">Tu cuenta</a></li>
<li id="cuenta-creada"><a></a></li>
</ul>

<div class="invitaciones-pendientes">
<?php include_once('./invitaciones/invitacion.php'); ?> 
</div>

</div>

<?php

$pais = $_GET['p'];

if(!isset($pais))
{
?>

<div id="contenido">
<div class="contenido-total">
<div style="background-image:url(imagenes/comprar-fondo-select.png);height: 367px;padding-left: 70px;padding-right: 70px;padding-top: 50px;width: 580px; font-size:15px">
<div style="  margin-top: 30px; padding-left: 90px;">
Los <?php echo $Diminutivo?> son una moneda que se utiliza para todas las opciones Vip.<br/>
Algunas de ellas son: Comprar casas con estacionamiento privado, membres&iacute;as VIP, veh&iacute;culos especiales, cambios de nombre, y mucho m&aacute;s.
</div>
<div id="paises">
<a href="?p=ar" title="Argentina"><img src="./imagenes/banderas2/Argentina.png" border="0"/>Argentina</a>
<a href="?p=cl" title="Chile"><img src="./imagenes/banderas2/Chile.png" border="0"/>Chile</a>
<a href="?p=co" title="Colombia"><img src="./imagenes/banderas2/Colombia.png" border="0"/>Colombia</a>
<a href="?p=es" title="Espa&ntilde;a"><img src="./imagenes/banderas2/Spain.png" border="0"/>Espa&ntilde;a</a>
<a href="?p=mx" title="M&eacute;xico"><img src="./imagenes/banderas2/Mexico.png" border="0"/>M&eacute;xico</a>
<a href="?p=pe" title="Per&uacute;"><img src="./imagenes/banderas2/Peru.png" border="0"/><br/>Per&uacute;</a>
<a href="?p=pt" title="Portugal"><img src="./imagenes/banderas2/Portugal.png" border="0"/>Portugal</a>
<a href="?p=ve" title="Venezuela"><img src="./imagenes/banderas2/Venezuela.png" border="0"/>Venezuela</a>
<a href="?p=uy" title="Uruguay"><img src="./imagenes/banderas2/Uruguay.png" border="0"/>Uruguay</a>
 <a href="?p=glo" title="Resto del mundo"><img src="./imagenes/banderas2/cruz.png" border="0"/><br/>Resto del mundo (Tarjetas)</a>
</div>
<center>Puedes comprar <?php echo $Diminutivo?> y gastarlos cuando quieras.</center>
</div>
</div>
</div>

<?php
}
else
{
?>
<div id="contenido" style="position:relative; z-index:999;">
<div>
<section class="elcontenedor">
<div class="login" style="width:600px;">
<h1>Comprar <?php echo $Diminutivo?></h1>
<div id="medios" style="font-size:16px">
<center>
<strong><a href="c-oz-tarjeta.php"><font color="#00447b">Pay</font><font color="#0079c2">Pal</font> (Tarjetas de cr&eacute;tido)</a></strong> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; 
<strong><a href="comprar-oz.php"><font color="#147A00" id="otrosmedios" style="cursor:pointer">Otros medios de pago</font></a></strong>
</center>
</div>
<div id="totz" style="width:600px; height:500px; display:none;">
</div>
</div>
</section>
</div>
</div>

<?php
}
?>


<?php include "pie.php" ?>