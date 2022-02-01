<?php 

require 'PHPMailer/PHPMailerAutoload.php';

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
	    $ID = $datos['ID'];
		$name = $datos['Username'];
		$money = $datos['Money'];
		$score = $datos['Nivel'];
		$oz = $datos['Moneda'];
		$online = $datos['Online'];
		$ropa = $datos['Skin'];
		$platabanco = $datos['Banco'];
		$faccion = $datos['Faccion'];
		$razon = $datos['razon'];
		$correo = $datos['Email'];
		$ban = $datos['Baneado'];
		$validarcorrero = $datos['CorreoValido'];
		$cambiacorreo = $datos['CambiaCorreo'];
		$correoacambiar = $datos['CorreoACambiar'];
		$tiempocorreo = $datos['TiempoCorreo'];
		$email = $datos['Email'];
		$msjenviado = $datos['MensajeEnviado'];
		$Conexion = $datos['Conexion'];
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title><?php echo $NombreServidor?> Roleplay - Comprar veh&iacuteculos</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<link rel="stylesheet" type="text/css" href="./css/style.css">
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

<script async="" src="./js/analytics.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16687198-9', 'auto');
  ga('send', 'pageview');

</script>

<td width="997">

<?php include('header.php') ?>

<div id="contenido">
<div id="contenido-izquierdo">

<?php

$cod = $_GET['codigo'];
$submit = $_POST['submit'];
$codigos = $_POST['codigos'];

function generarLinkTemporal($idusuario, $username)
{
	$cadena = $idusuario.$username.rand(1,9999999).date('Y-m-d');
	$token = sha1($cadena);
	
	global $ip_mysql;
	global $nombre_db;
	global $user_sa;
	global $password_sa;
	
	$conexion = new mysqli($ip_mysql, $user_sa, $password_sa, $nombre_db);
	$sql = "INSERT INTO validarcorreo (idusuario, username, token, creado) VALUES ($idusuario,'$username','$token',NOW());";

	$resultado = $conexion->query($sql);
	if($resultado)
	{
		$enlace = $_SERVER["SERVER_NAME"].'/enviar-verificacion.php?codigo='.$token;
		return $enlace;
	}
	else
		return FALSE;
}

function enviarEmail($email, $link)
{
    global $name;
    $tok = substr($link, -40);
	$mensaje = '<html>
	<head>
		<title>Verificar direccion de correo electronico</title>
	</head>
	<body>
		<p>Hola <strong>'.$name.'</strong>, recientemente solicitaste un e-mail para verificar tu direccion de correo electronico.</p>
		<p>
		<p>Cliquea en este enlace para verificarla:</p> <a href="https://'.$link.'">https://'.$link.'</a></p>
		<p>Codigo de verificacion manual: <strong>'.$tok.'</strong></p>
		<p>Muchas gracias.</p>
		<p>OmegaZone 2016 - 2017</p>
	</body>
	</html>';

	/*$cabeceras  = "MIME-Version: 1.0" . "\r\n";
	$cabeceras .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$cabeceras .= "From: OmegaZone Roleplay <soporte@omegazone.net>" . "\r\n" .
	"Reply-To: soporte@omegazone.net" . "\r\n" .
	"X-Mailer: PHP/" . phpversion();*/
	
	$titulo = "Verificar direccion de correo electronico.";
	
	//mail($email, $titulo, $mensaje, $cabeceras);
	
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'tls://smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'soporte.omegazone@gmail.com';
	$mail->Password = 'clave';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;
	$mail->setFrom('soporte.omegazone@gmail.com', 'OmegaZone');
	$mail->addAddress($email, $name);     
	$mail->Subject = $titulo;
	$mail->Body    = $mensaje;
	$mail->IsHTML(true);

	if(!$mail->send()) 
	{
		echo 'Error: ' . $mail->ErrorInfo;
	}
	else 
	{
		//echo 'El mensaje se ha enviado correctamente';
	}
}

if($msjenviado == 0 && !isset($cod) && !isset($submit))
{
    $linkTemporal = generarLinkTemporal( $ID, $name );
    if($linkTemporal)
	{
		enviarEmail($correo, $linkTemporal);
		echo '<div class="login" style="padding:5px;top:20px;background-color:#599800; color:#FFFFFF; width:560px; text-align:center;">Se ha enviado un correo a <strong>'.$email.'</strong> con el c&oacute;digo de verificaci&oacute;n.</div><div style="padding:5px;top:40px;background-color:#fbee80; color:#000; width:560px; text-align:center;" class="login">Si no encuentras el correo, revisa en la carpeta de SPAM.</div>';
	}
	else
	{
		echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Ya enviamos un correo a tu cuenta, espera 30 minutos para solicitar otro correo.</strong></div>';
	}
}

if(isset($cod))
{
    $sent = $con->prepare("SELECT * FROM validarcorreo WHERE username = :usuario");
	$sent->bindParam(':usuario', $User, PDO::PARAM_STR); 
	$sent->execute();
	
		
	while($date = $sent->fetch())
	{
		$codtoken = $date['token'];
	}
	
	if($codtoken == $cod)
	{
	    $sente = $con->prepare("UPDATE usuarios set CorreoValido = '1' WHERE username = :usuario");
        $sente->bindParam(':usuario', $User, PDO::PARAM_STR); 
        $sente->execute();
		
        
        $stm3 = $con->prepare("DELETE FROM validarcorreo WHERE token = :token");   
		$stm3->bindParam(':token', $codtoken, PDO::PARAM_STR); 
		$stm3->execute();
		
        
        echo '<div class="login" style="padding:5px;top:20px;background-color:#599800; color:#FFFFFF; width:560px; text-align:center;">Tu correo <strong><?php echo $email; ?></strong> ha sido verificado correctamente.</div>';
	}
	else
	{
	    echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>El codigo ingresado es incorrecto.</strong></div>';
	}
}

if($submit)
{
    if($codigos)
    {
        $sent = $con->prepare("SELECT * FROM validarcorreo WHERE username = :usuario");
	    $sent->bindParam(':usuario', $User, PDO::PARAM_STR); 
		$sent->execute();
		
		
	    while($date = $sent->fetch())
	    {
		    $codtoken = $date['token'];
	    }
	    
	   if($codtoken == $codigos)
	   {
	        $sente = $con->prepare("UPDATE usuarios set CorreoValido = '1' WHERE username = :usuario");
	        $sente->bindParam(':usuario', $User, PDO::PARAM_STR); 
	        $sente->execute();
			
	        
	        $stm3 = $con->prepare("DELETE FROM validarcorreo WHERE token = :token");                              
		    $stm3->bindParam(':token', $codtoken, PDO::PARAM_STR); 
		    $stm3->execute();
			
	        
	        echo '<div class="login" style="padding:5px;top:20px;background-color:#599800; color:#FFFFFF; width:560px; text-align:center;">Tu correo <strong><?php echo $email; ?></strong> ha sido verificado correctamente.</div>';
	   }
	   else   
	   {
	        echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>El codigo ingresado es incorrecto.</strong></div>';
	   }
    }
}



?>

<section class="elcontenedor">
<div class="login">
<h1>Verificar correo</h1>
<form method="post" name="cambio">
<input name="cambiar" type="hidden" value="1"/>
<input name="1h" type="text" maxlength="1" style="display:none"/>
<input name="1v" type="password" maxlength="1" style="display:none"/>
<p><input name="codigos" type="text" maxlength="40" placeholder="C&oacute;digo de 40 digitos" style="text-align:center"/></p>
<p><input type="submit" name="submit" value="Verificar"></p>
</form>
</div>
</section>
</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>