<?php

session_start();
error_reporting(0);
include_once('./css/index.php');
include_once('./foro/integrado.php');

if($activar_apsa == 1) 
{
	include_once('apsa/wp-blog-header.php');
}

if(isset($_SESSION['User']))
{
    $User = $_SESSION['User'];
	
	try
	{
		$stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
		$stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
		$stmt->execute();
		
		$datos = $stmt->fetch();
		$name = $datos['Username'];
		$money = $datos['Money'];
		$score = $datos['Nivel'];
		$fz = $datos['Moneda'];
		$validarcorrero = $datos['CorreoValido'];
		$cambiacorreo = $datos['CambiaCorreo'];
		$correoacambiar = $datos['CorreoACambiar'];
		$tiempocorreo = $datos['TiempoCorreo'];
		$email = $datos['Email'];
		$ropa = $datos['Skin'];
		$platabanco = $datos['Banco'];
		$faccion = $datos['Faccion'];
		$razon = $datos['razon'];
		$ban = $datos['Baneado'];
		$Conexion = $datos['Conexion'];
		$admin = $datos['Admin'];
		unset($datos);
	}
	catch(PDOException $e)
	{
		echo 'Error: ' . $e->getMessage();
	}
}

$dinerototal = $money+$platabanco;

/*
if($Conexion == '1')
{
	echo "<script>window.location='reg.php?u=2';</script>";
}
*/

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

$principalAC = "-ac";

/*
function get_ip_address()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
	{
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
	else
	{
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
		else
		{
			$ip = $_SERVER['REMOTE_ADDR'];
        }
    }
    return $ip;
}
*/

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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title><?php echo $NombreServidor?> Roleplay - San Andreas Multiplayer (SAMP en Español)</title>
<style>
.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}
</style>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="stylesheet" href="./css/style.css"/>
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<link rel="stylesheet" href="./css/default.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="./css/nivo-slider.css" type="text/css" media="screen"/>
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="./js/jquery.leanModal.min.js"></script>
</head>
<body>


<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
<tr>
<td width="997">

<?php include('header.php') ?>

<div id="contenido" style="position:relative; z-index:999;">
<div id="contenido-izquierdo">

<?php

$submit		=	$_POST['submit'];

if($submit)
{
	$hashserverkey = 'da3d17ae2bbe9cc9f4fa46a9503bfd0c';
	$url = "http://hostingsamp.ovh/request.php?uid=$hashserverkey&serverid=1";
	$result = file_get_contents($url);
	$decodificacion = json_decode($result, true);
	$thash = $decodificacion['THash'];
	$name_user	= $_POST['name_user'];
	
	if(isset($_SESSION['User'])) $nombre_usuario = $name;
	else $nombre_usuario = $_POST['name_user'];

	if($_SESSION['img_number'] == $_POST['numeros'])
	{
		if($nombre_usuario)
		{
			//$ip_user = get_ip_address();
			echo "<script>window.location='http://hostingsamp.ovh/getaddres.php?id=1&hash=$thash&name=$nombre_usuario';</script>";
			//echo '<div class="login" style="padding:5px;top:20px;background-color:#00a800; color:#FFFFFF; width:560px; text-align:center;"><strong>Tu IP '.$ip_user.' fue autorizada correctamente.</strong></div>';
		}
		else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00000; color:#FFFFFF; width:560px; text-align:center;"><strong>Ingresa tu nombre de usuario.</strong></div>';
	}
	else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00000; color:#FFFFFF; width:560px; text-align:center;"><strong>El c&oacute;digo de seguridad ingresado no es correcto.</strong></div>';
}

?>

<section class="elcontenedor">
<div class="login">
<h1>Autorizaci&oacute;n de IP</h1>
<form method="post" accept-charset="UTF-8" autocomplete="off">
<?php if(!isset($_SESSION['User'])) { ?>
<p><input type="text" name="name_user" value="" placeholder="Nombre de usuario"></p>
<?php } ?>
<p>
<div style="padding:5px; margin-top:20px">
&nbsp;&nbsp;<img id="seg" src="./captcha/image.php"> <script>
function recarga()
{
	document.getElementById('seg').src='./captcha/image.php';
}
</script>
<a style="width:25px; height:25px;background-image:url('./imagenes/refresh.gif'); display:block; float:left; margin-right:1px" href="javascript:recarga();" title="<?php echo $Texto_Index_25;?>" alt="S"></a>
</div>
</p>
<p><input type="text" name="numeros" value="" placeholder="<?php echo $Texto_Index_22;?>"></p>
<br>
<center class="submit"><input type="submit" name="submit" value="Autorizar IP"></center>
</form>
</div>
<br>
<div class="login-ayuda">
<p>Si no sabes como validar tu IP sigue los pasos de esta guía: <a href="https://rol.omegazone.net/foro/index.php?topic=27434">Validación de IP</a>.</p>
</div>

</section>

</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>