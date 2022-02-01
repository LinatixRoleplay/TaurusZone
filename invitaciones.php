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
//else header('location: ingresar.php');
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

<?php include('header.php') ?>

<div id="contenido">
<div id="contenido-izquierdo">

<div class="td-gr">
<div class="icono-td"><img src="imagenes/iconos/bandera.png" /></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Invitaciones de banda</div>
<div style="padding:10px;">
<?php
$jugador = $_SESSION['User'];

$sql1 = $con->prepare("SELECT * FROM `invitaciones` WHERE `Invitado` = :usuario");
$sql1->bindParam(':usuario', $jugador, PDO::PARAM_STR);
$sql1->execute();


$sql1_rows = $sql1->rowCount();

if($sql1_rows > 0)
{
	?>
	<table width="655" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
	<tr class="primertd">
	<td width="259" height="22" valign="middle" align="center"><font size="2px"><b>&nbsp;Nombre de la banda</b></font></td>
	<td width="120" align="center" valign="middle"><font size="2px"><b>Tipo de banda </b></font></td>
	<td width="179" align="center" valign="middle"><font size="2px"><b>Fecha de invitaci&oacute;n </b></font></td>
	<td width="105" align="center" valign="middle"><font size="2px"><b>&nbsp;</b></font></td>
	</tr>
	<?php
	while($row = $sql1->fetch())
	{
		$fechafmt1 = date_create($row['Fecha']);
		$fechafmt = date_format($fechafmt1, 'd-m-Y');
		$horafmt = date_format($fechafmt1, 'H:i:s');
				
		$sql2 = $con->prepare("SELECT * FROM `facciones` WHERE `id` = :bandas");
		$sql2->bindParam(':bandas', $row['BandaID'], PDO::PARAM_STR);
		$sql2->execute();
		
		
		$sql2_rows = $sql2->rowCount();
		
		if($sql2_rows > 0)
		{
			while($row2 = $sql2->fetch())
			{
				echo '<tr id="bandaid">
				<td height="22" valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px">'.$row2['Nombre'].'</font></td>
				<td align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">'.$row2['tipobanda'].'</font></td>
				<td align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-size:12px">'.$fechafmt.' a las '.$horafmt.'</span></td>
				<td align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px"><img src="imagenes/iconos/si.png" onclick="javascript:AceptarInvitacion('.$row2['id'].');" style="cursor:pointer" title="Aceptar invitación"/>&nbsp;&nbsp;<img src="imagenes/iconos/no.png" onclick="javascript:CancelarInvitacion('.$row2['id'].');" style="cursor:pointer" title="Cancelar invitación"/></font></td>
				</tr>';
			}
		}
	}
}
else
{
	//header('Location: ./cuenta.php');
	echo "<script>window.location='cuenta.php';</script>";
}
?>
	<!--
	<tr id="sininvitaciones" style="display:none">
	<td colspan="4" align="center" valign="middle" bgcolor="#FFFFFF" height="22">No hay más invitaciones</td>
	</tr>
	-->
</table>
</div>
</div>
</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
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

<?php include "pie.php" ?>