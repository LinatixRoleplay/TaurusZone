<?php

session_start();
error_reporting(0);
include_once('./css/index.php');

$idcambio = $_GET['c'];

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
		$validarcorrero = $datos['CorreoValido'];
		$cambiacorreo = $datos['CambiaCorreo'];
		$correoacambiar = $datos['CorreoACambiar'];
		$tiempocorreo = $datos['TiempoCorreo'];
		$email = $datos['Email'];
		$fz = $datos['Moneda'];
		$ropa = $datos['Skin'];
		$platabanco = $datos['Banco'];
		$faccion = $datos['Faccion'];
		$razon = $datos['razon'];
		$ban = $datos['Baneado'];
		$Conexion = $datos['Conexion'];
    }
}
else echo "<script>window.location='ingresar.php';</script>";
$dinerototal = $money+$platabanco;
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

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title><?php echo $NombreServidor?> Roleplay - Comprar membres&iacutea VIP</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css"> 

<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />

<script src="https://code.jquery.com/jquery-latest.js"></script>

<style>DIV#loader.loading{background:url(./imagenes/iconos/spinner.gif) no-repeat center center;}#loader{width:300px;height:344px;background-color:#000000}#negro{background-color:#FFFFFF;width:300px;border:solid 1px #DEDEDE;padding:3px;margin-top:5px;margin-left:15px;margin-bottom:5px;float:left;}.skinid{border:solid 1px #DEDEDE;font-size:11px;width:20px;margin:3px 3px 0 3px;padding:3px}.botonskin{border:solid 1px #DEDEDE;font-size:11px;margin:3px 3px 0 3px;padding:2px;background-color:#FFFFFF;cursor:pointer}.bloquederecho{float:left;width:345px;}.bloq{background-color:#FFFFFF;border:solid 1px #DEDEDE;margin:5px;padding:5px;}body{ font-size: 1px;}</style>

</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">



<tbody><tr>

<td width="997">

<?php include("header.php") ?>

<div id="contenido-izquierdo">
<br />
<table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><strong>Cancelar cambio de correo</strong></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left" colspan="2">
<?php
if($cambiacorreo == 1)
{
	$st = $con->prepare("UPDATE usuarios SET CambiaCorreo='0', TiempoCorreo='0', CorreoACambiar='' WHERE Username = :usuario");
	$st->bindParam(':usuario', $User, PDO::PARAM_STR);
	$st->execute();
	
?>
<img src="./imagenes/iconos/good.png" /> La solicitud de cambio de correo ha sido eliminada, su cuenta seguirá teniendo el correo actual. </td>
<?php
}
if($cambiacorreo == 0)
{
?>
<img src="./imagenes/iconos/modal_close.png" /> La solicitud de cambio de correo ya ha sido cancelada. </td>
<?php
}
?>
</tr>
</tbody>
</table>
</div>

<script>
var procesando = 0;
function AceptarInvitacion(fac) {
	if(procesando == 0){
		$.get("aceptar-invitacion.php?f=" + fac , function(data) {
			if(data == 1){
				alert("No tienes ninguna invitación de esa banda.");
			}else if(data == 2){
				alert("Ya perteneces a una banda.");
			}else if(data == 3){
				alert("Esa banda no existe.");
			}else if(data == 4){
				alert("Esa banda está llena.");
			}else if(data == 5){
				procesando = 0;
				alert("¡Felicitaciones! Te has unido a la banda correctamente.");
				location.href='./tubanda.php';
			}
			else {
				alert("Error 56 contacta a algún administrador.");
			}
			procesando = 0;
		});
	}
}
function CancelarInvitacion(fac) {
	if(procesando == 0){
		$.get("cancelar-invitacion.php?f=" + fac , function(data) {
			if(data == 1){
				alert("El jugador no tiene ninguna invitación.");
			}else if(data == 2){
				alert("No está invitado a la banda.");
			}else if(data == 5){
				location.href='./invitaciones.php';
				procesando = 1;
			}
			else {
				alert("Error 56 contacta a algún administrador.");
			}
			procesando = 0;
		});
	}
}
</script>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>