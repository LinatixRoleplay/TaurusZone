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
			$ropa = $datos['Skin'];
			$razon = $datos['razon'];
			$ban = $datos['Baneado'];
			$Conexion = $datos['Conexion'];
		}
	}
	catch(PDOException $e) 
	{
		echo 'Error: ' . $e->getMessage();
	}
}
//else header('location: ingresar.php');
else echo "<script>window.location='ingresar.php';</script>";

$u = $_GET['u'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title><?php echo $NombreServidor?> Roleplay - Cuenta creada</title>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
$('.adCntnr div.acco2:eq(0)').find('div.expand:eq(0)').addClass('openAd').end() 
.find('div.collapse:gt(0)').hide().end()
.find('div.expand').click(function() {
$(this).toggleClass('openAd').siblings().removeClass('openAd').end()
.next('div.collapse').slideToggle().siblings('div.collapse:visible').slideUp();
return false;
});
})
</script>
<style>label{display:inline-block;width:5em;}.ui-tooltip{padding:5px;position:absolute;z-index:9999;max-width:220px;-webkit-box-shadow:0 0 5px #aaa;box-shadow:0 0 5px #aaa;background-color:#FFC;border:1px #999999 solid;}body .ui-tooltip{border-width:1px;}.nuevo-bg{background-image:url(imagenes/nuevo-bg.png);float:left;width:975px;height:730px;margin-left:11px;background-repeat:no-repeat}.bloq-iz{float:left;width:360px;margin-top:115px;padding-left:20px;padding-right:3px;height:315px;}.bloq-de{float:left;width:560px;margin-top:110px;margin-left:18px;height:315px;}.bloq-desc{float:left;clear:both;margin-left:20px;margin-top:18px;text-shadow:0 1px 0 #FFFFFF;width:930px}.bloq-iz{font-size:14px;text-shadow:0 1px 0 #FFFFFF;}.bloq-iz input[type="text"],input[type="password"],select{font-size:15px;padding:4px;width:190px;text-shadow:0 1px 0 #FFFFFF;background-image:url(imagenes/fondo-input-text.png);border:1px #CCCCCC solid;color:#666666}.bloq-iz input[type="text"]:focus,input[type="password"]:focus{border-color:rgba(82,168,236,0.8);outline:0;outline:thin dotted \9;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);}.rec-iz{float:left;width:150px;margin-top:7px;}.rec-de{float:left;width:210px;}.verde-btn{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#8DCC35,#459015) repeat scroll 0 0 #459015;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8DCC35',endColorstr='#459015');background:-webkit-gradient(linear,left top,left bottom,from(#8DCC35),to(#459015));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF!important;text-shadow:0 1px 0 rgba(0,0,0,0.3);font-size:15px!important;padding:2px 10px!important;}.verde-btn:hover{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#A2D956,#479815) repeat scroll 0 0 #A2D956;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#A2D956',endColorstr='#479815');background:-webkit-gradient(linear,left top,left bottom,from(#A2D956),to(#479815));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF;text-shadow:0 1px 0 rgba(0,0,0,0.3);}.btn{padding:4px 12px;margin-bottom:0;line-height:20px;text-align:center;vertical-align:middle;cursor:pointer;color:#333333;border-radius:7px}.expand a{background:#6C6E74;background-image:url(imagenes/bg-sinactivar.png);color:#FDFDFD;display:block;font:bold 12px/32px Arial,sans-serif;height:32px;min-width:110px;padding:0 10px 0 10px;position:relative;text-decoration:none;text-shadow:0 1px 0 rgba(0,0,0,0.35);}.openAd a{background:#a5cd4e;background-image:url(imagenes/bg-activo.png);}.adCntnr{float:left;width:970px;margin-left:13px;-moz-box-shadow:0 0 5px #888;-webkit-box-shadow:0 0 5px#888;margin-bottom:5px;box-shadow:0 0 5px 2px #888;margin-top:20px;}.accCntnt{background-color:#EBEBEB;padding:5px;font-size:13px}.adicional{font-size:18px;padding-top:10px;background-color:#EBEBEB;}.openAd div{background-image:url(imagenes/iconos/flecha-der.png);background-repeat:no-repeat;padding-left:16px;background-position:center left;}</style>
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
<div style="background-color:#000; position:absolute; z-index:20; width:997px; height:164px; top:29px; background-image:url(./imagenes/fondos-cabecera/<?php $andi = rand(1, 6); echo $andi;?>.jpg)"></div>

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
<li id="principal"><a href="./">Pincipal</a></li>
<li id="foro"><a href="/foro/">Foro</a></li>
<li id="tucuenta-ac"><a href="./cuenta.php">Tu cuenta</a></li>
<li id="cuenta-creada"><a></a></li>
</ul>
<div class="invitaciones-pendientes">
<?php include_once('./invitaciones/invitacion.php'); ?> 
</div>
</div>
<?php
if($ban == 1):
    echo '
	<div style="float:left;width:997px; margin-top:5px; font-size:12px;">
<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
<tbody>
<tr bgcolor="#333333"><td align="left" style="border-top: 1px solid #424242;border-left: 1px solid #424242; color:#FFFFFF;text-shadow: 0 1px 0 #000000;"><strong><font size="2.6px">Mensajes importantes</strong></td></tr>
</tbody>
</table>
</div>
	
	<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
<tbody>
<tr>
<td valign="middle" bgcolor="RED" align="left" colspan="1" style="color:white"><img src="./imagenes/iconos/alerta16.png" align="absmiddle"><font size="2.6px">Tu cuenta ha sido baneada por <strong>';?><?php echo $razon;?><?php echo '</strong>  el <strong>';?><?php echo $Conexion;?><?php echo '</strong>.</td>
</tr>
</tbody>
</table>';
endif;
?>

<div style="float:left;width:997px; margin-top:5px; font-size:12px;">

<div id="contenido">

<div id="contenido">

<div class="adCntnr adicional">

<?php 
if($u == 1)
{
?>

<div style="float:left; padding-left:20px;padding-right:20px; border-bottom:dotted 1px #D6D6D6; height:64px;padding-bottom:20px"><img src="imagenes/correcto2.png" align="absmiddle"/></div>
<div style="float:left; padding-top:28px; height:36px;border-bottom:dotted 1px #D6D6D6;width: 865px; padding-bottom:20px;"><?php echo $name?>, tu cuenta ha sido creada correctamente.</div>

<?php 
}
?>

<?php 
if($u == 2)
{
?>
<div style="float:left; padding-left:20px;padding-right:20px; border-bottom:dotted 1px #D6D6D6; height:64px;padding-bottom:20px"><img src="imagenes/mal2.png" align="absmiddle"/></div>
<div style="float:left; padding-top:28px; height:36px;border-bottom:dotted 1px #D6D6D6;width: 865px; padding-bottom:20px;"><?php echo $name?>, a&uacute;n no has ingresado al juego.</div>
<?php 
}
?>

<div style="font-size:14px; padding:20px; float:left">+ Sigue los siguientes pasos para comenzar a jugar.</div>
<div style="font-size:14px; padding:20px; float:left">(( Si el servidor te aparece OFFLINE valida tu IP desde aqui: <a href="https://rol.omegazone.net/validar.php">https://rol.omegazone.net/validar.php</a> ))</div>
</div>
<div class="adCntnr">
<div class="acco2">
<div class="expand"><a title="Mostrar / Ocultar" href="#" style="display: block;"><div>Paso 1</div></a></div>
<div class="collapse">
<div class="accCntnt">
<ul>
<li><strong>Descarga e instala el GTA San Andreas.</strong></li>
</ul>
<div style="padding: 5px; border: dotted #C1C1C1 1px; margin:0 40px 10px; background-color:#D6D6D6; font-size:15px;">
Selecciona cualquiera de las siguientes opciones de descarga: <br/><br/>
<div style="margin-left:20px; margin-bottom:20px;">
<a href="http://descarga.gtasa-rp.com/GTA_SA_Completo.zip"><button class="verde-btn btn" type="button">Juego completo - Descarga directa</button></a> -
<a href="http://descarga.gtasa-rp.com/GTA_SA_Completo.zip">http://descarga.gtasa-rp.com/GTA_SA_Completo.zip</a>
<br/><br/>
<a href="http://descarga.gtasa-rp.com/GTA_SA_Rip_FenixZoneRP.exe"><button class="verde-btn btn" type="button">Juego Rip (532MB) - Descarga directa</button></a> -
<a href="http://descarga.gtasa-rp.com/GTA_SA_Rip_FenixZoneRP.exe">http://descarga.gtasa-rp.com/GTA_SA_Rip_FenixZoneRP.exe</a>
</div>
</div>
</div>
</div>
<div class="expand"><a title="Mostrar / Ocultar" href="#" style="display: block;"><div>Paso 2</div></a></div>
<div class="collapse">
<div class="accCntnt">
<ul>
<li><strong>Instala el Cliente de SA-MP en el directorio del GTA San Andreas.</strong></li>
</ul>
<div style="padding: 5px; border: dotted #C1C1C1 1px; margin:0 40px 10px; background-color:#D6D6D6; font-size:15px;">
Selecciona cualquiera de las siguientes opciones de descarga: <br/><br/>
<div style="margin-left:20px; margin-bottom:20px;">
<a href="http://files.sa-mp.com/sa-mp-0.3.7-install.exe"><button class="verde-btn btn" type="button">Opci&oacute;n #1 - 17.4MB</button></a> -
<a href="http://files.sa-mp.com/sa-mp-0.3.7-install.exe">http://files.sa-mp.com/sa-mp-0.3.7-install.exe</a>
<br/><br/>
<a href="http://dl.gta-sa-mp.de/samp/sa-mp-0.3.7-install.exe"><button class="verde-btn btn" type="button">Opci&oacute;n #2 - 17.4MB</button></a> -
<a href="http://dl.gta-sa-mp.de/samp/sa-mp-0.3.7-install.exe">http://dl.gta-sa-mp.de/samp/sa-mp-0.3.7-install.exe</a>
</div>
</div>
</div>
</div>
<div class="expand"><a title="Mostrar / Ocultar" href="#" style="display: block;"><div>Paso 3</div></a></div>
<div class="collapse">
<div class="accCntnt">
<ul>
<li><strong>Ejecutar el acceso directo de <font color="#003300">GTA San Andreas Multiplayer</font> del escritorio.</strong></li>
</ul>
<div style="padding: 5px; border: dotted #C1C1C1 1px; margin:0 40px 10px; background-color:#D6D6D6; font-size:15px;">
<img src="imagenes/acceso-directo-samp.png"/>
</div>
</div>
</div>
<div class="expand"><a title="Mostrar / Ocultar" href="#" style="display: block;"><div>Paso 4</div></a></div>
<div class="collapse">
<div class="accCntnt">
<ul>
<li><strong>Agregar la IP <font color="#003300"><?php echo $serverIP?>:<?php echo $serverPort?></font> a la lista de servidores favoritos</strong></li>
</ul>
<div style="padding: 5px; border: dotted #C1C1C1 1px; margin:0 40px 10px; background-color:#FFC; font-size:15px;">
<font color="#CC0000">Nota: Si el servidor <font color="#003300"><?php echo strtoupper($Diminutivo)?> Roleplay [S1]</font> ya aparece en la lista, ignora este paso.</font>
</div>
<ul>
<li><strong>Click en <font color="#003300">Add Server</font></strong></li>
</ul>
<div style="padding: 5px; border: dotted #C1C1C1 1px; margin:0 40px 10px; background-color:#D6D6D6; font-size:15px;">
<img src="imagenes/addserver.png"/>
</div>
<ul>
<li><strong>Ingresar la IP: <font color="#003300"><?php echo $serverIP?>:<?php echo $serverPort?></font> y dar click en <font color="#003300">OK</font></strong></li>
</ul>
<div style="padding: 5px; border: dotted #C1C1C1 1px; margin:0 40px 10px; background-color:#D6D6D6; font-size:15px;">
<div style="background-image:url(imagenes/servidor-ip.png);  padding-left: 25px;padding-top: 61px; background-repeat:no-repeat; height:80px;"><?php echo $serverIP?>:<?php echo $serverPort?></div>
</div>
</div>
</div>
<div class="expand"><a title="Mostrar / Ocultar" href="#" style="display: block;"><div>Paso 5</div></a></div>
<div class="collapse">
<div class="accCntnt">
<ul>
<li><strong>Ingresa tu nombre completo como se ve en la siguiente imagen:<br>(( Si el servidor te aparece OFFLINE valida tu IP desde aqui: <a href="https://rol.omegazone.net/validar.php">https://rol.omegazone.net/validar.php</a> ))</strong></li>
</ul>
<div style="padding: 5px; border: dotted #C1C1C1 1px; margin:0 40px 10px; background-color:#D6D6D6; font-size:15px;">
<div style="background-image:url(imagenes/nombre-jugador.png);  font-weight: normal;height: 410px;padding-left: 340px;padding-top: 55px; background-repeat:no-repeat; font-size:14px"><?php echo $name?></div>
</div>
<ul>
<li><strong>Luego de seleccionar el servidor, cliquea en <font color="#003300">Connect</font> para ingresar al juego.</strong></li>
</ul>
<div style="padding: 5px; border: dotted #C1C1C1 1px; margin:0 40px 10px; background-color:#D6D6D6; font-size:15px;">
<div style="background-image:url(imagenes/conectar-img.png);  font-weight: normal;height: 410px;padding-left: 340px;padding-top: 55px; background-repeat:no-repeat; font-size:14px"><?php echo $name?></div>
<strong>(( Si el servidor te aparece OFFLINE valida tu IP desde aqui: <a href="https://rol.omegazone.net/validar.php">https://rol.omegazone.net/validar.php</a> ))</strong>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="pie"><hr><?php echo $NombreServidor?> Roleplay &copy; 2016</div> </td>
</tr>
</table>
</body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104151474-1', 'auto');
  ga('send', 'pageview');

</script>