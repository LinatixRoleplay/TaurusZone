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
			$timepovip = $datos['TiempoVip'];
            $fz = $datos['Moneda'];
            $ropa = $datos['Skin'];
            $validarcorrero = $datos['CorreoValido'];
            $platabanco = $datos['Banco'];
            $faccion = $datos['Faccion'];
            $validarcorrero = $datos['CorreoValido'];
			$cambiacorreo = $datos['CambiaCorreo'];
			$correoacambiar = $datos['CorreoACambiar'];
			$tiempocorreo = $datos['TiempoCorreo'];
			$email = $datos['Email'];
            $vip = $datos['VIP'];
            $tiempovip = $datos['TiempoVip'];
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
 
<title><?php echo $NombreServidor?> Roleplay - <?php include_once('./kev/idioma.php'); echo $Texto_Index_249;?></title>
 
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">

<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
 
<script src="./js/jquery-latest2.js"></script>
 
<style>DIV#loader.loading{background:url(./imagenes/iconos/spinner.gif) no-repeat center center;}#loader{width:300px;height:344px;background-color:#000000}#negro{background-color:#FFFFFF;width:300px;border:solid 1px #DEDEDE;padding:3px;margin-top:5px;margin-left:15px;margin-bottom:5px;float:left;}.skinid{border:solid 1px #DEDEDE;font-size:11px;width:20px;margin:3px 3px 0 3px;padding:3px}.botonskin{border:solid 1px #DEDEDE;font-size:11px;margin:3px 3px 0 3px;padding:2px;background-color:#FFFFFF;cursor:pointer}.bloquederecho{float:left;width:345px;}.bloq{background-color:#FFFFFF;border:solid 1px #DEDEDE;margin:5px;padding:5px;}body{ font-size: 1px;}</style>
 
</head>
 
<body>
 
<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
 
<tbody>

<tr>
 
<td width="997">
 
<?php include("header.php"); ?>
 
<div id="contenido">
 
<div id="contenido-izquierdo">
 
<div class="td-gr">
 
<div class="icono-td"><img src="./imagenes/iconos/info.png"></div>
 
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px"><?php echo $Texto_Index_235;?></div>
 
<?php
if($timepovip > time())
{
?>
    <div class="actividad">Tu cuenta tiene activa la membres&iacute;a <font color="green"><b>VIP</b></font> durante <font color="red"><b id="tiempo"></b></font> m&aacute;s.</div>
<?php
}
?>

<script>
var countDownDate = new Date(<?php echo $tiempovip * 1000;?>).getTime();
var x = setInterval(function() 
{
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    var horas = ('0'+hours).slice(-2);
    var minutos = ('0'+minutes).slice(-2);
    var segundos = ('0'+seconds).slice(-2);
    
    if(days == 0)
    {
    	document.getElementById("tiempo").innerHTML = horas + ":" + minutos + ":" + segundos + "h";
    }
    else
    {
    	document.getElementById("tiempo").innerHTML = days + "d " + horas + ":" + minutos + ":" + segundos + "h";
    }
    if (distance < 0) 
	{
        clearInterval(x);
        document.getElementById("tiempo").innerHTML = "Completado";
    }
}, 1000);
</script>
 
<table width="678" border="0" cellpadding="0" cellspacing="1" bgcolor="#C7C7C7">
 
<tbody><tr class="primertd">
 
<td width="313" height="44" valign="middle"><strong>&nbsp;</strong><font size="2px"><?php echo $Texto_Index_237;?></font></td>
 
<td width="120" align="center" valign="middle"><span class="Estilo3"><font size="2px"><?php echo $Texto_Index_238;?></font></span></td>
 
<td width="120" align="center" valign="middle"><span class="Estilo1"><font size="3px"; color="Green"><?php echo $Texto_Index_239;?></span></td>
 
</tr>
 
<tr>
 
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF">&nbsp;- <font size="2px"><?php echo $Texto_Index_242;?> </td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px"><font size="2px">2</td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px"><font size="2px">4</td>
</tr>
 
<tr>
 
<td width="313" height="30" valign="middle" bgcolor="#FBFBFB">&nbsp;- <font size="2px"><?php echo $Texto_Index_243;?></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FBFBFB"><font size="2px">$1.500</td>
 
<td width="120" align="center" valign="middle" bgcolor="#FBFBFB"><font size="2px">$4.000</td>
</tr>
 
<tr>
 
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF">&nbsp;- <font size="2px"><?php echo $Texto_Index_244;?></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">1</td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><font size="2px">2</td>
</tr>
 
<tr>
 
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF">&nbsp;- <font size="2px"><?php echo $Texto_Index_245;?></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="./imagenes/iconos/no.png"></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="./imagenes/iconos/si.png"></td>
</tr>
 
<tr>
 
<td width="313" height="30" valign="middle" bgcolor="#FBFBFB">&nbsp;- <font size="2px"><?php echo $Texto_Index_246;?></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FBFBFB"><img src="./imagenes/iconos/no.png"></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FBFBFB"><img src="./imagenes/iconos/si.png"></td>
</tr>
 
<tr>
 
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF">&nbsp;- <font size="2px"><?php echo $Texto_Index_247;?></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="./imagenes/iconos/no.png"></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="./imagenes/iconos/si.png"></td>
</tr>
 
<tr>
 
<td width="313" height="30" valign="middle" bgcolor="#FFFFFF">&nbsp;- <font size="2px"><?php echo $Texto_Index_248;?></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="./imagenes/iconos/no.png"></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><img src="./imagenes/iconos/si.png"></td>
</tr>
 
<tr>
 
<td width="313" height="30" align="right" valign="middle" bgcolor="#FBFBFB">&nbsp;<font size="2px"><?php echo $Texto_Index_240;?>:&nbsp;</td>
 
<td width="120" align="center" valign="middle" bgcolor="#FBFBFB"><font size="2px"><?php echo $Texto_Index_241;?></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FBFBFB"><font size="2px">10<?php echo $Diminutivo?></td>
</tr>
 
<tr class="primertd">
 
<td width="313" height="44" valign="middle" bgcolor="#FFFFFF"></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"></td>
 
<td width="120" align="center" valign="middle" bgcolor="#FFFFFF"><a href="comprar-vip.php"><strong><?php echo $Texto_Index_206;?></strong></a></td>
</tr>
</tbody></table>
 
</div>
 
</div>
 
<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>