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
			$faccion = $datos['Faccion'];
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

<title><?php echo $NombreServidor?> Roleplay - <?php include_once('./kev/idioma.php'); echo $Texto_Index_207;?></title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css">

<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />

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

<script async="" src="//www.google-analytics.com/analytics.js"></script><script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-16687198-9', 'auto');

  ga('send', 'pageview');



</script>

<td width="997">

<?php include("header.php"); ?>

<div id="contenido">

<div id="contenido-izquierdo">

<div class="td-gr">
<div class="icono-td"><img src="imagenes/iconos/casa.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px"><?php echo $Texto_Index_199;?></div>
<div class="ft1"> <div>
<img src="imagenes/autos/492.jpg"/>
</div>
<div class="datos2"><font size="2px"><?php echo $Texto_Index_200;?>: <span>Greenwood</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(492);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(492);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(492);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=492" title="<?php echo $Texto_Index_206;?> Greenwood">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/515.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Roadtrain</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(515);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(515);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(515);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=515" title="<?php echo $Texto_Index_206;?> Roadtrain">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/516.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Nebula</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(516);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(516);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(516);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=516" title="<?php echo $Texto_Index_206;?> Nebula">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/518.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Buccaneer</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(519);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(518);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(518);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=518" title="<?php echo $Texto_Index_206;?> Buccaneer">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/521.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>FCR-900</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(521);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(521);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(521);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=521" title="<?php echo $Texto_Index_206;?> FCR-900">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/522.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>NRG-500</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(522);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(522);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(522);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=522" title="<?php echo $Texto_Index_206;?> NRG-500">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/524.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Cement Truck</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(524);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(524);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(524);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=524" title="<?php echo $Texto_Index_206;?> Cement Truck">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/526.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Fortune</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(526);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(526);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(526);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=526" title="<?php echo $Texto_Index_206;?> Fortune">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/527.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Cadrona</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(527);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(527);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(527);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=527" title="<?php echo $Texto_Index_206;?> Cadrona">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/514.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Tanker</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(514);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(514);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(514);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=514" title="<?php echo $Texto_Index_206;?> Tanker">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/510.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Mountain Bike</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(510);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(510);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(510);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=510" title="<?php echo $Texto_Index_206;?> Mountain Bike">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/509.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Bike</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(509);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(509);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(509);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=509" title="<?php echo $Texto_Index_206;?> Bike">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/494.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Hotring</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(494);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(494);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(494);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=494" title="<?php echo $Texto_Index_206;?> Hotring">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/495.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Sandking</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(495);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(495);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(495);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=495" title="<?php echo $Texto_Index_206;?> Sandking">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/499.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Benson</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(499);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(499);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(499);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=499" title="<?php echo $Texto_Index_206;?> Benson">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/502.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Hotring Racer A</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(502);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(502);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(502);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=502" title="<?php echo $Texto_Index_206;?> Hotring Racer A">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/503.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Hotring Racer B</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(503);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(503);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(503);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=503" title="<?php echo $Texto_Index_206;?> Hotring Racer B">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/504.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Bloodring Banger</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(504);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(504);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(504);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=504" title="<?php echo $Texto_Index_206;?> Bloodring Banger">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/507.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Elegant</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(507);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(507);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(507);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=507" title="<?php echo $Texto_Index_206;?> Elegant">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/508.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Journey</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(508);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(508);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(508);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=508" title="<?php echo $Texto_Index_206;?> Journey">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/529.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Willard</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(529);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(529);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(529);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=529" title="<?php echo $Texto_Index_206;?> Willard">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/540.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Vincent</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(540);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(540);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(540);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=540" title="<?php echo $Texto_Index_206;?> Vincent">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/571.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Kart</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(571);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(571);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(571);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=571" title="<?php echo $Texto_Index_206;?> Kart">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/575.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Broadway</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(575);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(575);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(575);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=575" title="<?php echo $Texto_Index_206;?> Broadway">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/576.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Tornado</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(576);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(576);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(576);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=576" title="<?php echo $Texto_Index_206;?> Tornado">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/581.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>BF-400</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(581);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(581);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(581);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=581" title="<?php echo $Texto_Index_206;?> BF-400">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/585.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Emperor</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(585);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(585);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(585);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=585" title="<?php echo $Texto_Index_206;?> Emperor">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/586.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Wayfarer</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(586);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(586);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(586);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">25<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=586" title="<?php echo $Texto_Index_206;?> Wayfarer">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/588.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Mobile Hotdog</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(588);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(588);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(588);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=588" title="<?php echo $Texto_Index_206;?> Mobile Hotdog">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/600.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Picador</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(600);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(600);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(600);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=600" title="<?php echo $Texto_Index_206;?> Picador">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/568.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Bandito</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(568);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(568);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(568);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=568" title="<?php echo $Texto_Index_206;?> Bandito">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/562.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Elegy</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(562);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(562);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(562);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=562" title="<?php echo $Texto_Index_206;?> Elegy">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/559.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Jester</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(559);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(559);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(559);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=559" title="<?php echo $Texto_Index_206;?> Jester">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/541.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Bullet</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(541);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(541);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(541);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=541" title="<?php echo $Texto_Index_206;?> Bullet">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/543.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Sadler</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(543);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(543);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(543);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=543" title="<?php echo $Texto_Index_206;?> Sadler">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/546.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Intruder</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(546);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(546);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(546);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=546" title="<?php echo $Texto_Index_206;?> Intruder">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/547.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Primo</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(547);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(547);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(547);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=547" title="<?php echo $Texto_Index_206;?> Primo">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/549.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Tampa</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(549);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(549);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(549);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=549" title="<?php echo $Texto_Index_206;?> Tampa">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/550.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Sunrise</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(550);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(550);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(550);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=550" title="<?php echo $Texto_Index_206;?> Sunrise">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/555.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Windsor</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(555);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(555);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(555);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">30<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=555" title="<?php echo $Texto_Index_206;?> Windsor">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/558.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Uranus</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(558);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(558);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(558);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=558" title="<?php echo $Texto_Index_206;?> Uranus">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/605.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Sadler</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(605);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(605);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(605);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">5<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=605" title="<?php echo $Texto_Index_206;?> Sadler">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/401.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Bravura</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(401);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(401);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(401);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=401" title="<?php echo $Texto_Index_206;?> Bravura">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/423.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Mr. Whoopee</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(423);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(423);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(423);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=423" title="<?php echo $Texto_Index_206;?> Mr. Whoopee">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/424.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>BF. Injection</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(424);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(424);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(424);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=424" title="<?php echo $Texto_Index_206;?> BF. Injection">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/426.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Premier</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(426);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(426);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(426);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=426" title="<?php echo $Texto_Index_206;?> Premier">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/431.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Bus</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(431);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(431);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(431);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=431" title="<?php echo $Texto_Index_206;?> Bus">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/436.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Previon</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(436);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(436);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(436);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=436" title="<?php echo $Texto_Index_206;?> Previon">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/437.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Coach</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(437);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(437);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(437);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=437" title="<?php echo $Texto_Index_206;?> Coach">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/438.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Cabbie</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(438);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(438);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(438);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=438" title="<?php echo $Texto_Index_206;?> Cabbie">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/439.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Stallion</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(439);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(439);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(439);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=439" title="<?php echo $Texto_Index_206;?> Stallion">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/440.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Rumpo</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(440);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(440);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(440);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=440" title="<?php echo $Texto_Index_206;?> Rumpo">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/422.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Bobcat</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(422);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(422);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(422);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=422" title="<?php echo $Texto_Index_206;?> Bobcat">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/421.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Washington</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(421);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(421);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(421);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=421" title="<?php echo $Texto_Index_206;?> Washington">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/402.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Buffalo</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(402);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(402);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(402);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=402" title="<?php echo $Texto_Index_206;?> Buffalo">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/403.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Linerunner</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(403);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(403);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(403);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=403" title="<?php echo $Texto_Index_206;?> Linerunner">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/405.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Sentinel</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(405);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(405);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(405);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=405" title="<?php echo $Texto_Index_206;?> Sentinel">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/408.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Trashmaster</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(408);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(408);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(408);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=408" title="<?php echo $Texto_Index_206;?> Trashmaster">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/410.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Manana</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(410);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(410);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(410);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=410" title="<?php echo $Texto_Index_206;?> Manana">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/413.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Pony</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(413);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(413);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(413);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=413" title="<?php echo $Texto_Index_206;?> Pony">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/418.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Moonbeam</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(418);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(418);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(418);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">30<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=418" title="<?php echo $Texto_Index_206;?> Moonbeam">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/419.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Esperanto</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(419);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(419);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(419);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=419" title="<?php echo $Texto_Index_206;?> Esperanto">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/420.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Taxi</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(420);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(420);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(420);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=420" title="<?php echo $Texto_Index_206;?> Taxi">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/442.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Romero</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(442);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(442);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(442);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=442" title="<?php echo $Texto_Index_206;?> Romero">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/443.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Packer</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(443);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(443);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(443);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=443" title="<?php echo $Texto_Index_206;?> Packer">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/462.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Faggio</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(462);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(462);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(462);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">25<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=462" title="<?php echo $Texto_Index_206;?> Faggio">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/467.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Oceanic</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(467);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(467);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(467);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=467" title="<?php echo $Texto_Index_206;?> Oceanic">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/468.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Sanchez</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(468);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(468);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(468);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=468" title="<?php echo $Texto_Index_206;?> Sanchez">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/470.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Patriot</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(470);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(470);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(470);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=470" title="<?php echo $Texto_Index_206;?> Patriot">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/471.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Quad</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(471);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(471);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(471);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=471" title="<?php echo $Texto_Index_206;?> Quad">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/474.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Hermes</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(474);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(474);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(474);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=474" title="<?php echo $Texto_Index_206;?> Hermes">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/481.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>BMX</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(481);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(481);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(481);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=481" title="<?php echo $Texto_Index_206;?> BMX">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/483.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Camper</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(483);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(483);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(483);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">20<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=483" title="<?php echo $Texto_Index_206;?> Camper">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/461.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>PCJ-600</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(461);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(461);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(461);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=461" title="<?php echo $Texto_Index_206;?> PCJ-600">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/459.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Berkleys RC Van</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(459);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(459);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(459);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">15<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=459" title="<?php echo $Texto_Index_206;?> Berkleys RC Van">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/434.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Hotknife</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(434);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(434);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(434);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=434" title="<?php echo $Texto_Index_206;?> Hotknife">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/455.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Flatbed</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(455);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(455);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(455);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=455" title="<?php echo $Texto_Index_206;?> Flatbed">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/457.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Caddy</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(457);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(457);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(457);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=457" title="<?php echo $Texto_Index_206;?> Caddy">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/458.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Solair</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(458);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(458);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(458);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">10<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=458" title="<?php echo $Texto_Index_206;?> Solair">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/453.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Reefer</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(453);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(453);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(453);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=453" title="<?php echo $Texto_Index_206;?> Reefer">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/595.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Launch</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(595);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(595);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(595);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=595" title="<?php echo $Texto_Index_206;?> Launch">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/446.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Squalo</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(446);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(446);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(446);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=446" title="<?php echo $Texto_Index_206;?> Squalo">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/493.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Jetmax</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(493);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(493);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(493);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=493" title="<?php echo $Texto_Index_206;?> Jetmax">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/452.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Speeder</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(452);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(452);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(452);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=452" title="<?php echo $Texto_Index_206;?> Speeder">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/473.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Dinghy</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(473);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(473);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(473);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">30<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=473" title="<?php echo $Texto_Index_206;?> Dinghy">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/454.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Tropic</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(454);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(454);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(454);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=454" title="<?php echo $Texto_Index_206;?> Tropic">Comprar</a></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/484.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Marquis</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(484);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(484);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(484);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">35<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=484" title="<?php echo $Texto_Index_206;?> Marquis">Comprar</a></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/487.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Maverick</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(487);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(487);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(487);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="orange">110<?php echo $Diminutivo?></font> - <a href="comprar-vehiculo.php?id=487" title="<?php echo $Texto_Index_206;?> Maverick">Comprar</a></span>
</div>
</div>


</div>

</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>