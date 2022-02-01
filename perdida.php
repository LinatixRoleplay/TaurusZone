<?php

require 'PHPMailer/PHPMailerAutoload.php';

session_start(); 
error_reporting(0); 
include_once('./css/index.php');
include_once('./kev/idioma.php');

if(isset($_SESSION['User']))
{
   echo "<script>window.location='cuenta.php';</script>";
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
<meta http-equiv="Content-Type" content="text/html; charset=EUC-JP">



<title><?php echo $NombreServidor?> Roleplay - Recuperar contrase&ntildea</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css"/>

<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />

<link rel="stylesheet" href="./css/style.css"/>

</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

<tr>

<td width="997">

<style>.alertas{float:left;margin-left:660px;margin-top:170px;position:absolute;background-color:#0081ff;border-radius:3px;padding:0.2em 0.4em 0.2em;color:#FFFFFF;font-weight:bold;}.alertas a{color:#FFF;}.alertas:hover{background-color:#0068ce;}.alertas a:hover{color:#f0f0f0;}</style>
<div style="background-color:#000; position:absolute; width:997px; height:164px; top:29px; background-image:url(./imagenes/fondos-cabecera/<?php $andi = rand(1, 6); echo $andi;?>.jpg)"></div>

<div class="header-s3-">
<div class="ip">
<font size="2px">IP S1:</font> <b><a href="samp://<?php echo $serverIP ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?>" style="color:#FFFFFF; font-size: 13px;" title="Agregar a favoritos"><?php echo $serverIP ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?></a></b>
</div>
<div class="casa"><a href="/ingresar.php" title="<?php echo $Texto_Index_92;?>"><img src="./imagenes/iconos/casa.png" align="absmiddle" border="0"></a></div>
<div class="nologeado">
<a href="/ingresar.php" title="<?php echo $Texto_Index_92;?>"><?php echo $Texto_Index_91;?></a>
</div>
</div>

<div id="menu-superior-s3">                               
<ul>
<li id="principal"><a href="index.php">Pincipal</a></li>
<li id="foro"><a href="./foro/">Foro</a></li>
<li id="tucuenta-ac"><a href="./cuenta.php">Tu cuenta</a></li>
<li id="crear-cuenta"><a href="./nuevo.php">Tu cuenta</a></li>
<li id="cuenta-creada"><a></a></li>
</ul>

<div class="invitaciones-pendientes">
</div>
</div>
<div id="contenido" style="position:relative; z-index:999;">
<div id="contenido-izquierdo">

<?php

$submit = $_POST['submit'];
$correo = $_POST['correo'];

if($submit)
{
    if($correo)
    {
		$stmt = $con->prepare("SELECT ID,Username,Email FROM usuarios WHERE Email = :correo");
		$stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
		$stmt->execute();
		
		
		$num_rows = $stmt->rowCount();
		
		if($num_rows == 1)
        {
			while($datos = $stmt->fetch())
			{
				$idusuario = $datos['ID'];
				$usuariodelcorreo = $datos['Username'];
				$correoaenviar = $datos['Email'];

				$linkTemporal = generarLinkTemporal( $idusuario, $usuariodelcorreo );
				if($linkTemporal)
				{
					enviarEmail($correoaenviar, $linkTemporal ,$usuariodelcorreo);
					echo '<div class="login" style="padding:5px;top:20px;background-color:#06AD00; color:#FFFFFF; width:560px; text-align:center;"><strong>Un mensaje fue enviado a su correo para poder restablecer su contrase&ntilde;a.</strong></div>';
				}
				else
				{
					echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Un mensaje ya fue enviado a la direccion de correo especificada.</strong></div>';
				}
            }
		}
        else
        {
	        echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>No existe ninguna cuenta con ese correo.</strong></div>';
        }
    }
    else
    {
      echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Debes completar todos los campos.</strong></div>';
    }
}

function generarLinkTemporal($idusuario, $username)
{
	$cadena = $idusuario.$username.rand(1,9999999).date('Y-m-d');
	$token = sha1($cadena);
	
	global $ip_mysql;
	global $nombre_db;
	global $user_sa;
	global $password_sa;
	
	$conexion = new mysqli($ip_mysql, $user_sa, $password_sa, $nombre_db);
	$sql = "INSERT INTO recuperarclave (idusuario, username, token, creado) VALUES ($idusuario,'$username','$token',NOW());";

	$resultado = $conexion->query($sql);
	if($resultado)
	{
		$enlace = $_SERVER["SERVER_NAME"].'/recuperar.php?oz='.sha1($idusuario).'&tkp='.$token;
		return $enlace;
	}
	else return FALSE;
}

function enviarEmail($email, $link ,$userpide)
{
	$mensaje = '<html>
	<head>
		<title>Recuperar contraseè´–a en OmegaZone Roleplay</title>
	</head>
	<body>
	    <p>
			<strong>Recuperar contrase&ntilde;a en OmegaZone Roleplay</strong>
 		</p>
		<p>Hemos recibido una petici&oacute;n para restablecer la contrase&ntilde;a de tu cuenta ('.$userpide.').</p>
		<p>
			<strong>Clic en el siguiente enlace para restablecer tu contrase&ntilde;a</strong><br>
 			</p> <a href="https://'.$link.'">https://'.$link.'</a></p>
 		</p>
	</body>
	</html>';

	/*$cabeceras  = "MIME-Version: 1.0" . "\r\n";
	$cabeceras .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$cabeceras .= "From: OmegaZone Roleplay <soporte@omegazone.net>" . "\r\n" .
	"Reply-To: soporte@omegazone.net" . "\r\n" .
	"X-Mailer: PHP/" . phpversion();*/

	$titulo = "OmegaZone S1";
	
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
	$mail->addAddress($email, $userpide);     
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

?>

<section class="elcontenedor">

<div class="login">

<h1><?php echo $Texto_Index_179;?></h1>

<form method="post">

<p><input type="text" name="correo" value="" placeholder="<?php echo $Texto_Index_180;?>."></p>

<p><input type="submit" name="submit" value="<?php echo $Texto_Index_181;?>"></p>

</form>

</div>

</section>

</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>