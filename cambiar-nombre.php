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
			$validarcorrero = $datos['CorreoValido'];
			$cambiacorreo = $datos['CambiaCorreo'];
			$correoacambiar = $datos['CorreoACambiar'];
			$tiempocorreo = $datos['TiempoCorreo'];
			$email = $datos['Email'];
			$fz = $datos['Moneda'];
			$ropa = $datos['Skin'];
			$platabanco = $datos['Banco'];
			$posibilidad = $datos['changenamefree'];
			$faccion = $datos['Faccion'];
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

$tucuentaAC = "-ac";
$mcn = "actual1";
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
<meta http-equiv="Content-Type" content="text/html; charset=EUC-JP">



<title><?php echo $NombreServidor?> Roleplay - <?php include_once('./kev/idioma.php'); echo $Texto_Index_208;?></title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css"> 

<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />

<script src="./js/jquery-latest2.js"></script>

<style>DIV#loader.loading{background:url(./imagenes/iconos/spinner.gif) no-repeat center center;}#loader{width:300px;height:344px;background-color:#000000}#negro{background-color:#FFFFFF;width:300px;border:solid 1px #DEDEDE;padding:3px;margin-top:5px;margin-left:15px;margin-bottom:5px;float:left;}.skinid{border:solid 1px #DEDEDE;font-size:11px;width:20px;margin:3px 3px 0 3px;padding:3px}.botonskin{border:solid 1px #DEDEDE;font-size:11px;margin:3px 3px 0 3px;padding:2px;background-color:#FFFFFF;cursor:pointer}.bloquederecho{float:left;width:345px;}.bloq{background-color:#FFFFFF;border:solid 1px #DEDEDE;margin:5px;padding:5px;}body{ font-size: 1px;}</style>

</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">



<tbody><tr>

<td width="997">

<?php include("header.php") ?>

<div id="contenido">

<div id="contenido-izquierdo">

<div class="td-img">

<div class="icono-td"><img src="./imagenes/iconos/editar-informacion.png"></div>

<div style=" padding-bottom:160px;height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px"><?php echo $Texto_Index_208;?></div>

<div style="padding:5px">

<div style="margin-left:20px; color:#006600; font-weight:bold"><hr><font size="2em"> * <?php echo $name; ?> <?php echo $Texto_Index_209;?>.</font><div class="hr"></div></div>

<div style="float:left; margin-left:6px"><img src="./imagenes/iconos/dialogo.png">&nbsp;</div><div><font size="2em"><?php echo $name; ?> <?php echo $Texto_Index_210;?>.</font><div class="hr"></div></div>

<div style="float:left; margin-left:6px"><img src="./imagenes/iconos/playerdialogo.png">&nbsp;</div><div><i><font size="2em"><?php echo $Texto_Index_211;?>. </i><div class="hr"></div></div>

<form method="post" action="cn2.php" name="cambiar" id="cambiar">

<div style="float:left; margin-left:6px"><img src="./imagenes/iconos/dialogo.png">&nbsp;</div><div><font size="2em"><?php echo $name; ?> <?php echo $Texto_Index_212;?>.</font><div class="hr"></div></div>

<div style="float:left; margin-left:6px"><img src="./imagenes/iconos/playerdialogo.png">&nbsp;</div><div><i><font size="2em"><?php echo $Texto_Index_213;?></font></i><div class="hr"></div></div>

<div style="float:left; margin-left:6px"><img src="./imagenes/iconos/agregar_dialogo.png">&nbsp;</div><div><font size="2em"><?php echo $name; ?> <?php echo $Texto_Index_214;?> <input name="nombre" type="text" style="border:#D8D8D8 solid 1px; padding:2px" maxlength="15" size="16"><div class="hr"></div></div>

<div style="float:left; margin-left:6px"><img src="./imagenes/iconos/playerdialogo.png">&nbsp;</div><div><i><font size="2em"><?php echo $Texto_Index_215;?> </font></i><div class="hr"></div></div>

<div style="float:left; margin-left:6px"><img src="./imagenes/iconos/agregar_dialogo.png">&nbsp;</div><div><font size="2em"><?php echo $name; ?> <?php echo $Texto_Index_214;?> <input name="apellido" type="text" style="border:#D8D8D8 solid 1px; padding:2px" maxlength="15" size="16"></font><div class="hr"></div></div>

<div style="float:left; margin-left:6px"><img src="./imagenes/iconos/playerdialogo.png">&nbsp;</div><div><i><font size="2em"><?php echo $Texto_Index_216;?></i><div class="hr"></div></div>

<div style="float:left; margin-left:6px"><img src="./imagenes/iconos/agregar_dialogo.png">&nbsp;</div><div><font size="2em"><?php echo $name; ?> <?php echo $Texto_Index_217;?> <input name="edad" type="text" style="border:#D8D8D8 solid 1px; padding:2px; width:24px" maxlength="2"> <?php echo $Texto_Index_218;?>.</font><div class="hr"></div></div>

<div style="float:left; margin-left:6px"><img src="./imagenes/iconos/playerdialogo.png">&nbsp;</div><div><i><font size="2em"><?php echo $Texto_Index_219;?>.</font></i><div class="hr"></div></div>

<div style="float:left; margin-left:6px">&nbsp;</div><div><i><font size="2em">(( Ingresa tu contrase&ntilde;a: <input name="contracuenta" type="password" style="border:#D8D8D8 solid 1px; padding:2px" maxlength="24" size="16">))</font></i><div class="hr"></div></div>

<div style="float:left; margin-left:6px;"><img src="./imagenes/iconos/editar-informacion.png">&nbsp;</div><div>
<?php
if($posibilidad == 0)
{
	echo '<input name="firmar" onclick="alertar1()" type="button" value="'.$Texto_Index_222.'">';
}
else
{
	echo '<input name="firmar" onclick="alertar2()" type="button" value="'.$Texto_Index_222.'">';
}
?>
</div>

</form>

</div>

<script>
		function alertar1()
		{
			var x;
            var r=confirm("Este es tu ultimo cambio de nombre gratuito, luego tendras que pagar 10 Totems para hacerlo nuevamente.");
			if (r==true)
			{
				document.getElementById('cambiar').submit();
			}
			else
			{
				return false;
			}
		}
</script>
<script>
		function alertar2()
		{
			var x;
            var r=confirm("Este cambio de nombre va a costarte 10 Totems.");
			if (r==true)
			{
				  document.getElementById('cambiar').submit();
			}
			else
			{
			  return false;
			}
		}
</script>

<center>
<h2>
<?php if($posibilidad == 1){ echo $Texto_Index_223; echo ": 10";?>Totems<?php echo ""; } else { echo $Texto_Index_220; echo".";}?>
</h2>
<?php if($posibilidad == 0){ echo $Texto_Index_221;?>Totems<?php echo "."; } else { echo $Texto_Index_224; echo " 10";?>Totems<?php echo " "; echo $Texto_Index_225; echo ".";}?>
</center>
</div>

</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>