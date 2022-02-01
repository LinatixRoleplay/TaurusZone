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
		$sexo = $datos['Sexo'];
		$oz = $datos['Moneda'];
		$online = $datos['Online'];
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

<title><?php echo $NombreServidor?> Roleplay - <?php include_once('./kev/idioma.php'); echo $Texto_Index_232;?></title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<link rel="stylesheet" href="./css/style.css">
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16687198-9', 'auto');
  ga('send', 'pageview');

</script>
<script async="" src="./js/analytics.js"></script>
<script src="./js/jquery-1.9.1.js"></script>

<td width="997">

<?php include("header.php"); ?>

<div id="contenido">
<div id="contenido-izquierdo">
<section class="elcontenedor">
<div class="login">
<h1><?php echo $Texto_Index_232;?></h1>
<div style="background-image:url(./imagenes/Skin/<?php echo $ropa;?>.png); width:150px;height:120px;background-position: -20px bottom; float:left; background-size:180px; background-repeat:no-repeat"></div>
<?php 
if($sexo == 2)
{
?>
	<div style="background-image:url(./imagenes/Skin/250.png); width:150px;height:120px;background-position: -10px bottom; float:left; background-size:180px; background-repeat:no-repeat"></div>
<?php 
}
else
{
?>
	<div style="background-image:url(./imagenes/Skin/11.png); width:150px;height:120px;background-position: -10px bottom; float:left; background-size:180px; background-repeat:no-repeat"></div>
<?php 
}
?>
<div style="float:left; position:absolute;margin-left: 135px;margin-top: 50px;"><img src="./imagenes/flecha-derecha.png"/></div>
<div style="float:left; border:solid #C9C9C9 1px; margin-left:5px; padding:10px;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12) inset; width:278px; font-weight:bold; background-color:#E7E7E7; margin-bottom:10px;"><font size="2px"><?php echo $Texto_Index_146;?>: <span style="float:right; color:green" id="ozn">10<?php echo $Diminutivo?></span></div>
<input name="viejaa" type="password" maxlength="30" placeholder="Contraseña" style="display:none"/>
<input name="cambiar" type="hidden" value="1"/>
<p><input name="nueva" type="password" maxlength="30" placeholder="<?php echo $Texto_Index_233;?>" id="psw"/></p>
<p id="cmp">
<input type="submit" name="commit" value="<?php echo $Texto_Index_234;?>" id="cambiar-sexo"><img src="./imagenes/iconos/spinner.gif" style="display:none; margin-top:15px;" id="cargando"/>
</p>
</div>
</section>
</div>


<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<script>
var Comprando = 0;
	$( "#cambiar-sexo" ).click(function() 
	{
		if(Comprando == 0){
			if($("#psw").val().length < 3)
			{
				$("#psw").focus();
				$("#psw").attr('style','outline-color: #fff584; border-color:#ffcba1;');
				return;
			}
			Comprando = 1;
			$("#cargando").fadeIn();
			$("#cambiar-sexo").hide();
			$("#psw").hide();
			$.post("cambiar-sexo.php", { ps: $("#psw").val(),sx: '2'} , 
			function(data) 
			{
				if(data == 1)
				{
					alert("ERROR: Inicia sesión nuevamente.");
					location.href='./ingresar.php';
				}
				else if(data == 2)
				{
					$("#ozn").attr('style','float:right; color:red');
					alert("ERROR: Necesitas 10<?php echo $Diminutivo?> para realizar el cambio de sexo.");
					Comprando = 0;
					$("#cargando").hide();
					$("#cambiar-sexo").fadeIn();
					$("#psw").fadeIn();
				}
				else if(data == 4)
				{
					alert("ERROR: Tienes que salir del juego para cambiar de sexo.");
					Comprando = 0;
					$("#cargando").hide();
					$("#cambiar-sexo").fadeIn();
					$("#psw").fadeIn();
				}
				else if(data == 9)
				{
					alert("ERROR INTERNO, intenta nuevamente.");
					Comprando = 0;
					$("#cargando").hide();
					$("#cambiar-sexo").fadeIn();
					$("#psw").fadeIn();
				}
				else if(data == 5)
				{
					alert("ERROR: Contraseña incorrecta.");
					Comprando = 0;
					$("#cargando").hide();
					$("#cambiar-sexo").fadeIn();
					$("#psw").fadeIn();
					$("#psw").focus();
					$("#psw").attr('style','outline-color: #fff584; border-color:#ffcba1;');
				}
				else if(data == 3)
				{ 
					$("#cmp").html("<center><strong><span style=\"color:green;\">Cambio realizado corractamente.</span></strong></center>");
					setTimeout(
						function(){
							window.location = './cuenta.php';
						},
					1000);
				}
				else
				{
					$("#cargando").hide();
					$("#cambiar-sexo").fadeIn();
					$("#psw").fadeIn();
				}
			});
		}
	});
</script>

<?php include "pie.php" ?>