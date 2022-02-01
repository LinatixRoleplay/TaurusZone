<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']))
{ 
    $User = strtolower($_SESSION['User']);
	
	$stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
	$stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
	$stmt->execute();
	//
	
	while($row = $stmt->fetch())
    { 
        $name = $row['Username'];
        $money = $row['Money'];
        $score = $row['Nivel'];
		$fz = $row['Moneda'];
		$validarcorrero = $row['CorreoValido'];
		$cambiacorreo = $row['CambiaCorreo'];
		$correoacambiar = $row['CorreoACambiar'];
		$tiempocorreo = $row['TiempoCorreo'];
		$email = $row['Email'];
		$ropa = $row['Skin'];
		$platabanco = $row['Banco'];
		$razon = $row['razon'];
		$ban = $row['Baneado'];
		$Conexion = $row['Conexion'];
		$faccion = $row['Faccion'];
		$rangojugador = $row['Rango'];
    }
	$dinerototal = $money+$platabanco;
}
else echo "<script>window.location='ingresar.php';</script>";

date_default_timezone_set('America/Lima');

?>

<?php 
if(isset($_SESSION['User']))
{
    $User = strtolower($_SESSION['User']);
	    
	$stmt2 = $con->prepare("SELECT * FROM facciones WHERE id = :faccion");
	$stmt2->bindParam(':faccion', $faccion, PDO::PARAM_INT);
	$stmt2->execute();
	//
	
	$stmt3 = $con->prepare("SELECT COUNT(Faccion) FROM usuarios WHERE Faccion = :faci");
	$stmt3->bindParam(':faci', $faccion, PDO::PARAM_INT);
	$stmt3->execute();
	//
	$cantidad_integrantes = $stmt3->fetchColumn();
	
	/* CONTADOR RANGOS */
	
	$conta1 = $con->prepare("SELECT COUNT(Faccion) FROM usuarios WHERE Faccion = :faci AND Rango = '1'");
	$conta1->bindParam(':faci', $faccion, PDO::PARAM_INT);
	$conta1->execute();
	//
	$cantidad_rango1 = $conta1->fetchColumn();
	
	$conta2 = $con->prepare("SELECT COUNT(Faccion) FROM usuarios WHERE Faccion = :faci AND Rango = '2'");
	$conta2->bindParam(':faci', $faccion, PDO::PARAM_INT);
	$conta2->execute();
	//
	$cantidad_rango2 = $conta2->fetchColumn();
	
	$conta3 = $con->prepare("SELECT COUNT(Faccion) FROM usuarios WHERE Faccion = :faci AND Rango = '3'");
	$conta3->bindParam(':faci', $faccion, PDO::PARAM_INT);
	$conta3->execute();
	//
	$cantidad_rango3 = $conta3->fetchColumn();
	
	$conta4 = $con->prepare("SELECT COUNT(Faccion) FROM usuarios WHERE Faccion = :faci AND Rango = '4'");
	$conta4->bindParam(':faci', $faccion, PDO::PARAM_INT);
	$conta4->execute();
	//
	$cantidad_rango4 = $conta4->fetchColumn();
	
	$conta5 = $con->prepare("SELECT COUNT(Faccion) FROM usuarios WHERE Faccion = :faci AND Rango = '5'");
	$conta5->bindParam(':faci', $faccion, PDO::PARAM_INT);
	$conta5->execute();
	//
	$cantidad_rango5 = $conta5->fetchColumn();
	
	$conta6 = $con->prepare("SELECT COUNT(Faccion) FROM usuarios WHERE Faccion = :faci AND Rango = '6'");
	$conta6->bindParam(':faci', $faccion, PDO::PARAM_INT);
	$conta6->execute();
	//
	$cantidad_rango6 = $conta6->fetchColumn();
	
	$conta7 = $con->prepare("SELECT COUNT(Faccion) FROM usuarios WHERE Faccion = :faci AND Rango = '7'");
	$conta7->bindParam(':faci', $faccion, PDO::PARAM_INT);
	$conta7->execute();
	//
	$cantidad_rango7 = $conta7->fetchColumn();
	
	$conta8 = $con->prepare("SELECT COUNT(Faccion) FROM usuarios WHERE Faccion = :faci AND Rango = '8'");
	$conta8->bindParam(':faci', $faccion, PDO::PARAM_INT);
	$conta8->execute();
	//
	$cantidad_rango8 = $conta8->fetchColumn();
	
	/* */
	
	while($row2 = $stmt2->fetch())
    {
		$idfaccion = $row2['id'];
        $nombrefaccion = $row2['Nombre'];
        $integrantes = $row2['Integrantes'];
		$maxinte = $row2['MaxIntegrantes'];
        $Lider = $row2['Lider'];
		
        $Rango1 = $row2['Rango1'];
		$Rango8 = $row2['Rango8'];
		
        $Rango2 = $row2['Rango2'];
        $Rango3 = $row2['Rango3'];
        $Rango4 = $row2['Rango4'];
        $Rango5 = $row2['Rango5'];
        $Rango6 = $row2['Rango6'];
		$Rango7 = $row2['Rango7'];
	
		$Rango1Inv = $row2['Rango1Inv'];
		$Rango1Exp = $row2['Rango1Exp'];
		$Rango1Edi = $row2['Rango1Edi'];
		
		$Rango2Inv = $row2['Rango2Inv'];
		$Rango2Exp = $row2['Rango2Exp'];
		$Rango2Edi = $row2['Rango2Edi'];
		
		$Rango3Inv = $row2['Rango3Inv'];
		$Rango3Exp = $row2['Rango3Exp'];
		$Rango3Edi = $row2['Rango3Edi'];
		
		$Rango4Inv = $row2['Rango4Inv'];
		$Rango4Exp = $row2['Rango4Exp'];
		$Rango4Edi = $row2['Rango4Edi'];
		
		$Rango5Inv = $row2['Rango5Inv'];
		$Rango5Exp = $row2['Rango5Exp'];
		$Rango5Edi = $row2['Rango5Edi'];
		
		$Rango6Inv = $row2['Rango6Inv'];
		$Rango6Exp = $row2['Rango6Exp'];
		$Rango6Edi = $row2['Rango6Edi'];
		
		$Rango7Inv = $row2['Rango7Inv'];
		$Rango7Exp = $row2['Rango7Exp'];
		$Rango7Edi = $row2['Rango7Edi'];
		
		$fecha = $row2['fecha'];
		$territorio = $row2['territorio'];
        $tipodebanda = $row2['tipobanda'];
    }
	
}

if($Conexion == '1')
{
	echo "<script>window.location='reg.php?u=2';</script>";
}

if($faccion == 0)
{
	echo "<script>window.location='crear-banda.php';</script>";
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

<html xmlns="https://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title><?php echo $NombreServidor?> Roleplay - Tu banda</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css">

<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />

<script src="./js/jquery-2.1.3.min.js" type="text/javascript"></script>


<script src="./js/jquery.tools.min.js" type="text/javascript"></script>


<script type="text/javascript" src="./js/scripts.js"></script>

<script src="./js/jquery-latest.js"></script>

<script src="https://code.jquery.com/jquery-latest.js"></script>

<style>DIV#loader.loading{background:url(./imagenes/iconos/spinner.gif) no-repeat center center;}#loader{width:300px;height:344px;background-color:#000000}#negro{background-color:#FFFFFF;width:300px;border:solid 1px #DEDEDE;padding:3px;margin-top:5px;margin-left:15px;margin-bottom:5px;float:left;}.skinid{border:solid 1px #DEDEDE;font-size:11px;width:20px;margin:3px 3px 0 3px;padding:3px}.botonskin{border:solid 1px #DEDEDE;font-size:11px;margin:3px 3px 0 3px;padding:2px;background-color:#FFFFFF;cursor:pointer}.bloquederecho{float:left;width:345px;}.bloq{background-color:#FFFFFF;border:solid 1px #DEDEDE;margin:5px;padding:5px;}body{ font-size: 1px;}</style>
<style type="text/css">
h3{margin:0px;padding:0px;}.CajaRelacionados{position:absolute;left:130px;margin:10px 0px 0px 0px;width:200px;background-color:#FFFFFF;-moz-border-radius:7px;-webkit-border-radius:7px;border:2px solid #F2F2F2;color:#000;}.LastaRelacionados{margin:0px;padding:0px;}.LastaRelacionados li{list-style:none;margin:0px 0px 3px 0px;padding:3px;cursor:pointer;}.LastaRelacionados li:hover{background-color:#EBEBEB;}DIV#loader.loading{background:url(/imagenes/iconos/spinner.gif) no-repeat center center;}.CajaRangos{position:absolute;margin:7px 0px 0px 0px;width:200px;background-color:#FFFFFF;background-image:url(imagenes/menu-flotante-fondo.png);-moz-border-radius:7px;-webkit-border-radius:7px;border:1px solid #D6D6D6;color:#000;}.ListaRelacionados li:hover{background-position:0 -20px;color:#0099FF;}.ListaRelacionados{margin:0px;padding:0px;text-shadow:0 1px 0 #FFFFFF;}.ListaRelacionados li{color:#003366;list-style:none;height:18px;cursor:pointer;background-image:url(imagenes/menu-flotante.png);overflow-x:hidden;overflow-y:hidden;text-align:left;padding-left:17px;padding-top:2px;}.ListaRelacionados ul{margin:5px 0px 5px 0px;border-bottom:solid 1px #CCCCCC;padding:0px;}#solucioncuadro{position:absolute;left:15%;top:30%;display:none;width:700px;height:300px;background-image:url(imagenes/muestraskins.png)}div#solucioncuadro{position:fixed;}
</style>
</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

 

<tbody><tr>

<td width="997">

<?php include('header.php') ?>

<div id="contenido">
<div id="contenido-izquierdo">

<div class="td-gr">

<div class="icono-td">
<img src="imagenes/iconos/info.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Informaci&oacute;n de tu banda</div>
<div style="padding:10px; float:left; width:280px; margin-left:22px">
<div style="float:left"><img src="./imagenes/iconos/texto.png"/>&nbsp;</div><div><font size="2px">&nbsp;Nombre:<span style="float:right;"><?php echo $nombrefaccion;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/puerta.png"/>&nbsp;</div><div>&nbsp;Territorio:<span style="float:right;"><?php echo $territorio;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/fecha.png"/>&nbsp;</div><div>&nbsp;Fecha de creaci&oacute;n:<span style="float:right;"><?php echo $fecha;?></span></div>
<div class="hr"></div>
<?php 
	if($rangojugador < 8)
	{
?>
		<div style="float:left"><img src="./imagenes/iconos/abandonar-banda.png"/>&nbsp;</div><div>&nbsp;Abandonar banda:<span style="float:right;"><a href="abandonar-banda.php"><img src="imagenes/iconos/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a></span></div>
		<div class="hr"></div>
<?php 
	}
?>
</div>

<div style="padding:10px; float:left; width:280px; margin-left:22px">
<div style="float:left"><img src="./imagenes/iconos/bandera.png"/>&nbsp;</div><div>&nbsp;Tipo de banda:<span style="float:right;"><?php echo $tipodebanda;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/estrella.png"/>&nbsp;</div><div>&nbsp;Lider:<span style="float:right;"><?php echo $Lider;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/personas.png"/>&nbsp;</div><div>&nbsp;Integrantes:<span style="float:right;"><?php echo $cantidad_integrantes;?>/<?php echo $maxinte;?></span></div>
<div class="hr"></div>
<?php

$sql3 = $con->prepare("SELECT * FROM `usuarios` WHERE Online = '1' AND Faccion = :idfaccion");
$sql3->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT);
$sql3->execute();
//
	
$mconectados = $sql3->rowCount();

?>
<div style="float:left"><img src="./imagenes/conectado.png"/>&nbsp;</div><div>&nbsp;Integrantes conectados:<span style="float:right;"><?php echo $mconectados;?></span></div>
<div class="hr"></div>
</div>
</div>

<div class="td-gr">
<div class="icono-td"><img src="imagenes/iconos/personas.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Integrantes</div>
<div style="padding:10px">

<!-- Rango 8 -->
<?php
$sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='8'");
$sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT);
$sql_tt->execute();
//
	
$jugadores = $sql_tt->rowCount();

if($jugadores > 0)
{
?>
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango8;?>(<?php echo $cantidad_rango8;?>)</strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php
	while($memberff = $sql_tt->fetch())
	{
?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario p�blico." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php
		$conectadoss = $memberff['Online'];
		$conectadosss = $memberff['Conexion'];
		if($conectadoss == 1)
		{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php 
		}
		else 
		{
			if($conectadosss != '1')
			{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">
<?php 
$fecha1 = new DateTime(''.str_replace("/", "-", $memberff['Conexion']).'');
$fecha2 = new DateTime(''.date("d-m-Y H:i:s").'');
$d = $fecha1->diff($fecha2);
$dia = $d->format('%a');
$hor = $d->format('%h');
$min = $d->format('%i');
$seg = $d->format('%s');
$t="s";
if($dia > 0) { echo $dia.'d '; }
if($hor > 0) { echo $hor.':';  $t="h";}
if($min > 0) { echo $min.':'; if($t != 'h'){$t="m";}}
echo $seg.$t;
?>
</span></td>
<?php 
			}
			else
			{
				echo '<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td><td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">No ingreso</span></td>';
			}
		}
?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
</td>
<?php
	}
?>
</tr>
</table>
<?php 
}
?>

<!-- Rango 7 -->
<?php
$sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='7'");
$sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT);
$sql_tt->execute();
//
	
$jugadores = $sql_tt->rowCount();

if($jugadores > 0 && $Rango7 != null)
{
?>
<br/>
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango7;?>(<?php echo $cantidad_rango7;?>)</strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php
	while($memberff = $sql_tt->fetch())
	{
?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario p�blico." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php
		$conectadoss = $memberff['Online'];
		$conectadosss = $memberff['Conexion'];
		if($conectadoss == 1)
		{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php 
		}
		else 
		{
			if($conectadosss != '1')
			{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">
<?php 
$fecha1 = new DateTime(''.str_replace("/", "-", $memberff['Conexion']).'');
$fecha2 = new DateTime(''.date("d-m-Y H:i:s").'');
$d = $fecha1->diff($fecha2);
$dia = $d->format('%a');
$hor = $d->format('%h');
$min = $d->format('%i');
$seg = $d->format('%s');
$t="s";
if($dia > 0) { echo $dia.'d '; }
if($hor > 0) { echo $hor.':';  $t="h";}
if($min > 0) { echo $min.':'; if($t != 'h'){$t="m";}}
echo $seg.$t;
?>
</span></td>
<?php 
			}
			else
			{
				echo '<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td><td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">No ingreso</span></td>';
			}
		}
?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php 
		if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6)
		{
			echo '<a href="abandonar-banda.php"><img src="imagenes/iconos/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>';
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Exp == 1 || 
		$rangojugador == 2 && $Rango2Exp == 1 || 
		$rangojugador == 3 && $Rango3Exp == 1 || 
		$rangojugador == 4 && $Rango4Exp == 1 || 
		$rangojugador == 5 && $Rango5Exp == 1 || 
		$rangojugador == 6 && $Rango6Exp == 1 ||
		$rangojugador == 7 && $Rango7Exp == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
				echo '<img src="imagenes/iconos/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;';
			}
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Edi == 1 || 
		$rangojugador == 2 && $Rango2Edi == 1 || 
		$rangojugador == 3 && $Rango3Edi == 1 || 
		$rangojugador == 4 && $Rango4Edi == 1 || 
		$rangojugador == 5 && $Rango5Edi == 1 || 
		$rangojugador == 6 && $Rango6Edi == 1 ||
		$rangojugador == 7 && $Rango7Edi == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
?>
				<img src="imagenes/iconos/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/iconos/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
<?php 
				echo 						'<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>';
				if($rangojugador >= 2 && $Rango2 != null) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>';
				if($rangojugador >= 3 && $Rango3 != null) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>';
				if($rangojugador >= 4 && $Rango4 != null) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>';
				if($rangojugador >= 5 && $Rango5 != null) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>';
				if($rangojugador >= 6 && $Rango6 != null) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>';
				if($rangojugador >= 7 && $Rango7 != null) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'7\');"/><font size="2px">&raquo; '.$Rango7.'</font></li>';
				if($rangojugador >= 8) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'8\');"/><font size="2px">&raquo; '.$Rango8.'</font></li>';
			}
		}
?>
</ul>
</div>
</div>
</td>
<?php
	}
?>
</tr>
</table>
<?php 
}
?>

<!-- Rango 6 -->
<?php
$sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='6'");
$sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT);
$sql_tt->execute();
//
	
$jugadores = $sql_tt->rowCount();

if($jugadores > 0 && $Rango6 != null)
{
?>
<br/>
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango6;?>(<?php echo $cantidad_rango6;?>)</strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php
	while($memberff = $sql_tt->fetch())
	{
?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario p�blico." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php
		$conectadoss = $memberff['Online'];
		$conectadosss = $memberff['Conexion'];
		if($conectadoss == 1)
		{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php 
		}
		else 
		{
			if($conectadosss != '1')
			{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">
<?php 
$fecha1 = new DateTime(''.str_replace("/", "-", $memberff['Conexion']).'');
$fecha2 = new DateTime(''.date("d-m-Y H:i:s").'');
$d = $fecha1->diff($fecha2);
$dia = $d->format('%a');
$hor = $d->format('%h');
$min = $d->format('%i');
$seg = $d->format('%s');
$t="s";
if($dia > 0) { echo $dia.'d '; }
if($hor > 0) { echo $hor.':';  $t="h";}
if($min > 0) { echo $min.':'; if($t != 'h'){$t="m";}}
echo $seg.$t;
?>
</span></td>
<?php 
			}
			else
			{
				echo '<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td><td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">No ingreso</span></td>';
			}
		}
?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php 
		if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6)
		{
			echo '<a href="abandonar-banda.php"><img src="imagenes/iconos/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>';
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Exp == 1 || 
		$rangojugador == 2 && $Rango2Exp == 1 || 
		$rangojugador == 3 && $Rango3Exp == 1 || 
		$rangojugador == 4 && $Rango4Exp == 1 || 
		$rangojugador == 5 && $Rango5Exp == 1 || 
		$rangojugador == 6 && $Rango6Exp == 1 ||
		$rangojugador == 7 && $Rango7Exp == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
				echo '<img src="imagenes/iconos/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;';
			}
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Edi == 1 || 
		$rangojugador == 2 && $Rango2Edi == 1 || 
		$rangojugador == 3 && $Rango3Edi == 1 || 
		$rangojugador == 4 && $Rango4Edi == 1 || 
		$rangojugador == 5 && $Rango5Edi == 1 || 
		$rangojugador == 6 && $Rango6Edi == 1 ||
		$rangojugador == 7 && $Rango7Edi == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
?>
				<img src="imagenes/iconos/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/iconos/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
<?php 
				echo 						'<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>';
				if($rangojugador >= 2 && $Rango2 != null) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>';
				if($rangojugador >= 3 && $Rango3 != null) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>';
				if($rangojugador >= 4 && $Rango4 != null) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>';
				if($rangojugador >= 5 && $Rango5 != null) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>';
				if($rangojugador >= 6 && $Rango6 != null) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>';
				if($rangojugador >= 7 && $Rango7 != null) echo '<li title="Promover a '.$Rango7.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'7\');"/><font size="2px">&raquo; '.$Rango7.'</font></li>';
				if($rangojugador >= 8) echo '<li title="Promover a '.$Rango8.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'8\');"/><font size="2px">&raquo; '.$Rango8.'</font></li>';
			}
		}
?>
</ul>
</div>
</div>
</td>
<?php
	}
?>
</tr>
</table>
<?php 
}
?>

<!-- Rango 5 -->
<?php
$sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='5'");
$sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT);
$sql_tt->execute();
//
	
$jugadores = $sql_tt->rowCount();

if($jugadores > 0 && $Rango5 != null)
{
?>
<br/>
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango5;?>(<?php echo $cantidad_rango5;?>)</strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php
	while($memberff = $sql_tt->fetch())
	{
?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario p�blico." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php
		$conectadoss = $memberff['Online'];
		$conectadosss = $memberff['Conexion'];
		if($conectadoss == 1)
		{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php 
		}
		else 
		{
			if($conectadosss != '1')
			{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">
<?php 
$fecha1 = new DateTime(''.str_replace("/", "-", $memberff['Conexion']).'');
$fecha2 = new DateTime(''.date("d-m-Y H:i:s").'');
$d = $fecha1->diff($fecha2);
$dia = $d->format('%a');
$hor = $d->format('%h');
$min = $d->format('%i');
$seg = $d->format('%s');
$t="s";
if($dia > 0) { echo $dia.'d '; }
if($hor > 0) { echo $hor.':';  $t="h";}
if($min > 0) { echo $min.':'; if($t != 'h'){$t="m";}}
echo $seg.$t;
?>
</span></td>
<?php 
			}
			else
			{
				echo '<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td><td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">No ingreso</span></td>';
			}
		}
?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php 
		if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6)
		{
			echo '<a href="abandonar-banda.php"><img src="imagenes/iconos/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>';
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Exp == 1 || 
		$rangojugador == 2 && $Rango2Exp == 1 || 
		$rangojugador == 3 && $Rango3Exp == 1 || 
		$rangojugador == 4 && $Rango4Exp == 1 || 
		$rangojugador == 5 && $Rango5Exp == 1 || 
		$rangojugador == 6 && $Rango6Exp == 1 ||
		$rangojugador == 7 && $Rango7Exp == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
				echo '<img src="imagenes/iconos/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;';
			}
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Edi == 1 || 
		$rangojugador == 2 && $Rango2Edi == 1 || 
		$rangojugador == 3 && $Rango3Edi == 1 || 
		$rangojugador == 4 && $Rango4Edi == 1 || 
		$rangojugador == 5 && $Rango5Edi == 1 || 
		$rangojugador == 6 && $Rango6Edi == 1 ||
		$rangojugador == 7 && $Rango7Edi == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
?>
				<img src="imagenes/iconos/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/iconos/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
<?php 
				echo 						'<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>';
				if($rangojugador >= 2 && $Rango2 != null) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>';
				if($rangojugador >= 3 && $Rango3 != null) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>';
				if($rangojugador >= 4 && $Rango4 != null) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>';
				if($rangojugador >= 5 && $Rango5 != null) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>';
				if($rangojugador >= 6 && $Rango6 != null) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>';
				if($rangojugador >= 7 && $Rango7 != null) echo '<li title="Promover a '.$Rango7.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'7\');"/><font size="2px">&raquo; '.$Rango7.'</font></li>';
				if($rangojugador >= 8) echo '<li title="Promover a '.$Rango8.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'8\');"/><font size="2px">&raquo; '.$Rango8.'</font></li>';
			}
		}
?>
</ul>
</div>
</div>
</td>
<?php
	}
?>
</tr>
</table>
<?php 
}
?>

<!-- Rango 4 -->
<?php
$sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='4'");
$sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT);
$sql_tt->execute();
//
	
$jugadores = $sql_tt->rowCount();

if($jugadores > 0 && $Rango4 != null)
{
?>
<br />
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango4;?>(<?php echo $cantidad_rango4;?>)</strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php
	while($memberff = $sql_tt->fetch())
	{
?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario p�blico." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php
		$conectadoss = $memberff['Online'];
		$conectadosss = $memberff['Conexion'];
		if($conectadoss == 1)
		{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php 
		}
		else 
		{
			if($conectadosss != '1')
			{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">
<?php 
$fecha1 = new DateTime(''.str_replace("/", "-", $memberff['Conexion']).'');
$fecha2 = new DateTime(''.date("d-m-Y H:i:s").'');
$d = $fecha1->diff($fecha2);
$dia = $d->format('%a');
$hor = $d->format('%h');
$min = $d->format('%i');
$seg = $d->format('%s');
$t="s";
if($dia > 0) { echo $dia.'d '; }
if($hor > 0) { echo $hor.':';  $t="h";}
if($min > 0) { echo $min.':'; if($t != 'h'){$t="m";}}
echo $seg.$t;
?>
</span></td>
<?php 
			}
			else
			{
				echo '<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td><td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">No ingreso</span></td>';
			}
		}
?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php 
		if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6)
		{
			echo '<a href="abandonar-banda.php"><img src="imagenes/iconos/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>';
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Exp == 1 || 
		$rangojugador == 2 && $Rango2Exp == 1 || 
		$rangojugador == 3 && $Rango3Exp == 1 || 
		$rangojugador == 4 && $Rango4Exp == 1 || 
		$rangojugador == 5 && $Rango5Exp == 1 || 
		$rangojugador == 6 && $Rango6Exp == 1 ||
		$rangojugador == 7 && $Rango7Exp == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
				echo '<img src="imagenes/iconos/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;';
			}
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Edi == 1 || 
		$rangojugador == 2 && $Rango2Edi == 1 || 
		$rangojugador == 3 && $Rango3Edi == 1 || 
		$rangojugador == 4 && $Rango4Edi == 1 || 
		$rangojugador == 5 && $Rango5Edi == 1 || 
		$rangojugador == 6 && $Rango6Edi == 1 ||
		$rangojugador == 7 && $Rango7Edi == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
?>
				<img src="imagenes/iconos/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/iconos/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
				<?php 
				echo 						'<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>';
				if($rangojugador >= 2 && $Rango2 != null) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>';
				if($rangojugador >= 3 && $Rango3 != null) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>';
				if($rangojugador >= 4 && $Rango4 != null) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>';
				if($rangojugador >= 5 && $Rango5 != null) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>';
				if($rangojugador >= 6 && $Rango6 != null) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>';
				if($rangojugador >= 7 && $Rango7 != null) echo '<li title="Promover a '.$Rango7.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'7\');"/><font size="2px">&raquo; '.$Rango7.'</font></li>';
				if($rangojugador >= 8) echo '<li title="Promover a '.$Rango8.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'8\');"/><font size="2px">&raquo; '.$Rango8.'</font></li>';
			}
		}
?>
</ul>
</div>
</div>
</td>
<?php
	}
?>
</tr>
</table>
<?php 
}
?>

<!-- Rango 3 -->
<?php
$sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='3'");
$sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT);
$sql_tt->execute();
//

$jugadores = $sql_tt->rowCount();

if($jugadores > 0 && $Rango3 != null)
{
?>
<br />
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango3;?>(<?php echo $cantidad_rango3;?>)</strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php
	while($memberff = $sql_tt->fetch())
	{
?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario p�blico." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php
		$conectadoss = $memberff['Online'];
		$conectadosss = $memberff['Conexion'];
		if($conectadoss == 1)
		{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php 
		}
		else 
		{
			if($conectadosss != '1')
			{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">
<?php 
$fecha1 = new DateTime(''.str_replace("/", "-", $memberff['Conexion']).'');
$fecha2 = new DateTime(''.date("d-m-Y H:i:s").'');
$d = $fecha1->diff($fecha2);
$dia = $d->format('%a');
$hor = $d->format('%h');
$min = $d->format('%i');
$seg = $d->format('%s');
$t="s";
if($dia > 0) { echo $dia.'d '; }
if($hor > 0) { echo $hor.':';  $t="h";}
if($min > 0) { echo $min.':'; if($t != 'h'){$t="m";}}
echo $seg.$t;
?>
</span></td>
<?php 
			}
			else
			{
				echo '<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td><td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">No ingreso</span></td>';
			}
		}
?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php 
		if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6)
		{
			echo '<a href="abandonar-banda.php"><img src="imagenes/iconos/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>';
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Exp == 1 || 
		$rangojugador == 2 && $Rango2Exp == 1 || 
		$rangojugador == 3 && $Rango3Exp == 1 || 
		$rangojugador == 4 && $Rango4Exp == 1 || 
		$rangojugador == 5 && $Rango5Exp == 1 || 
		$rangojugador == 6 && $Rango6Exp == 1 ||
		$rangojugador == 7 && $Rango7Exp == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
				echo '<img src="imagenes/iconos/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;';
			}
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Edi == 1 || 
		$rangojugador == 2 && $Rango2Edi == 1 || 
		$rangojugador == 3 && $Rango3Edi == 1 || 
		$rangojugador == 4 && $Rango4Edi == 1 || 
		$rangojugador == 5 && $Rango5Edi == 1 || 
		$rangojugador == 6 && $Rango6Edi == 1 ||
		$rangojugador == 7 && $Rango7Edi == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
?>
				<img src="imagenes/iconos/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/iconos/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
<?php 
				echo 						'<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>';
				if($rangojugador >= 2 && $Rango2 != null) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>';
				if($rangojugador >= 3 && $Rango3 != null) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>';
				if($rangojugador >= 4 && $Rango4 != null) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>';
				if($rangojugador >= 5 && $Rango5 != null) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>';
				if($rangojugador >= 6 && $Rango6 != null) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>';
				if($rangojugador >= 7 && $Rango7 != null) echo '<li title="Promover a '.$Rango7.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'7\');"/><font size="2px">&raquo; '.$Rango7.'</font></li>';
				if($rangojugador >= 8) echo '<li title="Promover a '.$Rango8.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'8\');"/><font size="2px">&raquo; '.$Rango8.'</font></li>';
			}
		}
?>
</ul>
</div>
</div>
</td>
<?php
	}
?>
</tr>
</table>
<?php 
}
?>

<!-- Rango 2 -->
<?php
$sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='2'");
$sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT);
$sql_tt->execute();
//
	
$jugadores = $sql_tt->rowCount();

if($jugadores > 0 && $Rango2 != null)
{
?>
<br />
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango2;?>(<?php echo $cantidad_rango2;?>)</strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php
	while($memberff = $sql_tt->fetch())
	{
?>
<tr id="tr717751">

<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario p�blico." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>

<?php
		$conectadoss = $memberff['Online'];
		$conectadosss = $memberff['Conexion'];
		if($conectadoss == 1)
		{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php 
		}
		else 
		{
			if($conectadosss != '1')
			{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">
<?php 
$fecha1 = new DateTime(''.str_replace("/", "-", $memberff['Conexion']).'');
$fecha2 = new DateTime(''.date("d-m-Y H:i:s").'');
$d = $fecha1->diff($fecha2);
$dia = $d->format('%a');
$hor = $d->format('%h');
$min = $d->format('%i');
$seg = $d->format('%s');
$t="s";
if($dia > 0) { echo $dia.'d '; }
if($hor > 0) { echo $hor.':';  $t="h";}
if($min > 0) { echo $min.':'; if($t != 'h'){$t="m";}}
echo $seg.$t;
?>
</span></td>
<?php 
			}
			else
			{
				echo '<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td><td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">No ingreso</span></td>';
			}
		}
?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php 
		if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6)
		{
			echo '<a href="abandonar-banda.php"><img src="imagenes/iconos/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>';
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Exp == 1 || 
		$rangojugador == 2 && $Rango2Exp == 1 || 
		$rangojugador == 3 && $Rango3Exp == 1 || 
		$rangojugador == 4 && $Rango4Exp == 1 || 
		$rangojugador == 5 && $Rango5Exp == 1 || 
		$rangojugador == 6 && $Rango6Exp == 1 ||
		$rangojugador == 7 && $Rango7Exp == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
				echo '<img src="imagenes/iconos/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;';
			}
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Edi == 1 || 
		$rangojugador == 2 && $Rango2Edi == 1 || 
		$rangojugador == 3 && $Rango3Edi == 1 || 
		$rangojugador == 4 && $Rango4Edi == 1 || 
		$rangojugador == 5 && $Rango5Edi == 1 || 
		$rangojugador == 6 && $Rango6Edi == 1 ||
		$rangojugador == 7 && $Rango7Edi == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{					
?>
				<img src="imagenes/iconos/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/iconos/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
				<?php 
				echo 						'<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>';
				if($rangojugador >= 2 && $Rango2 != null) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>';
				if($rangojugador >= 3 && $Rango3 != null) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>';
				if($rangojugador >= 4 && $Rango4 != null) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>';
				if($rangojugador >= 5 && $Rango5 != null) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>';
				if($rangojugador >= 6 && $Rango6 != null) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>';
				if($rangojugador >= 7 && $Rango7 != null) echo '<li title="Promover a '.$Rango7.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'7\');"/><font size="2px">&raquo; '.$Rango7.'</font></li>';
				if($rangojugador >= 8) echo '<li title="Promover a '.$Rango8.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'8\');"/><font size="2px">&raquo; '.$Rango8.'</font></li>';
			}
		}
?>
</ul>
</div>
</div>
</td>
<?php
	}
?>
</tr>
</table>
<?php 
}
?>

<!-- Rango 1 -->
<?php
$sql_tt = $con->prepare("SELECT * FROM usuarios WHERE faccion = :idfaccion AND Rango='1'");
$sql_tt->bindParam(':idfaccion', $idfaccion, PDO::PARAM_INT);
$sql_tt->execute();
//
	
$jugadores = $sql_tt->rowCount();

if($jugadores > 0)
{
?>
<br />
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr>
<td height="22" colspan="4" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong><font size="2px"><?php echo $Rango1;?>(<?php echo $cantidad_rango1;?>)</strong></td>
</tr>
<tr class="primertd">
<td width="197" height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Estado</td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">&Uacute;ltima actividad </td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Acciones</td>
</tr>
<?php
	while($memberff = $sql_tt->fetch())
	{
?>
<tr id="tr717751">
<td width="140" height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><a title="Perfil de usuario p�blico." href="./u/<?php echo $memberff['Username'];?>"><font size="2px"><font size="2px"><?php echo ucwords(strtolower($memberff['Username']), "_"); ?></a></div></td>
<?php
		$conectadoss = $memberff['Online'];
		$conectadosss = $memberff['Conexion'];
		if($conectadoss == 1)
		{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/conectado.png" alt="Conectado" title="Conectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">Recientemente</span></td>
<?php 
		}
		else 
		{
			if($conectadosss != '1')
			{
?>
<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td>
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">
<?php 
$fecha1 = new DateTime(''.str_replace("/", "-", $memberff['Conexion']).'');
$fecha2 = new DateTime(''.date("d-m-Y H:i:s").'');
$d = $fecha1->diff($fecha2);
$dia = $d->format('%a');
$hor = $d->format('%h');
$min = $d->format('%i');
$seg = $d->format('%s');
$t="s";
if($dia > 0) { echo $dia.'d '; }
if($hor > 0) { echo $hor.':';  $t="h";}
if($min > 0) { echo $min.':'; if($t != 'h'){$t="m";}}
echo $seg.$t;
?>
</span></td>
<?php 
			}
			else
			{
				echo '<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="imagenes/iconos/desconectado-rojo.png" alt="Desconectado" title="Desconectado"></td><td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">No ingreso</span></td>';
			}
		}
?>
<td width="173" align="center" valign="middle" bgcolor="#FFFFFF">
<?php 
		if(strtolower($memberff['Username']) == strtolower($_SESSION['User']) && $memberff['Rango'] < 6)
		{
			echo '<a href="abandonar-banda.php"><img src="imagenes/iconos/abandonar.png" title="Abandonar banda" style="cursor:pointer" border="0"></a>';
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Exp == 1 || 
		$rangojugador == 2 && $Rango2Exp == 1 || 
		$rangojugador == 3 && $Rango3Exp == 1 || 
		$rangojugador == 4 && $Rango4Exp == 1 || 
		$rangojugador == 5 && $Rango5Exp == 1 || 
		$rangojugador == 6 && $Rango6Exp == 1 ||
		$rangojugador == 7 && $Rango7Exp == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
				echo '<img src="imagenes/iconos/expulsar-miembro.png" title="Expulsar miembro" style="cursor:pointer" onclick="javascript:ExpulsarMiembro(\''.ucwords(strtolower($memberff['Username']), "_").'\')" />&nbsp;';
			}
		} 
		if
		(
		$rangojugador == 8 || 
		$rangojugador == 1 && $Rango1Edi == 1 || 
		$rangojugador == 2 && $Rango2Edi == 1 || 
		$rangojugador == 3 && $Rango3Edi == 1 || 
		$rangojugador == 4 && $Rango4Edi == 1 || 
		$rangojugador == 5 && $Rango5Edi == 1 || 
		$rangojugador == 6 && $Rango6Edi == 1 ||
		$rangojugador == 7 && $Rango7Edi == 1 
		&& $faccion == $idfaccion
		)
		{
			if(strtolower($memberff['Username']) != strtolower($_SESSION['User']) && $rangojugador != $memberff['Rango'] && $memberff['Rango'] < $rangojugador)
			{
?>
				<img src="imagenes/iconos/miembro-rango.png" onclick="javascript:MostrarRangos(<?php echo $memberff['ID'] + 10; ?>)" id="B<?php echo $memberff['ID'] + 10; ?>" style="cursor:pointer" title="Cambiar rango" name="B<?php echo $memberff['ID'] + 10; ?>" />
				<div class="CajaRangos" id="Rangos<?php echo $memberff['ID'] + 10; ?>" style="display:none">
				<img src="imagenes/iconos/flecha-arriba.png" style="position: absolute; top: -10px;" alt="arriba"/>
				<div class="ListaRelacionados" id="autoRangos<?php echo $memberff['ID'] + 10; ?>" onblur="javascript:NoViendo(<?php echo $memberff['ID'] + 10; ?>);">
				<ul>
<?php 
				echo 						'<li title="Promover a '.$Rango1.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'1\');"/><font size="2px">&raquo; '.$Rango1.'</font></li>';
				if($rangojugador >= 2 && $Rango2 != null) echo '<li title="Promover a '.$Rango2.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'2\');"/><font size="2px">&raquo; '.$Rango2.'</font></li>';
				if($rangojugador >= 3 && $Rango3 != null) echo '<li title="Promover a '.$Rango3.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'3\');"/><font size="2px">&raquo; '.$Rango3.'</font></li>';
				if($rangojugador >= 4 && $Rango4 != null) echo '<li title="Promover a '.$Rango4.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'4\');"/><font size="2px">&raquo; '.$Rango4.'</font></li>';
				if($rangojugador >= 5 && $Rango5 != null) echo '<li title="Promover a '.$Rango5.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'5\');"/><font size="2px">&raquo; '.$Rango5.'</font></li>';
				if($rangojugador >= 6 && $Rango6 != null) echo '<li title="Promover a '.$Rango6.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'6\');"/><font size="2px">&raquo; '.$Rango6.'</font></li>';
				if($rangojugador >= 7 && $Rango7 != null) echo '<li title="Promover a '.$Rango7.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'7\');"/><font size="2px">&raquo; '.$Rango7.'</font></li>';
				if($rangojugador >= 8) echo '<li title="Promover a '.$Rango8.'" onclick="javascript:CambiarRango(\''.ucwords(strtolower($memberff['Username']), "_").'\',\'8\');"/><font size="2px">&raquo; '.$Rango8.'</font></li>';
			}
		}
?>
</ul>
</div>
</div>
</td>
<?php
	}
?>
</tr>
</table>
<?php 
}
?>

<!-- Invitaciones -->
<div class="hr"></div>
</div>
</div>
<?php
if(
$rangojugador == 8 || 
$rangojugador == 1 && $Rango1Inv == 1 || 
$rangojugador == 2 && $Rango2Inv == 1 || 
$rangojugador == 3 && $Rango3Inv == 1 || 
$rangojugador == 4 && $Rango4Inv == 1 || 
$rangojugador == 5 && $Rango5Inv == 1 ||
$rangojugador == 6 && $Rango6Inv == 1 ||
$rangojugador == 7 && $Rango7Inv == 1
)
{
?>
<div class="td-gr">
				<div class="icono-td"><img src="imagenes/iconos/usuarios.png"/></div>
				<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Invitar a nuevos integrantes</div>
				<div style="height:40px">
				<div class="text" id="fm1">
				<input type="text" size="27" value="" id="inputString" onkeyup="lookup(this.value);"/>
				</div>
				<div style="float:left; margin-top:7px" id="fm2">
				<input type="image" value="Crear" src="imagenes/boton-invitar.png" title="Invitar" onclick="Invitar('<?php echo $idfaccion; ?>');"/>
				</div>
				<div id="boxinvitando" style="display:none"><p><font size="3px" color="orange">Invitando...</font></p></div>
				</div>
				<script>
									$("#inputString").keyup(function(event){
										if(event.keyCode == 13){
											Invitar();
										}
									});
								</script>
				<div class="CajaRelacionados" id="Relacionados" style="display: none;">
				<img src="imagenes/iconos/flecha-arriba.png" style="position: relative; top: -12px; left: 30px;" alt="upArrow"/>
				<div class="LastaRelacionados" id="autoRelacionadosList"></div>
				</div>
				</div>

<?php
}
?>

<?php
if($rangojugador == 8)
{
					echo '<div class="td-gr"><div class="icono-td"><img src="imagenes/iconos/estrella.png"/></div>
					<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Rangos</div>
					<div style="padding:10px;">
					<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
					 
					<tr class="primertd">
					<td width="233" height="22" valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px">&nbsp;Rango</font></td>
					<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Invitar</font></td>
					<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Expulsar</font></td>
					<td width="163" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Ascender/descender</font></td>
					</tr>

					<tr class="listadointegrantes" id="7">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre7">'.$Rango8.'</span><span id="box7" style="display:none">
					<input id="Cargo7" name="Cargo7" type="text" value="'.$Rango8.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp7"/>
					<script>
						$("#inp7").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(7);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar7" onclick="javascript:EditarNombreRango(7);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar7" onclick="javascript:GuardarNombreRango(7);"/>&nbsp;</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre7">'.$Rango8.'</span><span id="box7" style="display:none">
					<input name="Cargo7" type="text" value="'.$Rango8.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp7"/>';
					echo '
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="7-1" src="imagenes/iconos/si.png" /></td>
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="7-2" src="imagenes/iconos/si.png" /></td>
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="7-3" src="imagenes/iconos/si.png" /></td>
					</tr>';

					

					if($Rango7 != null)
					{
					echo '<tr class="listadointegrantes" id="6">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre6">'.$Rango7.'</span><span id="box6" style="display:none">
					<input id="Cargo6" name="Cargo6" type="text" value="'.$Rango7.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp6"/>
					<script>
						$("#inp6").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(6);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar6" onclick="javascript:EditarNombreRango(6);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar6" onclick="javascript:GuardarNombreRango(6);"/>
					<img onclick="javascript:BorrarRango(7);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre6">'.$Rango7.'</span><span id="box6" style="display:none">
					<input name="Cargo6" type="text" value="'.$Rango7.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp6"/>';
					
					if($Rango7Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-1" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(19,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-1" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(19,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango7Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-2" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(20,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-2" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(20,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango7Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-3" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(21,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-3" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(21,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					echo '</tr>';
					}
					
					
					
					if($Rango6 != null)
					{
					echo '<tr class="listadointegrantes" id="5">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre5">'.$Rango6.'</span><span id="box5" style="display:none">
					<input id="Cargo5" name="Cargo5" type="text" value="'.$Rango6.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp5"/>
					<script>
						$("#inp5").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(5);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar5" onclick="javascript:EditarNombreRango(5);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar5" onclick="javascript:GuardarNombreRango(5);"/>
					<img onclick="javascript:BorrarRango(6);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre5">'.$Rango6.'</span><span id="box5" style="display:none">
					<input name="Cargo5" type="text" value="'.$Rango6.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp5"/>';
					
					if($Rango6Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-1" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(16,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-1" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(16,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango6Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-2" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(17,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-2" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(17,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango6Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-3" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(18,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-3" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(18,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					echo '</tr>';
					}
					
					
					
					if($Rango5 != null)
					{
					echo '<tr class="listadointegrantes" id="4">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre4">'.$Rango5.'</span><span id="box4" style="display:none">
					<input id="Cargo4" name="Cargo4" type="text" value="'.$Rango5.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp4"/>
					<script>
						$("#inp4").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(4);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar4" onclick="javascript:EditarNombreRango(4);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar4" onclick="javascript:GuardarNombreRango(4);"/>
					<img onclick="javascript:BorrarRango(5);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre4">'.$Rango5.'</span><span id="box4" style="display:none">
					<input name="Cargo4" type="text" value="'.$Rango5.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp4"/>';
					
					if($Rango5Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-1" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(1,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-1" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(1,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango5Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-2" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(2,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-2" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(2,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango5Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-3" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(3,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-3" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(3,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					echo '</tr>';
					}
					

					
					if($Rango4 != null)
					{
					echo '<tr class="listadointegrantes" id="3">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre3">'.$Rango4.'</span><span id="box3" style="display:none">
					<input id="Cargo3" name="Cargo3" type="text" value="'.$Rango4.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp3"/>
					<script>
						$("#inp3").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(3);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar3" onclick="javascript:EditarNombreRango(3);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar3" onclick="javascript:GuardarNombreRango(3);"/>
					<img onclick="javascript:BorrarRango(4);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre3">'.$Rango4.'</span><span id="box3" style="display:none">
					<input name="Cargo3" type="text" value="'.$Rango4.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp3"/>';
					
					if($Rango4Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-1" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(4,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-1" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(4,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango4Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-2" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(5,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else {					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-2" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(5,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango4Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-3" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(6,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else {					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-3" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(6,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					echo '</tr>';
					}
					
					
					
					if($Rango3 != null)
					{
					echo '<tr class="listadointegrantes" id="2">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre2">'.$Rango3.'</span><span id="box2" style="display:none">
					<input id="Cargo2" name="Cargo2" type="text" value="'.$Rango3.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp2"/>
					<script>
						$("#inp2").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(2);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar2" onclick="javascript:EditarNombreRango(2);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar2" onclick="javascript:GuardarNombreRango(2);"/>
					<img onclick="javascript:BorrarRango(3);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre2">'.$Rango3.'</span><span id="box2" style="display:none">
					<input name="Cargo2" type="text" value="'.$Rango3.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp2"/>';
					
					if($Rango3Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-1" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(7,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-1" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(7,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango3Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-2" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(8,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-2" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(8,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango3Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-3" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(9,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-3" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(9,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					echo '</tr>';
					}
					
					
					
					if($Rango2 != null)
					{
					echo '<tr class="listadointegrantes" id="1">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre1">'.$Rango2.'</span><span id="box1" style="display:none">
					<input id="Cargo1" name="Cargo1" type="text" value="'.$Rango2.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp1"/>
					<script>
						$("#inp1").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango("1");
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar1" onclick="javascript:EditarNombreRango(1);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar1" onclick="javascript:GuardarNombreRango(1);"/>
					<img onclick="javascript:BorrarRango(2);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre1">'.$Rango2.'</span><span id="box1" style="display:none">
					<input name="Cargo1" type="text" value="'.$Rango2.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp1"/>';
					
					if($Rango2Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-1" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(10,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-1" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(10,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango2Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-2" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(11,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-2" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(11,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango2Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-3" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(12,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-3" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(12,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					echo '</tr>';
					}
					
					
					echo '<tr class="listadointegrantes" id="0">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre0">'.$Rango1.'</span><span id="box0" style="display:none">
					<input id="Cargo0" name="Cargo0" type="text" value="'.$Rango1.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp0"/>
					<script>
						$("#inp0").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango("0");
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar0" onclick="javascript:EditarNombreRango(0);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar0" onclick="javascript:GuardarNombreRango(0);"/>&nbsp;</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre0">'.$Rango1.'</span><span id="box0" style="display:none">
					<input name="Cargo0" type="text" value="'.$Rango1.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp0"/>';
					
					if($Rango1Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-1" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(13,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else {					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-1" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(13,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango1Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-2" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(14,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else {					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-2" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(14,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					
					if($Rango1Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-3" src="imagenes/iconos/si.png" onclick="javascript:CambiarValor(15,1)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					else {					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-3" src="imagenes/iconos/no.png" onclick="javascript:CambiarValor(15,0)" style="cursor:pointer" title="Clic para modificar" /></td>'; }
					echo '</tr>';
			
					echo '</table>
					
<div class="hr">
</div>
<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
<tr class="primertd">
<td height="22" valign="middle" bgcolor="#FFFFFF">&nbsp;Agregar nuevo rango</td>
</tr>
<tr>
<td height="60" valign="middle" bgcolor="#FFFFFF">
<div id="rangos">
<div class="formulario-input" style="margin-left:20px;">
<span>Rango:
</span>
<input id="rango" name="rango" type="text" maxlength="20"/>
</div>
<div style="float:left">
<input id="botonagregar" name="" type="image" value="Agregar rango" src="./imagenes/boton-agregar.png" title="Agregar rango" onclick="javascript:AgregarRango('.$faccion.')"/>
</div>
</div>
<div id="bien" class="mensajebien" style="display:none">Agregando rango...
</div>
<div id="problema" class="mensajemal" style="display:none">
</div>
<script>
	$("#rango").keyup(function(event)
	{
		if(event.keyCode == 13)
		{
			AgregarRango();
		}
	});
</script>
</td>
</tr>
</table>
					
					</div>
					</div>';
}
else
{
					echo '<div class="td-gr"><div class="icono-td"><img src="imagenes/iconos/estrella.png"/></div>
					<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Rangos</div>
					<div style="padding:10px;">
					<table width="658" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
					 
					<tr class="primertd">
					<td width="233" height="22" valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px">&nbsp;Rango</font></td>
					<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Invitar</font></td>
					<td width="80" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Expulsar</font></td>
					<td width="163" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">Ascender/descender</font></td>
					</tr>

					<tr class="listadointegrantes" id="7">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre7">'.$Rango8.'</span><span id="box7" style="display:none">
					<input id="Cargo7" name="Cargo7" type="text" value="'.$Rango8.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp7"/>
					<script>
						$("#inp7").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(7);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar7" onclick="javascript:EditarNombreRango(7);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar7" onclick="javascript:GuardarNombreRango(7);"/>&nbsp;</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre7">'.$Rango8.'</span><span id="box7" style="display:none">
					<input name="Cargo7" type="text" value="'.$Rango8.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp7"/>';
					echo '
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="7-1" src="imagenes/iconos/si.png" /></td>
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="7-2" src="imagenes/iconos/si.png" /></td>
					<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="7-3" src="imagenes/iconos/si.png" /></td>
					</tr>';

					

					if($Rango7 != null)
					{
					echo '<tr class="listadointegrantes" id="6">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre6">'.$Rango7.'</span><span id="box6" style="display:none">
					<input id="Cargo6" name="Cargo6" type="text" value="'.$Rango7.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp6"/>
					<script>
						$("#inp6").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(6);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar6" onclick="javascript:EditarNombreRango(6);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar6" onclick="javascript:GuardarNombreRango(6);"/>
					<img onclick="javascript:BorrarRango(7);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre6">'.$Rango7.'</span><span id="box6" style="display:none">
					<input name="Cargo6" type="text" value="'.$Rango7.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp6"/>';
					
					if($Rango7Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-1" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-1" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango7Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-2" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-2" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango7Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-3" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="6-3" src="imagenes/iconos/no.png" </td>'; }
					echo '</tr>';
					}
					
					
					
					if($Rango6 != null)
					{
					echo '<tr class="listadointegrantes" id="5">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre5">'.$Rango6.'</span><span id="box5" style="display:none">
					<input id="Cargo5" name="Cargo5" type="text" value="'.$Rango6.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp5"/>
					<script>
						$("#inp5").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(5);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar5" onclick="javascript:EditarNombreRango(5);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar5" onclick="javascript:GuardarNombreRango(5);"/>
					<img onclick="javascript:BorrarRango(6);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre5">'.$Rango6.'</span><span id="box5" style="display:none">
					<input name="Cargo5" type="text" value="'.$Rango6.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp5"/>';
					
					if($Rango6Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-1" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-1" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango6Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-2" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-2" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango6Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-3" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="5-3" src="imagenes/iconos/no.png" </td>'; }
					echo '</tr>';
					}
					
					
					
					if($Rango5 != null)
					{
					echo '<tr class="listadointegrantes" id="4">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre4">'.$Rango5.'</span><span id="box4" style="display:none">
					<input id="Cargo4" name="Cargo4" type="text" value="'.$Rango5.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp4"/>
					<script>
						$("#inp4").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(4);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar4" onclick="javascript:EditarNombreRango(4);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar4" onclick="javascript:GuardarNombreRango(4);"/>
					<img onclick="javascript:BorrarRango(5);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre4">'.$Rango5.'</span><span id="box4" style="display:none">
					<input name="Cargo4" type="text" value="'.$Rango5.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp4"/>';
					
					if($Rango5Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-1" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-1" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango5Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-2" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-2" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango5Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-3" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="4-3" src="imagenes/iconos/no.png" </td>'; }
					echo '</tr>';
					}
					

					
					if($Rango4 != null)
					{
					echo '<tr class="listadointegrantes" id="3">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre3">'.$Rango4.'</span><span id="box3" style="display:none">
					<input id="Cargo3" name="Cargo3" type="text" value="'.$Rango4.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp3"/>
					<script>
						$("#inp3").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(3);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar3" onclick="javascript:EditarNombreRango(3);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar3" onclick="javascript:GuardarNombreRango(3);"/>
					<img onclick="javascript:BorrarRango(4);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre3">'.$Rango4.'</span><span id="box3" style="display:none">
					<input name="Cargo3" type="text" value="'.$Rango4.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp3"/>';
					
					if($Rango4Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-1" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-1" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango4Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-2" src="imagenes/iconos/si.png" </td>'; }
					else {					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-2" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango4Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-3" src="imagenes/iconos/si.png" </td>'; }
					else {					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="3-3" src="imagenes/iconos/no.png" </td>'; }
					echo '</tr>';
					}
					
					
					
					if($Rango3 != null)
					{
					echo '<tr class="listadointegrantes" id="2">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre2">'.$Rango3.'</span><span id="box2" style="display:none">
					<input id="Cargo2" name="Cargo2" type="text" value="'.$Rango3.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp2"/>
					<script>
						$("#inp2").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango(2);
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar2" onclick="javascript:EditarNombreRango(2);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar2" onclick="javascript:GuardarNombreRango(2);"/>
					<img onclick="javascript:BorrarRango(3);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre2">'.$Rango3.'</span><span id="box2" style="display:none">
					<input name="Cargo2" type="text" value="'.$Rango3.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp2"/>';
					
					if($Rango3Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-1" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-1" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango3Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-2" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-2" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango3Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-3" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="2-3" src="imagenes/iconos/no.png" </td>'; }
					echo '</tr>';
					}
					
					
					
					if($Rango2 != null)
					{
					echo '<tr class="listadointegrantes" id="1">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre1">'.$Rango2.'</span><span id="box1" style="display:none">
					<input id="Cargo1" name="Cargo1" type="text" value="'.$Rango2.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp1"/>
					<script>
						$("#inp1").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango("1");
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar1" onclick="javascript:EditarNombreRango(1);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar1" onclick="javascript:GuardarNombreRango(1);"/>
					<img onclick="javascript:BorrarRango(2);" style="cursor:pointer" title="Borrar rango" src="imagenes/iconos/borrar.png" align="absmiddle"/>&nbsp;
					</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre1">'.$Rango2.'</span><span id="box1" style="display:none">
					<input name="Cargo1" type="text" value="'.$Rango2.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp1"/>';
					
					if($Rango2Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-1" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-1" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango2Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-2" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-2" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango2Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-3" src="imagenes/iconos/si.png" </td>'; }
					else { 					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="1-3" src="imagenes/iconos/no.png" </td>'; }
					echo '</tr>';
					}
					
					
					echo '<tr class="listadointegrantes" id="0">';
					if($rangojugador >= 8)
					{
						echo '
					<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre0">'.$Rango1.'</span><span id="box0" style="display:none">
					<input id="Cargo0" name="Cargo0" type="text" value="'.$Rango1.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp0"/>
					<script>
						$("#inp0").keyup(function(event){
							if(event.keyCode == 13){
								GuardarNombreRango("0");
							}
						});
					</script></span><span style="float:right"><img src="imagenes/iconos/editar.png" align="absmiddle" title="Editar nombre de rango" style="cursor:pointer" id="editar0" onclick="javascript:EditarNombreRango(0);"/>
					<img src="imagenes/iconos/guardar.png" align="absmiddle" title="Guardar nombre de rango" style="cursor:pointer; display:none" id="guardar0" onclick="javascript:GuardarNombreRango(0);"/>&nbsp;</span></div></td>';
					}
					else echo '<td height="22" valign="middle" bgcolor="#FFFFFF"><div class="cadena2"><span id="nombre0">'.$Rango1.'</span><span id="box0" style="display:none">
					<input name="Cargo0" type="text" value="'.$Rango1.'" style="border:1px solid #DDDDDD; height:16px; margin-left:5px; padding-left:5px; background-color:#F6F6F6" id="inp0"/>';
					
					if($Rango1Inv == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-1" src="imagenes/iconos/si.png" </td>'; }
					else {					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-1" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango1Exp == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-2" src="imagenes/iconos/si.png" </td>'; }
					else {					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-2" src="imagenes/iconos/no.png" </td>'; }
					
					if($Rango1Edi == 1) {	echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-3" src="imagenes/iconos/si.png" </td>'; }
					else {					echo '<td align="center" valign="middle" bgcolor="#FFFFFF"><img id="0-3" src="imagenes/iconos/no.png" </td>'; }
					echo '</tr>';
			
					echo '</table>
					
					</div>
					</div>';
}
?>

</div>


<script>
var procesando = 0;

function Invitar(fac) 
{
	if(procesando == 0)
	{
		var n = document.getElementById('inputString').value;
		$.get("./mandar-invitacion.php?p=" + n + "&f=" + fac , function(data) {
			if(data == 1){
				location.href='./entrar.php';
			}else if(data == 2){
				alert("Este jugador ya est� en una banda.");
				document.getElementById("inputString").value = "";
			}else if(data == 3){
				alert("No tienes permiso para mandar invitaciones.");
				location.href='./tubanda.php';
			}else if(data == 4){
				alert("Ese jugador no existe");
				document.getElementById("inputString").value = "";
			}else if(data == 44){
				alert("No existe ese usuario en la base de datos.");
				document.getElementById("inputString").value = "";
			}else if(data == 46){
				alert("La banda ya est� llena.");
				document.getElementById("inputString").value = "";
			}else if(data == 71){
				alert("Este jugador ya esta invitado.");
				document.getElementById("inputString").value = "";
			}else if(data == 99){
				alert("No existe ese usuario en la base de datos.");
				document.getElementById("inputString").value = "";
			}else if(data == 5){
				procesando = 0;
				alert("El jugador fue invitado correctamente.");
				location.href='./tubanda.php';
			}
			else {
				alert("Error 56 contacta a alg�n administrador.");
			}
			procesando = 0;
		});
	}
}

function CambiarRango(fac, n) 
{
	if(procesando == 0)
	{
		if(n >= 8) 
		{
			procesando = 1;
			var resp = confirm("Vas a entregar el liderazgo de la banda a otro usuario.\n�Est�s seguro?\nPasar�s a tener su rango.");
			if(resp == true)
			{
					$.get("./cambiar-rango.php?j=" + fac + "&r=" + n, function(data) {
					if(data == 1){
						location.href='./index.php';
					}else if(data == 2){
						alert("No tienes permisos para cambiar de rango.");
						location.href='./tubanda.php';
					}else if(data == 3){
						alert("Ese jugador no existe.");
						location.href='./tubanda.php';
					}else if(data == 4){
						alert("Ese jugador no pertenece a tu banda.");
					}else if(data == 5){
						alert("No puedes dar un rango superior al tuyo.");
					}else if(data == 6){
						alert("El jugador tiene un rango superior al tuyo.");
						location.href='./tubanda.php';
					}else if(data == 7){
						procesando = 0;
						location.href='./tubanda.php';
					}
					else {
						alert("Error 56 contacta a alg�n administrador.");
					}
					procesando = 0;
				});
			}
			else {
				location.href='./tubanda.php';
			}
		}
		else 
		{
			procesando = 1;
			$.get("./cambiar-rango.php?j=" + fac + "&r=" + n, function(data) {
				procesando = 1;
				if(data == 1){
					location.href='./index.php';
				}else if(data == 2){
					alert("No tienes permisos para cambiar de rango.");
					location.href='./tubanda.php';
				}else if(data == 3){
					alert("Ese jugador no existe.");
					location.href='./tubanda.php';
				}else if(data == 4){
					alert("Ese jugador no pertenece a tu banda.");
				}else if(data == 5){
					alert("No puedes dar un rango superior al tuyo.");
				}else if(data == 6){
					alert("El jugador tiene un rango superior al tuyo.");
					location.href='./tubanda.php';
				}else if(data == 7){
					procesando = 0;
					location.href='./tubanda.php';
				}
				else {
					alert("Error 56 contacta a alg�n administrador.");
				}
			});
		}
	}
}

function ExpulsarMiembro(fac) 
{
	if(procesando == 0)
	{
		var resp = confirm("�Realmente deseas expulsar a este jugador?");
		if(resp == true)
		{
			$.get("./expulsar-jugador.php?j=" + fac , function(data) 
			{
				if(data == 1){
					alert("No tienes permiso para expulsar a miembros.");
					location.href='./tubanda.php';
				}else if(data == 2){
					alert("El jugador especificado no existe.");
					location.href='./tubanda.php';
				}else if(data == 3){
					alert("Ese jugador no pertenece a tu banda.");
				}else if(data == 4){
					alert("No puedes expulsar a alguien con m�s rango que t�.");
					location.href='./tubanda.php';
				}else if(data == 5){
					procesando = 0;
					location.href='./tubanda.php';
				}
				else {
					alert("Error 56 contacta a alg�n administrador.");
				}
				procesando = 0;
			});
		}
	}
} 
</script>

<?php 
if($rangojugador >= 8) 
{
?>

<script>

function AgregarRango(facc) 
{
	var n = document.getElementById("rango").value;
	if(procesando == 0)
	{
		$.get("./agregar-rango.php?j=" + n + "&v=" + facc, function(data)
		{
			if(data == 1)
			{
				alert("Rango agregado correctamente.");
				location.href='./tubanda.php';
			}
			else if(data == 2)
			{
				alert("Las bandas no pueden tener m�s de 8 rangos.");
				document.getElementById("rango").value = "";
			}
			else if(data == 3)
			{
				alert("Ya hay un rango igual.");
				document.getElementById("rango").value = "";
			}
			else if(data == 4)
			{
				alert("Solo el lider puede agregar rangos nuevos.");
				location.href='./tubanda.php';
			}
			else if(data == 5)
			{
				alert("El nombre del rango solo puede contener letras y espacios\nAdem�s debe contener entre 3 y 20 caracteres.");
				document.getElementById("rango").value = "";
			}
			else 
			{
				alert("Error 56 contacta a alg�n administrador.");
			}
			procesando = 0;
		});
	}
}

function BorrarRango(rango) 
{
	if(procesando == 0)
	{
		$.get("./borrar-rango.php?j=" + rango , function(data) 
		{
			if(data == 1){
				alert("No tienes permiso para expulsar a miembros.");
				location.href='./tubanda.php';
			}else if(data == 5){
				procesando = 0;
				location.href='./tubanda.php';
			}
			else {
				alert("Error 56 contacta a alg�n administrador.");
			}
			procesando = 0;
		});
	}
}

function CambiarValor(rango,valor) 
{
	if(procesando == 0)
	{
		procesando = 1;
		$.get("./cambiar-valor.php?r=" + rango + "&v=" + valor, function(data) {
			procesando = 1;
			if(data == 1){
				location.href='./index.php';
			}else if(data == 2){
				alert("No tienes permisos para hacer esto.");
				location.href='./tubanda.php';
			}else if(data == 3){
				procesando = 0;
				location.href='./tubanda.php';
			}
			else {
				alert("Error 56 contacta a alg�n administrador.");
			}
		});
	}
}

function GuardarNombreRango(id) 
{
	if(id == 7) { var n = document.getElementById("Cargo7").value; }
	if(id == 6) { var n = document.getElementById("Cargo6").value; }
	if(id == 5) { var n = document.getElementById("Cargo5").value; }
	if(id == 4) { var n = document.getElementById("Cargo4").value; }
	if(id == 3) { var n = document.getElementById("Cargo3").value; }
	if(id == 2) { var n = document.getElementById("Cargo2").value; }
	if(id == 1) { var n = document.getElementById("Cargo1").value; }
	if(id == 0) { var n = document.getElementById("Cargo0").value; }
	if(procesando == 0)
	{
		if
		(
		n == "<?php echo $Rango1; ?>" || 
		n == "<?php echo $Rango2; ?>" || 
		n == "<?php echo $Rango3; ?>" || 
		n == "<?php echo $Rango4; ?>" || 
		n == "<?php echo $Rango5; ?>" || 
		n == "<?php echo $Rango6; ?>" || 
		n == "<?php echo $Rango7; ?>" || 
		n == "<?php echo $Rango8; ?>"
		)
		{
			alert("Ese nombre de rango ya existe en tu banda.");
			location.href="./tubanda.php";
		}
		else
		{
			$.get("./guardar-nombre.php?p=" + id + "&f=" + n , function(data) {
				if(data == 1)
				{
					location.href='./index.php';
				}
				else if(data == 2)
				{
					alert("No puedes cambiar el nombre de los rangos.");
					location.href='./tubanda.php';
				}
				else if(data == 3)
				{
					procesando = 0;
					location.href='./tubanda.php';
				}
				else 
				{
					alert("Error 56 contacta a alg�n administrador.");
				}
				procesando = 0;
			});
		}
    }
}
</script>

<?php 
}
?>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>