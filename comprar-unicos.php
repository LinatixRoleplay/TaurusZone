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
<img src="imagenes/autos/444.jpg"/>
</div>
<div class="datos2"><font size="2px"><?php echo $Texto_Index_200;?>: <span>Monster</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(444);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(444);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(444);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">20$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/556.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Monster "A"</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(556);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(556);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(556);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">20$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/557.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Monster "B"</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(557);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(557);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(557);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">20$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/573.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Dune</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(573);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(573);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(573);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">20$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/574.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Sweeper</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(574);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(574);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(574);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/406.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Dumper</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(406);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(406);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(406);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">100$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/416.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Ambulance</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(416);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(416);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(416);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/417.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Leviathan</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(417);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(417);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(417);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">15$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/433.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Barracks</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(433);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(433);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(433);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">15$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/449.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Tram</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(449);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(449);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(449);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">50$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/456.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Yankee</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(456);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(456);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(456);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/460.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Skimmer</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(460);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(460);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(460);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">10$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/469.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Sparrow</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(469);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(469);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(469);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">15$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/428.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Securicar</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(428);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(428);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(428);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">10$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/485.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Baggage</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(485);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(485);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(485);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/486.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Dozer</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(486);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(486);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(486);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">10$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/488.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>SAN News Maverick</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(488);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(488);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(488);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">15$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/498.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Boxville</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(498);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(498);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(498);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/511.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Beagle</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(511);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(511);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(511);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">10$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/512.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Cropduster</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(512);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(512);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(512);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">10$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/513.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Stuntplane</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(513);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(513);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(513);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">10$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/519.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Shamal</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(519);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(519);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(519);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">20$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/530.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Forklift</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(530);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(530);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(530);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">10$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/531.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Tractor</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(531);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(531);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(531);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/532.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Combine Harvester</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(532);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(532);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(532);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/539.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Vortex</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(539);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(539);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(539);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">20$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/544.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Firetruck LA</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(544);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(544);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(544);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">15$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/548.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Cargobob</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(548);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(548);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(548);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">15$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/552.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Utility Van</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(552);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(552);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(552);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/553.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Nevada</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(553);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(553);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(553);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">20$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/563.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Raindance</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(563);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(563);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(563);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">15$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/572.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Mower</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(572);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(572);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(572);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/577.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>AT400</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(577);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(577);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(577);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">30$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/582.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Newsvan</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(582);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(582);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(582);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/583.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Tug</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(583);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(583);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(583);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/592.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Andromada</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(592);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(592);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(592);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">100$</font></span>
</div>
</div>
<div class="ft1"> <div>
<img src="imagenes/autos/593.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Dodo</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(593);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(593);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(593);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">10$</font></span>
</div>
</div>
<div class="ft2"> <div>
<img src="imagenes/autos/609.jpg"/>
</div>
<div class="datos2"><?php echo $Texto_Index_200;?>: <span>Boxville</span>
<div class="hr2"></div>
<?php echo $Texto_Index_201;?>: <span><?php echo ObtenerCombustibleVeh(609);?> <?php echo $Texto_Index_202;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_203;?>: <span><?php echo ObtenerMaltero(609);?> <?php echo $Texto_Index_204;?></span>
<div class="hr2"></div>
<?php echo $Texto_Index_205;?>: <span><?php echo ObtenerVelocidad(609);?> KM/h</span>
<div class="hr2"></div>
<?php echo $Texto_Index_185;?>: <span style="color:#339900"><font color="green">5$</font></span>
</div>
</div>



</div>

</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>