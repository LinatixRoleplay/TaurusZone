<?php

session_start(); 
error_reporting(0); 

if(isset($_SESSION['User']))
{
	echo "<script>window.location='cuenta.php';</script>";
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
<meta http-equiv="Content-Type" content="text/html; charset=GB18030">

<title>
<?php 
include_once('./css/index.php'); 
include_once('./kev/idioma.php');
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

} echo $NombreServidor?> Roleplay - <?php echo $Texto_Index_92;?></title>
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

$submit			= $_POST['submit'];
$username		= $_POST['username'];
$password		= $_POST['password'];
$hashedPassword	= md5($password); 

if($submit)
{
    if($username)
    {
	   if($password)
	    {
			if($_SESSION['img_number'] == $_POST['numeros'])
			{
				try
				{
					$stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
					$stmt->bindParam(':usuario', $username, PDO::PARAM_STR);
					$stmt->execute();
					
			
					$num_rows = $stmt->rowCount();

					if($num_rows == 1)
					{
						while($datos = $stmt->fetch())
						{
							$dbusername = $datos['Username'];
							$dbpassword = $datos['Password'];
						}
						if((strcasecmp($username, $dbusername) == 0) && $hashedPassword == $dbpassword)
						{
							$_SESSION['User'] = $dbusername;
							echo "<script>window.location='cuenta.php';</script>";
						}
						else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Contrasena incorrecta</strong></div>';
					}
					else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>No existe ninguna cuenta con los datos ingresados.</strong></div>';
				}
				catch(PDOException $e) 
				{
					echo 'Error: ' . $e->getMessage();
				}
			}
			else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>El código de seguridad ingresado no es correcto.</strong></div>'; 
		}
		else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Te faltó ingresar la contrase&ntilde;a.</strong></div>'; 
	}
	else echo '<div class="login" style="padding:5px;top:20px;background-color:#F00; color:#FFFFFF; width:560px; text-align:center;"><strong>Te faltó ingresar el nombre de usuario.</strong></div>'; 
}

if(isset($_POST['recordarme']))
{
	setcookie("NOLOG:USER", $_POST['username'], time()+3600*48);
}

?>

<section class="elcontenedor">
<div class="login">
<h1><?php echo $Texto_Index_15;?></h1>

<form method="post" accept-charset="UTF-8" autocomplete="off">

<p><input type="text" name="username" value="" placeholder="<?php echo $Texto_Index_23;?>" autocomplete="off"></p>

<p><input type="password" name="password" value="" placeholder="<?php echo $Texto_Index_24;?>" autocomplete="off"></p>

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

<p class="recordarme">
<label>
<input type="checkbox" name="recordarme" id="recordarme"/><?php echo $Texto_Index_16;?>.
</label>
</p>

<p class="submit"><input type="submit" name="submit" value="<?php echo $Texto_Index_21;?>"></p>
</form>

</div>
<div class="login-ayuda">
<p><?php echo $Texto_Index_17;?> <a href="perdida.php"><?php echo $Texto_Index_18;?></a>.</p>
<p><?php echo $Texto_Index_19;?> <a href="nuevo.php"><?php echo $Texto_Index_20;?></a>.</p>
</div>
</section>
</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>