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
	
	$row = $stmt->fetch();

	$name = $row['Username'];
	$faccion = $row['Faccion'];
	$fz = $row['Moneda'];
	$maria = $row['Marihuana'];
	$score = $row['Nivel'];
	$money = $row['Money'];
	$platabanco = $row['Banco'];
	$ropa = $row['Skin'];
	$razon = $row['razon'];
	$ban = $row['Baneado'];
	$validarcorrero = $row['CorreoValido'];
	$cambiacorreo = $row['CambiaCorreo'];
	$correoacambiar = $row['CorreoACambiar'];
	$tiempocorreo = $row['TiempoCorreo'];
	$email = $row['Email'];
	$Conexion = $row['Conexion'];
	$exp = $row['Experiencia'];
	$arrestado = $row['arrestado'];
	$horasdejuego = $row['horasjugadas'];
	$numerotlf = $row['Numero'];
	$vida = $row['Vida'];
	$Chaleco = $row['Chaleco'];
	$crack = $row['Crack'];
	$medicamentos = $row['Medicamentos'];
	$guia = $row['Agenda'];
	$piezas = $row['Materiales'];
	$repuestos = $row['Repuestos'];
	$radio = $row['Radio'];
	$totems = $row['totems'];
	$admin = $row['Admin'];
	$blanca = $row['WP1'];
	$pistola = $row['WP2'];
	$escopeta = $row['WP3'];
	$subfusil = $row['WP4'];
	$asalto = $row['WP5'];
	$rifle = $row['WP6'];
	$granada = $row['WP8'];
	$camara = $row['WP9'];
	$regalo = $row['WP10'];
	$exparmero = $row['ExpArmero'];
	$expminero = $row['ExpMinero'];
	$exppiloto = $row['ExpPiloto'];
	$expladron = $row['ExpLadron'];
	$exppescador = $row['ExpPescador'];
	$expbasurero = $row['ExpBasurero'];
	$expcamionero = $row['ExpCamionero'];
	$exptransportista = $row['ExpTransportista'];
	$nivelarmero = $row['NivelArmero'];
	$nivelladron = $row['NivelLadron'];
	$nivelpiloto = $row['NivelPiloto'];
	$nivelminero = $row['NivelMinero'];
	$nivelpescador = $row['NivelPescador'];
	$nivelbasurero = $row['NivelBasurero'];
	$nivelcamionero = $row['NivelCamionero'];
	$niveltransportista = $row['NivelTransportista'];

	unset($row); //Borrar variable row

	$dominio = strstr($email, '@');

}
else echo "<script>window.location='ingresar.php';</script>";

if($Conexion == '1')
{
	echo "<script>window.location='reg.php?u=2';</script>";
}

if($numerotlf == 0)
{
	$numerodetelefono == "No tiene";
}

$tucuentaAC = "-ac";
$mcuenta = "actual1";
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
<title><?php echo $NombreServidor?> Roleplay - <?php include_once('./kev/idioma.php'); echo $Texto_Index_1;?></title>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<link rel="stylesheet" type="text/css" href="./css/layer.css">
<style>body{font-size: 13px;}.verde-btn{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#8DCC35,#459015) repeat scroll 0 0 #459015;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8DCC35',endColorstr='#459015');background:-webkit-gradient(linear,left top,left bottom,from(#8DCC35),to(#459015));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF!important;text-shadow:0 1px 0 rgba(0,0,0,0.3);font-size:15px!important;padding:2px 6px!important;}.verde-btn:hover{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#A2D956,#479815) repeat scroll 0 0 #A2D956;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#A2D956',endColorstr='#479815');background:-webkit-gradient(linear,left top,left bottom,from(#A2D956),to(#479815));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF;text-shadow:0 1px 0 rgba(0,0,0,0.3);}.btn{padding:4px 12px;margin-bottom:0;line-height:20px;text-align:center;vertical-align:middle;cursor:pointer;color:#333333;border-radius:7px;background-color:#00CC00}</style>
<link rel="stylesheet" href="./css/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="./js/jquery.leanModal.min.js"></script>
<script>
 var cargadocambiarcorreo = 0;
$(function() {
	$( "#tabs" ).tabs({
		beforeLoad: function( event, ui ) {
			ui.panel.html("<div style=\"padding-left:300px;padding-top:80px;padding-bottom:100px;font-size:15px;\"><img src=\"./imagenes/iconos/spinner.gif\"> Cargando...</div>");
			ui.jqXHR.error(function() {
				ui.panel.html("Problema al cargar. Por favor, recarga la página." );
			});
		}
	});
	$('a[rel*=leanModal]').leanModal({ top : 200, closeButton: ".modal_close" });
	$("#cambiar-correo").click(function() {
		if(cargadocambiarcorreo == 0){
			$("#cargando-cambiar-correo").fadeIn();
			$("#cambiar-correo-ct").load("cambiarcorreo.php",  function(){
				$("#cargando-cambiar-correo").hide();
				$("#cambiar-correo-ct").fadeIn(800);
				cargadocambiarcorreo = 1;
			});
		}else{
			$("#cambiar-correo-ct").fadeIn(800);
		}
	});
});
</script>

<script>
 var cargadocambiarcorreo = 0;
$(function() {
	$("#email")
	 	.mouseover(function() {
		$("#email").html("<?php echo $email;?>");
		})
		.mouseout(function() {
		$("#email").html("***********<?php echo $dominio;?>");
		});
});
</script>
</head>
<body>
<div style="width:0;height:0; overflow:hidden"><img src="./imagenes/iconos/spinner.gif"></div>
<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

<tbody><tr>
<td width="997">

<?php include('header.php') ?>

<div id="contenido">
<div id="contenido-izquierdo">
<div style="height:160px; float:left; padding-top:20px">
<table width="680" align="center" id="bloquesp">
<tbody><tr>
<td align="center" width="226"><a href="./cambiar-nombre.php" title="<?php echo $Texto_Index_101;?>"><img src="./imagenes/nuevo-panel/cambiar-nombre.png" width="100"><div style="height:10px"></div><button class="verde-btn btn" type="button"><?php echo $Texto_Index_101;?></button></a></td>
<td align="center" width="227"><a href="./comprar-vehiculos.php" title="<?php echo $Texto_Index_102;?>"><img src="./imagenes/nuevo-panel/vehiculos.png" width="100"><div style="height:10px"></div><button class="verde-btn btn" type="button"><?php echo $Texto_Index_102;?></button></a></td>
<td align="center" width="227"><a href="./comprar-ropa.php" title="<?php echo $Texto_Index_103;?>"><img src="./imagenes/nuevo-panel/comprar-ropa.png" width="100"><div style="height:10px"></div><button class="verde-btn btn" type="button"><?php echo $Texto_Index_103;?></button></a></td>
</tr>
</tbody></table>
</div>
<div style="float:left; width:690px">
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="info" aria-labelledby="ui-id-1" aria-selected="true"><a href="#info" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-1"><?php echo $Texto_Index_1;?></a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-1" aria-labelledby="ui-id-2" aria-selected="false"><a href="vehiculos.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-2"><?php echo $Texto_Index_95;?></a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-6" aria-labelledby="ui-id-7" aria-selected="false"><a href="propiedades.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-7"><?php echo $Texto_Index_96;?></a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-6" aria-labelledby="ui-id-7" aria-selected="false"><a href="prendas.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-7"><?php echo $Texto_Index_97;?></a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-6" aria-labelledby="ui-id-7" aria-selected="false"><a href="banco.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-7"><?php echo $Texto_Index_98;?></a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-6" aria-labelledby="ui-id-7" aria-selected="false"><a href="firmas.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-7"><?php echo $Texto_Index_99;?></a></li>
<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1"; style="font-size:12px;"; aria-controls="ui-tabs-6" aria-labelledby="ui-id-7" aria-selected="false"><a href="log.php" class="ui-tabs-anchor" role="presentation" tabindex="-1"; style="font-size:13px;"; id="ui-id-7"><?php echo $Texto_Index_100;?></a></li>
</ul>
<div id="info" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
<br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF; font-size: 12px;"><strong><?php echo $Texto_Index_104;?></strong></td></tr>
<tr>
<?php
$dinerototal = $money+$platabanco;
if($guia == "No")
{
	$guia == "No tiene";
}
if($radio == "No")
{
	$radio == "No tiene";
}
if($guia == 1)
{
	$guia == "Si tiene";
}?>
<td valign="middle" bgcolor="#FFFFFF" align="left" colspan="2">
<div style="padding:10px; float:left; width:290px; margin-left:5px">
<div style="float:left"><img src="./imagenes/iconos/tarjeta.png">&nbsp;</div><div>&nbsp;<font size="2px"><?php echo $Texto_Index_105;?>:<span style="float:right;"><a title="<?php echo $Texto_Index_106;?>." href="./u/<?php echo $name;?>"><?php echo $name;?></a></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/dinero.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_107;?>:<span style="float:right; color:green;">$<?php echo number_format($dinerototal, 0, '', '.');?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/nivel2.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_108;?>:<span style="float:right;"><?php echo $score;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/reputacion.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_109;?>:<span style="float:right;"><?php echo $exp;?>/<?php
switch ($score){
	case 1:  echo 4;    break;
	case 2:  echo 8;   break;
	case 3:  echo 12;   break;
	case 4:  echo 25;   break;
	case 5:  echo 50;   break;
	case 6:  echo 80;   break;
	case 7:  echo 140;  break;
	case 8:  echo 230;  break;
	case 9:  echo 400;  break;
	case 10: echo 660;  break;
	case 11: echo 1100; break;
	case 12: echo 1800; break;
	case 13: echo 3000;	break;
	case 14: echo 5000;	break;
	case 15: echo 7000;	break;
}
?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/arrestado.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_110;?>:<span style="float:right;"><?php echo $arrestado;?></span></div>
<div class="hr"></div>
</div>
<div style="padding:10px; float:left; width:310px; margin-left:5px">
<div style="float:left"><img src="./imagenes/iconos/tiempo.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_111;?>:<span style="float:right;"><?php echo $horasdejuego;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/tel.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_112;?>:<span style="float:right;"><?php if($numerotlf== 0){echo"No tiene";}else{echo $numerotlf;}?></span></div>
<div class="hr"></div>

<div style="float:left"><img src="./imagenes/iconos/email.png"/>&nbsp;</div><div>&nbsp;E-Mail:
<span style="float:right;">
<span id="email">***********<?php echo $dominio;?></span>
<a href="#cambiarcorreo" title="Cambiar direcci&oacute;n de correo." rel="leanModal" id="cambiar-correo"><img src="./imagenes/configuracion-16.png" align="absmiddle"/></a>
</span>
</div>
<div class="hr"></div>

<div style="float:left"><img src="./imagenes/iconos/corazon.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_114;?>:<span style="float:right;"><?php echo $vida;?>/100</span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/blindaje.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_115;?>:<span style="float:right;"><?php echo $Chaleco;?>/100</span></div>
<div class="hr"></div>
</font>
</div>
</td>
</tr>
</tbody>
</table>
<br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;font-size: 12px;"><strong><?php echo $Texto_Index_116;?></strong></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left" colspan="2">
<div style="padding:10px; float:left; width:290px; margin-left:5px">
<div style="float:left"><img src="./imagenes/iconos/crack.png">&nbsp;</div><div>&nbsp;<font size="2px"><?php echo $Texto_Index_117;?>:<span style="float:right;"><?php echo $crack;?>g.</span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/pildora.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_118;?>:<span style="float:right;"><?php echo $medicamentos;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/marihuana.png">&nbsp;</div><div>&nbsp;Marihuana:<span style="float:right;"><?php echo $maria;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/guia.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_119;?>:<span style="float:right;"><?php if($guia == 0){echo"No tiene";}else{echo "S&iacute;";}?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/piezas.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_120;?>:<span style="float:right;"><?php echo $piezas;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/herramientas.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_121;?>:<span style="float:right;"><?php echo $repuestos;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/radiocomunicador.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_122;?>:<span style="float:right;"><?php if($radio == 0){echo"No tiene";}else{echo "S&iacute;";}?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/totemx16.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_123;?>:<span style="float:right;"><?php echo $totems;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/oz.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_124;?> <?php echo $Diminutivo?>:<span style="float:right;"><?php echo $fz;?></span></div>
<div class="hr"></div>
</div>
<div style="padding:10px; float:left; width:310px; margin-left:5px">
<div style="float:left"><img src="imagenes/iconos/pistolas.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_125;?>:<span style="float:right;"><?php echo GetWeaponName($pistola);?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/escopeta.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_126;?>:<span style="float:right;"><?php echo GetWeaponName($escopeta);?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/subfusil.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_127;?>:<span style="float:right;"><?php echo GetWeaponName($subfusil);?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/asalto.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_128;?>:<span style="float:right;"><?php echo GetWeaponName($asalto);?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/rifle.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_129;?>:<span style="float:right;"><?php echo GetWeaponName($rifle);?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/armas-blancas.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_130;?>:<span style="float:right;"><?php echo GetWeaponName($blanca);?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/granada.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_131;?>:<span style="float:right;"><?php echo GetWeaponName($granada);?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/regalos.png">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_132;?>:<span style="float:right;"><?php echo GetWeaponName($regalo);?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="imagenes/iconos/camara.png">&nbsp;</div><div>&nbsp;Cámara:<span style="float:right;"><?php echo GetWeaponName($camara);?></span></div>
<div class="hr"></div>
</div>
</font>
</td>
</tr>
</tbody>
</table>
<br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;font-size: 12px;" colspan="2"><strong><?php echo $Texto_Index_133;?></strong></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left">
<table width="100%" cellspacing="1" cellpadding="6" border="0" bgcolor="#D9D9D9" align="center">
<tbody>
<tr>
<td valign="middle" align="left" bgcolor="#F4F4F4"><font size="2px"><?php echo $Texto_Index_134;?></font></td>
<td valign="middle" align="center" bgcolor="#F4F4F4"><font size="2px"><?php echo $Texto_Index_108;?></font></td>
<td valign="middle" align="center" bgcolor="#F4F4F4"><font size="2px"><?php echo $Texto_Index_135;?></font></td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - <?php echo $Texto_Index_136;?></font></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $nivelcamionero;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $expcamionero;?>/50</td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - <?php echo $Texto_Index_137;?></font></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $nivelpiloto;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $exppiloto;?>/50</td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - <?php echo $Texto_Index_138;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $nivelbasurero;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $expbasurero;?>/50</td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - <?php echo $Texto_Index_139;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $nivelminero;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $expminero;?>/50</td></font>
</tr>
</tbody>
</table>
</td>
<td valign="top" bgcolor="#FFFFFF" align="left">
<table width="100%" cellspacing="1" cellpadding="6" border="0" bgcolor="#D9D9D9" align="center">
<tbody>
<tr>
<td valign="middle" align="left" bgcolor="#F4F4F4"><font size="2px"><?php echo $Texto_Index_134;?></font></td>
<td valign="middle" align="center" bgcolor="#F4F4F4"><font size="2px"><?php echo $Texto_Index_108;?></font></td>
<td valign="middle" align="center" bgcolor="#F4F4F4"><font size="2px"><?php echo $Texto_Index_135;?></font></td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - <?php echo $Texto_Index_140;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $nivelarmero;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $exparmero;?>/50</td></font>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - <?php echo $Texto_Index_141;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $nivelladron;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $expladron;?>/50</td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - <?php echo $Texto_Index_142;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $niveltransportista;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $exptransportista;?>/50</td></font>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"> - <?php echo $Texto_Index_143;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $nivelpescador;?></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><?php echo $exppescador;?>/50</td></font>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div><div id="ui-tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-2" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-3" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-4" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-5" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-6" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-7" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div>
</div></div>
</div>

<?php
function GetWeaponName($idweapon)
{
    if($idweapon == 0){ return "No tiene"; }
    else if($idweapon == 1){ return "Manopla"; }
    else if($idweapon == 2){ return "Palo de golf"; }
    else if($idweapon == 3){ return "Porra"; }
	else if($idweapon == 4){ return "Cuchillo"; }
	else if($idweapon == 5){ return "Bate de beisboll"; }
	else if($idweapon == 6){ return "Pala"; }
	else if($idweapon == 7){ return "Palo de billar"; }
	else if($idweapon == 8){ return "Katana"; }
	else if($idweapon == 9){ return "Motosierra"; }
	else if($idweapon == 10){ return "Consolador morado"; }
	else if($idweapon == 11){ return "Consolador"; }
	else if($idweapon == 12){ return "Vibrador"; }
	else if($idweapon == 13){ return "Vibrador de plata"; }
	else if($idweapon == 14){ return "Flores"; }
	else if($idweapon == 15){ return "Cane"; }
	else if($idweapon == 16){ return "Granada"; }
	else if($idweapon == 17){ return "Lacrimojena"; }
	else if($idweapon == 18){ return "Cocktel Molotov"; }
	else if($idweapon == 22){ return "9MM"; }
	else if($idweapon == 23){ return "9mm Silenciada"; }
	else if($idweapon == 24){ return "Desert Eagle"; }
	else if($idweapon == 25){ return "Escopeta Normal"; }
	else if($idweapon == 26){ return "Escopeta recortada"; }
	else if($idweapon == 27){ return "Escopeta de combate"; }
	else if($idweapon == 28){ return "Micro UZI"; }
	else if($idweapon == 29){ return "MP5"; }
	else if($idweapon == 30){ return "AK-47"; }
	else if($idweapon == 31){ return "M4"; }
	else if($idweapon == 32){ return "Tec-9"; }
	else if($idweapon == 33){ return "Rifle"; }
	else if($idweapon == 34){ return "Sniper Rifle"; }
	else if($idweapon == 35){ return "RPG"; }
	else if($idweapon == 36){ return "HS Rocket"; }
	else if($idweapon == 37){ return "Lanzallamas"; }
	else if($idweapon == 38){ return "Minigun"; }
	else if($idweapon == 39){ return "Satchel Charger"; }
	else if($idweapon == 40){ return "Detonador"; }
	else if($idweapon == 41){ return "Spray"; }
	else if($idweapon == 42){ return "Extintor"; }
	else if($idweapon == 43){ return "Camara"; }
	else if($idweapon == 44){ return "Vision nocturna"; }
	else if($idweapon == 45){ return "Thermal Googles"; }
	else if($idweapon == 46){ return "Paracaidas"; }
    else { return "No tiene"; }
}
?>

<div id="cambiarcorreo" style="display: none; position: fixed; opacity: 1; z-index: 11000; left: 50%; margin-left: -202px; top: 200px; ">
<div id="cargando-cambiar-correo" style="display:none; padding:20px;"><table width="384" height="260"><tr><td align="center" valign="middle"><img src="./imagenes/cargandox50.gif"/><br><br><strong>Cargando...</strong></td></tr></table></div>
<div id="cambiar-correo-ct" style="display:none">
</div>
</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>
</div>
</body>

<?php include "pie.php" ?>