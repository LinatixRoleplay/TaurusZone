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
			$idplayer = $datos['ID'];
			$name = $datos['Username'];
			$money = $datos['Money'];
			$validarcorrero = $datos['CorreoValido'];
			$cambiacorreo = $datos['CambiaCorreo'];
			$correoacambiar = $datos['CorreoACambiar'];
			$tiempocorreo = $datos['TiempoCorreo'];
			$email = $datos['Email'];
			$score = $datos['Nivel'];
			$sexo = $datos['Sexo'];
			$fz = $datos['Moneda'];
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

<title><?php echo $NombreServidor?> Roleplay - <?php echo $Texto_Index_45;?></title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css">

<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />

<script type="text/javascript" src="./js/scripts.js"></script>

<script src="./js/jquery-latest.js"></script>

<script src="./js/jquery-latest2.js"></script>

<script src="./js/jquery-1.9.1.js"></script>

<script src="./js/jquery-ui.js"></script>

</head>

<body>

<style>
DIV#loader.loading{background:url(./imagenes/iconos/spinner.gif) no-repeat center center;}
#loader{width:300px;height:344px;background-color:#000000}
#negro{background-color:#FFFFFF;width:300px;border:solid 1px #DEDEDE;padding:3px;margin-top:5px;margin-left:15px;margin-bottom:5px;float:left;}
#negro2{background-color:#FFFFFF;width:300px;border:solid 1px #DEDEDE;padding:3px;margin-top:5px;margin-left:15px;margin-bottom:5px;float:left;}
#loader2{width:300px;height:344px;background-color:#000000}
.skinid {border:solid 1px #DEDEDE;font-size:11px;width:27px;margin:3px 3px 0 3px;padding:3px}
.skinid2{border:solid 1px #DEDEDE;font-size:11px;width:27px;margin:3px 3px 0 3px;padding:3px}
.botonskin{border:solid 1px #DEDEDE;font-size:11px;margin:3px 3px 0 3px;padding:2px;background-color:#FFFFFF;cursor:pointer}
.bloquederecho{float:left;width:345px;}
.bloq{background-color:#FFFFFF;border:solid 1px #DEDEDE;margin:5px;padding:5px;}
.verde-btn{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#8DCC35,#459015) repeat scroll 0 0 #459015;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8DCC35',endColorstr='#459015');background:-webkit-gradient(linear,left top,left bottom,from(#8DCC35),to(#459015));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF!important;text-shadow:0 1px 0 rgba(0,0,0,0.3);font-size:15px!important;padding:2px 5px!important;}
.verde-btn:hover{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#A2D956,#479815) repeat scroll 0 0 #A2D956;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#A2D956',endColorstr='#479815');background:-webkit-gradient(linear,left top,left bottom,from(#A2D956),to(#479815));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF;text-shadow:0 1px 0 rgba(0,0,0,0.3);}
.btn{padding:4px 12px;margin-bottom:0;text-align:center;vertical-align:middle;cursor:pointer;color:#333333;border-radius:7px}
</style>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

<tbody><tr>

<td width="997">

<?php include("header.php"); ?>

<div id="contenido">

<div id="contenido-izquierdo">

<?php
if($sexo == 2)
{
?>
<!-- Inicio Mujer -->

<div class="td-gr" style="float:left">
<div class="icono-td"><img src="imagenes/iconos/compra.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px"><?php echo $Texto_Index_182;?></div>
<div id="negro">
<div id="loader" class="loading"></div>
<div style=" padding-left:65px;"><input type="button" value="&laquo; <?php echo $Texto_Index_197;?>" class="botonskin" onclick="javascript:anterior()"/><input name="skinid" id="skinid" type="text" onchange="javascript:skin=include(skins,this.value);setear()" class="skinid"/><input type="button" value="<?php echo $Texto_Index_198;?> &raquo;" class="botonskin" onclick="javascript:siguiente()"/></div>
</div>
<div class="bloquederecho">
<div class="bloq">
<div><span style="font-weight:bold; font-size:14px;text-shadow:0 1px 0 #66FFFF;color:#305B79;"><?php echo $Texto_Index_183;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/compra.png"/><font size="2px">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_186;?>: <span style="float:right;" id="tienda"></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/dinero.png"/>&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_185;?>: <span style="float:right; color:green" id="precio"></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/llave-verde.png"/>&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_187;?>: <span style="float:right;" id="codigo"></span></div>
</div>
<div class="bloq">
<div><span style="font-weight:bold; font-size:14px;text-shadow:0 1px 0 #66FFFF;color:#305B79;"><?php echo $Texto_Index_188;?></span></div>
<div class="hr"></div>
<?php echo $Texto_Index_194;?> <strong><?php echo $Texto_Index_195;?> <span id="codcompleto"></span></strong> <?php echo $Texto_Index_196;?> <span id="tiendabajo"></span>
</div>
</div>
<script type="text/javascript">

function include(arr, obj) {
    for(var i=0; i<arr.length; i++) {
        if (arr[i] == obj) return i;
    }
}
	var ja = <?php echo $idplayer;?>;

	var skins = new Array(9,10,11,13,31,38,39,40,41,53,54,55,56,63,64,75,76,77,85,87,88,89,90,91,92,93,129,130,131,138,139,140,145,148,150,151,152,157,172,178,190,192,193,194,196,197,198,201,205,207,214,215,216,218,219,224,225,226,231,232,233,237,238,243,244,245,246,251,256,257,263);

	var skinsprecios = new Array(2559,1000,1780,1090,1660,1352,1420,1650,1920,1360,1290,1850,1665,1780,1100,1400,2600,1200,1810,2100,1702,1430,1550,2300,1460,2000,1515,1595,1600,1690,1590,1899,2100,2500,2700,1600,1800,1359,2600,1700,1900,2000,1800,2700,1100,1200,1750,1900,3000,1800,2100,2100,3600,1400,3500,1690,1590,2000,1550,1500,1899,1700,1200,1699,1599,1699,1900,1500,1600,1799,1750);

	var tiendas = new Array("Didier Sachs","Sub Urban","ZIP","Sub Urban","Binco","Sub Urban","Sub Urban","Binco","ZIP","Sub Urban","Sub Urban","ZIP","Binco","Victim","Sub Urban","Sub Urban","Didier Sachs","Sub Urban","ZIP","Victim","Binco","Sub Urban","Pro Laps","Didier Sachs","Pro Laps","ZIP","Binco","Binco","ZIP","Pro Laps","Pro Laps","Pro Laps","Victim","Didier Sachs","Didier Sachs","Binco","Victim","Sub Urban","Didier Sachs","Victim","ZIP","ZIP","ZIP","Didier Sachs","Sub Urban","Sub Urban","ZIP","Binco","Victim","Victim","Victim","Sub Urban","Didier Sachs","Sub Urban","Didier Sachs","Binco","Binco","ZIP","Binco","Binco","ZIP","Victim","Sub Urban","Victim","Victim","Victim","Victim","Pro Laps","Victim","Victim","Victim");

	var codigos = new Array("FERU","CGES","SERE","LUJA","BTDK","TANB","SFSH","EUSI","DDOS","OPSF","EOWL","VJUS","QAID","CONH","KSOF","TYWE","OSIF","BHSU","WIOS","CAOI","VSLS","VPSO","LSSF","SFPO","LVPO","SEPW","BRTF","MUAY","THAI","NHSU","SICV","VNSM","JSPM","LSMU","KOKU","PSLO","NQAR","HLAO","DAPL","NYRE","LARN","SLHP","NICU","XASE","XSAE","QWER","RRIO","SBPV","BPSL","VIPE","TURN","NRDS","ESPO","BETD","QXZV","OOIS","XXVD","XXSE","BMER","SVGW","ADSO","PPAR","XXTE","VRTA","BNMT","NRTF","VERA","SDBG","MTYF","ZRSF","GGRT");
		siguiente();
	var skin;
	skin = 0;
	var img = new Image();
	function siguiente(){
	skin++;
	if(skin >= skins.length){
		skin = 0;
	}
    $(function () {

        $(img).load(function () {
            document.getElementById('skinid').value = skins[skin];
			document.getElementById('tienda').innerHTML = tiendas[skin];
			document.getElementById('tiendabajo').innerHTML = tiendas[skin];
			document.getElementById('precio').innerHTML = '$'+skinsprecios[skin];
			var cod = ja+200;
			document.getElementById('codigo').innerHTML = codigos[skin]+' '+cod;
			document.getElementById('codcompleto').innerHTML = codigos[skin]+' '+cod;
			$('#loader').removeClass('loading').append(this);
			$(img).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins[skin]+'.jpg');$(img).fadeOut('slow');
    });
    }
	function setear(){
	if(!skin){
		skin = 0;
	}else if(skin >= skins.length){
		skin = 0;
	}else if(skin < 0){
		skin = skins.length-1;
	}
	document.getElementById('skinid').value = skins[skin];
	document.getElementById('tienda').innerHTML = tiendas[skin];
	document.getElementById('tiendabajo').innerHTML = tiendas[skin];
	document.getElementById('precio').innerHTML = '$'+skinsprecios[skin];
	var cod = ja+200;
	document.getElementById('codigo').innerHTML = codigos[skin]+' '+cod;
	document.getElementById('codcompleto').innerHTML = codigos[skin]+' '+cod;
    $(function () {

        $(img).load(function () {
			$('#loader').removeClass('loading').append(this);
			$(img).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins[skin]+'.jpg');$(img).fadeOut('slow');
    });
    }
	function anterior(){
	skin=skin-1;
	if(skin < 0){
		skin = skins.length-1;
	}
    $(function () {

        $(img).load(function () {
			$('#loader').removeClass('loading').append(this);
			$(img).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins[skin]+'.jpg');$(img).fadeOut('slow');
    });
    }
    //-->
</script>
</div>
<div style="padding:10px; float:left; height:30px">
</div>
<div class="td-gr" style="float:left">
<form method="post" action="comprar-skin.php" onsubmit="return false">
<div class="icono-td"><img src="imagenes/iconos/compra.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px"><?php echo $Texto_Index_189;?> <?php echo $Diminutivo?> <?php echo $Texto_Index_190;?></div>
<div id="negro2">
<div id="loader2" class="loading"></div>
<div style=" padding-left:65px;"><input type="button" value="&laquo; <?php echo $Texto_Index_197;?>" class="botonskin" onclick="javascript:anterior2()"/>
<input name="skinid2" id="skinid2" type="text" onchange="javascript:skin2=include2(skins2,this.value);setear2()" class="skinid2"/>
<input type="button" value="<?php echo $Texto_Index_198;?> &raquo;" class="botonskin" onclick="javascript:siguiente2()"/></div>
</div>
<div class="bloquederecho">
<div class="bloq">
<div><span style="font-weight:bold; font-size:14px;text-shadow:0 1px 0 #66FFFF;color:#305B79;"><?php echo $Texto_Index_183;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/compra.png"/>&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_184;?></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/dinero.png"/>&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_185;?>: <span style="float:right; color:green" id="precio2"><strong>5<?php echo $Diminutivo?></strong></span></div>
</div>
<div class="bloq">
<div><span style="font-weight:bold; font-size:14px;text-shadow:0 1px 0 #66FFFF;color:#305B79;"><?php echo $Texto_Index_188;?></span></div>
<div class="hr"></div>
<?php echo $Texto_Index_192;?> <span style="color:green" id="precio3"><strong>5<?php echo $Diminutivo?></strong></span> <?php echo $Texto_Index_193;?>.
</div>
<div class="bloq">
<center><button class="verde-btn btn" type="button" id="comprar-skin-oz"><?php echo $Texto_Index_191;?></button><span style="display:none; color:#434343; padding:5px; padding-left:25px;" id="comprando-skin"><img src="imagenes/iconos/ajax-cargando.gif" id="estado" align="absmiddle"/> Procesando compra...</span></center>
</div>
</div>
<script type="text/javascript">

function include2(arr, obj) {
    for(var i=0; i<arr.length; i++) {
        if (arr[i] == obj) return i;
    }
}
	var ja2 = 784961;

	var skins2 = new Array(12,65,69,141,169,191,195,298);
		siguiente2();
	var skin2;
	skin2 = 0;
	var img2 = new Image();
	function siguiente2(){
	skin2++;
	if(skin2 >= skins2.length){
		skin2 = 0;
	}
    $(function () {

        $(img2).load(function () {
            document.getElementById('skinid2').value = skins2[skin2];
			if(skins2[skin2] == 271 || skins2[skin2] == 272 || skins2[skin2] == 269){
				document.getElementById('precio2').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
			}else{
				document.getElementById('precio2').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
			}
			var cod = ja2+skins2[skin2];
			$('#loader2').removeClass('loading').append(this);
			$(img2).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins2[skin2]+'.jpg');$(img2).fadeOut('slow');
    });
    }
	function setear2(){
	if(!skin2){
		skin2 = 0;
	}else if(skin2 >= skins2.length){
		skin2 = 0;
	}else if(skin2 < 0){
		skin2 = skins2.length-1;
	}
	document.getElementById('skinid2').value = skins2[skin2];
	var cod = ja2+skins2[skin2];
    $(function () {

        $(img2).load(function () {
            if(skins2[skin2] == 271 || skins2[skin2] == 272 || skins2[skin2] == 269)
			{
				document.getElementById('precio2').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
			}else{
				document.getElementById('precio2').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
			}
			$('#loader2').removeClass('loading').append(this);
			$(img2).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins2[skin2]+'.jpg');$(img2).fadeOut('slow');
    });
    }
	function anterior2(){
	skin2=skin2-1;
	if(skin2 < 0){
		skin2 = skins2.length-1;
	}
    $(function () {

        $(img2).load(function () {
            if(skins2[skin2] == 271 || skins2[skin2] == 272 || skins2[skin2] == 269){
				document.getElementById('precio2').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
			}else{
				document.getElementById('precio2').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
			}
			$('#loader2').removeClass('loading').append(this);
			$(img2).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins2[skin2]+'.jpg');$(img2).fadeOut('slow');
    });
    }
	var Comprando = 0;
						$( "#comprar-skin-oz" ).click(function() {
							if(Comprando == 0){
								Comprando = 1;
								$("#comprando-skin").fadeIn();
								$("#comprar-skin-oz").hide();
								$.get("comprar-skin-oz.php?s=" + $("#skinid2").val() , function(data)
								{
									if(data == 1)
									{
										alert("El skin ingresado no es correcto.");
										Comprando = 0;
										$("#comprando-skin").hide();
										$("#comprar-skin-oz").fadeIn();
									}
									else if(data == 2)
									{
										alert("Necesitas 10<?php echo $Diminutivo?> para comprar esta vestimenta.");
										Comprando = 0;
										$("#comprando-skin").hide();
										$("#comprar-skin-oz").fadeIn();
									}
									else if(data == 3)
									{
										alert("Necesitas 5<?php echo $Diminutivo?> para comprar esta vestimenta.");
										Comprando = 0;
										$("#comprando-skin").hide();
										$("#comprar-skin-oz").fadeIn();
									}
									else if(data == 4)
									{
										alert("Desconectate del juego para comprar la vestimenta.");
										Comprando = 0;
										$("#comprando-skin").hide();
										$("#comprar-skin-oz").fadeIn();
									}
									else if(data == 5)
									{
										$("#comprando-skin").html("Compra realizada corractamente.");
										setTimeout(
										function()
										{
											window.location = "./cuenta.php";
										},
										1000);
									}
									$("#btn"+n).fadeIn();
									$("#span"+n).hide();
								});
							}
						});

</script>
</form>
</div>

<!-- Fin Mujer -->
<?php
}
else
{
?>

<!-- Inicio Hombre -->

<div class="td-gr" style="float:left">
<div class="icono-td"><img src="imagenes/iconos/compra.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px"><?php echo $Texto_Index_182;?></div>
<div id="negro">
<div id="loader" class="loading"></div>

<div style=" padding-left:65px;"><input type="button" value="&laquo; <?php echo $Texto_Index_197;?>" class="botonskin" onClick="javascript:anterior()"/>
<input name="skinid" id="skinid" type="text" onChange="javascript:skin=include(skins,this.value);setear()" class="skinid"/>
<input type="button" value="<?php echo $Texto_Index_198;?> &raquo;" class="botonskin" onClick="javascript:siguiente()"/></div>

</div>
<div class="bloquederecho">
<div class="bloq">
<div><span style="font-weight:bold; font-size:14px;text-shadow:0 1px 0 #66FFFF;color:#305B79;"><?php echo $Texto_Index_183;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/compra.png"/><font size="2px">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_186;?>: <span style="float:right;" id="tienda"></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/dinero.png"/>&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_185;?>: <span style="float:right; color:green" id="precio"></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/llave-verde.png"/>&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_187;?>: <span style="float:right;" id="codigo"></span></div>
</div>
<div class="bloq">
<div><span style="font-weight:bold; font-size:14px;text-shadow:0 1px 0 #66FFFF;color:#305B79;"><?php echo $Texto_Index_188;?></span></div>
<div class="hr"></div>
<?php echo $Texto_Index_194;?> <strong><?php echo $Texto_Index_195;?> <span id="codcompleto"></span></strong> <?php echo $Texto_Index_196;?> <span id="tiendabajo"></span>
</div>
</div>
<script type="text/javascript">

function include(arr, obj) {
    for(var i=0; i<arr.length; i++) {
        if (arr[i] == obj) return i;
    }
}
	var ja = <?php echo $idplayer;?>;

	var skins = new Array(1,2,7,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,32,33,34,35,36,37,43,44,45,46,47,48,49,50,51,52,57,58,59,60,61,62,66,67,68,70,72,73,78,79,80,81,82,83,84,94,95,96,97,98,99,100,101,128,132,133,134,135,136,137,142,143,144,146,147,153,154,156,158,159,160,161,162,163,164,165,166,168,170,171,176,177,179,180,181,182,183,184,185,186,187,188,189,200,202,203,204,206,209,210,212,213,220,221,222,223,227,229,230,234,235,236,239,240,241,242,247,248,249,250,252,253,254,255,258,259,260,261,262,264,268,295,296,297,299);

	var skinsprecios = new Array(1550,1655,1670,1655,1730,1320,2682,1290,1200,1700,1420,1350,1570,1880,1895,1574,1340,1450,1500,1272,1395,1680,1656,1780,1800,1589,1654,1330,1220,1745,1440,1735,1770,1680,1500,1500,2880,1598,1955,1632,2590,1600,1581,1682,1700,1900,1750,1800,1170,1100,1650,1660,1900,1920,1910,1500,1400,1650,1520,1900,1540,1800,1990,1600,1500,1600,1359,1300,1400,1100,1700,1600,1900,2000,2700,2800,1700,1600,1400,1100,1200,1500,1050,3699,3600,3300,3000,1100,1900,2600,1799,1690,2000,1590,1500,1200,1699,1799,2899,3000,3200,1600,2600,1500,2010,2450,2500,2300,1300,3000,1050,1000,1710,1699,1800,3300,2699,1899,1090,1899,1700,1600,1000,2600,1899,1799,1599,1600,2000,2000,2100,2500,1599,2699,1999,1899,1599,1750,1520,1030,1150,3000,2650,1500,1959);

	var tiendas = new Array("Binco","Binco","Binco","Victim","ZIP","Sub Urban","Didier Sachs","Pro Laps","Sub Urban","ZIP","Sub Urban","Sub Urban","Binco","ZIP","ZIP","Binco","Sub Urban","Sub Urban","Sub Urban","Sub Urban","Sub Urban","Binco","Binco","ZIP","ZIP","Binco","Binco","Sub Urban","Pro Laps","ZIP","Sub Urban","Binco","ZIP","Binco","Binco","Binco","Didier Sachs","Binco","ZIP","Binco","Didier Sachs","Binco","Binco","Binco","ZIP","ZIP","ZIP","ZIP","Sub Urban","Sub Urban","Pro Laps","Pro Laps","ZIP","ZIP","ZIP","Binco","Sub Urban","Pro Laps","Pro Laps","ZIP","Pro Laps","Binco","ZIP","ZIP","Binco","Binco","Sub Urban","Sub Urban","Sub Urban","Sub Urban","Victim","Binco","Victim","Victim","Didier Sachs","Didier Sachs","Pro Laps","Binco","Sub Urban","Sub Urban","Sub Urban","Binco","Sub Urban","Didier Sachs","Didier Sachs","Didier Sachs","Didier Sachs","Sub Urban","ZIP","Didier Sachs","Binco","Binco","Binco","Binco","Binco","Sub Urban","Binco","ZIP","Didier Sachs","Didier Sachs","Didier Sachs","Binco","Didier Sachs","Sub Urban","ZIP","Pro Laps","Pro Laps","ZIP","Sub Urban","ZIP","Sub Urban","Sub Urban","Victim","Binco","ZIP","Didier Sachs","Didier Sachs","ZIP","Sub Urban","Binco","Binco","Binco","Sub Urban","Didier Sachs","Binco","ZIP","Binco","Binco","Victim","ZIP","Victim","Didier Sachs","Binco","Didier Sachs","ZIP","ZIP","Binco","ZIP","Binco","Victim","Sub Urban","Didier Sachs","Didier Sachs","Binco","ZIP");

	var codigos = new Array("EUXY","AREP","WESY","FERA","UHYU","BGAS","SFEW","GTYD","BTYU","KILA","DYHG","BTYD","SXCE","ZAEF","VEYT","GHUS","YONR","BTRS","NTYD","MDSR","KTCW","AJRE","SMWA","PERM","SEOL","YOPA","DOSP","VISU","BUSI","OISY","ASEQ","CTYD","BRYR","UYBC","BRDS","BRYR","QKIS","BARQ","FEAQ","CTHU","CKOS","CARK","FRTA","GTAW","TYRE","VHFF","VSWR","TWSS","BUHS","IWOS","AIWP","WOSP","PLSO","MONE","AYUS","KIQW","IJSF","SETA","LYST","QAJU","MJAF","BOSK","BOSS","BBRS","PARL","NEPA","YIMQ","LSYG","SKOI","BNSI","KDOK","VUSW","JSTI","JSOG","BUST","FKSU","MQNB","POSL","PORF","AQPO","GSPL","UFCS","LSOS","FRTN","GRUS","KMXU","XCMS","VSIG","FKIS","AYUQ","KENU","KFCP","LAPO","NFTY","SPOF","XAXY","XOIK","LFPO","FRIK","YJLA","EKRI","KENA","DEVT","BOMT","SORL","RAIJ","CAME","GAWQ","SWQX","DERS","BERO","VSPT","FPSI","RTXS","FGSW","GGSW","BGSG","FKKK","MSUA","TPSA","BHYF","HGFE","FPLA","SDMJ","KJQA","MSIF","QQSJ","ELAC","MAIS","CXSS","BNUT","SHUE","MSOF","POFS","ERTA","JJTF","NTAD","CCHU","INPI","SIUF","MSJF","LAPU","PAME","KSIO","FISS");
		siguiente();
	var skin;
	skin = 0;
	var img = new Image();
	function siguiente(){
	skin++;
	if(skin >= skins.length){
		skin = 0;
	}
    $(function () {

        $(img).load(function () {
            document.getElementById('skinid').value = skins[skin];
			document.getElementById('tienda').innerHTML = tiendas[skin];
			document.getElementById('tiendabajo').innerHTML = tiendas[skin];
			document.getElementById('precio').innerHTML = '$'+skinsprecios[skin];
			var cod = ja+200;
			document.getElementById('codigo').innerHTML = codigos[skin]+' '+cod;
			document.getElementById('codcompleto').innerHTML = codigos[skin]+' '+cod;
			$('#loader').removeClass('loading').append(this);
			$(img).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins[skin]+'.jpg');$(img).fadeOut('slow');
    });
    }
	function setear(){
	if(!skin){
		skin = 0;
	}else if(skin >= skins.length){
		skin = 0;
	}else if(skin < 0){
		skin = skins.length-1;
	}
	document.getElementById('skinid').value = skins[skin];
	document.getElementById('tienda').innerHTML = tiendas[skin];
	document.getElementById('tiendabajo').innerHTML = tiendas[skin];
	document.getElementById('precio').innerHTML = '$'+skinsprecios[skin];
	var cod = ja+200;
	document.getElementById('codigo').innerHTML = codigos[skin]+' '+cod;
	document.getElementById('codcompleto').innerHTML = codigos[skin]+' '+cod;
    $(function () {

        $(img).load(function () {
			$('#loader').removeClass('loading').append(this);
			$(img).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins[skin]+'.jpg');$(img).fadeOut('slow');
    });
    }
	function anterior(){
	skin=skin-1;
	if(skin < 0){
		skin = skins.length-1;
	}
    $(function () {

        $(img).load(function () {
			$('#loader').removeClass('loading').append(this);
			$(img).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins[skin]+'.jpg');$(img).fadeOut('slow');
    });
    }
</script>
</div>
<div style="padding:10px; float:left; height:30px">
</div>
<div class="td-gr" style="float:left">
<form method="post" action="comprar-skin.php" onSubmit="return false">
<div class="icono-td"><img src="imagenes/iconos/compra.png"/></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px"><?php echo $Texto_Index_189;?> <?php echo $Diminutivo?> <?php echo $Texto_Index_190;?></div>
<div id="negro2">
<div id="loader2" class="loading"></div>

<div style=" padding-left:65px;"><input type="button" value="&laquo; <?php echo $Texto_Index_197;?>" class="botonskin" onClick="javascript:anterior2()"/>
<input name="skinid2" id="skinid2" type="text" onChange="javascript:skin2=include2(skins2,this.value);setear2()" class="skinid2"/>
<input type="button" value="<?php echo $Texto_Index_198;?> &raquo;" class="botonskin" onClick="javascript:siguiente2()"/></div>

</div>
<div class="bloquederecho">
<div class="bloq">
<div><span style="font-weight:bold; font-size:14px;text-shadow:0 1px 0 #66FFFF;color:#305B79;"><?php echo $Texto_Index_183;?></span></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/compra.png"/><font size="2px">&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_184;?></div>
<div class="hr"></div>
<div style="float:left"><img src="./imagenes/iconos/dinero.png"/>&nbsp;</div><div>&nbsp;<?php echo $Texto_Index_185;?>: <span style="float:right; color:green" id="precio2"><strong>5<?php echo $Diminutivo?></strong></span></div>
</div>
<div class="bloq">
<div><span style="font-weight:bold; font-size:14px;text-shadow:0 1px 0 #66FFFF;color:#305B79;"><?php echo $Texto_Index_188;?></span></div>
<div class="hr"></div>
<?php echo $Texto_Index_192;?> <span style="color:green" id="precio3"><strong>5<?php echo $Diminutivo?></strong></span> <?php echo $Texto_Index_193;?>.
</div>
<div class="bloq">
<center><button class="verde-btn btn" type="button" id="comprar-skin-oz"><?php echo $Texto_Index_191;?></button><span style="display:none; color:#434343; padding:5px; padding-left:25px;" id="comprando-skin"><img src="imagenes/iconos/ajax-cargando.gif" id="estado" align="absmiddle"/> Procesando compra...</span></center>
</div>
</div>
<script type="text/javascript">

function include2(arr, obj) {
    for(var i=0; i<arr.length; i++) {
        if (arr[i] == obj) return i;
    }
}
	var ja2 = <?php echo $idplayer;?>;

	var skins2 = new Array(3,4,5,6,8,42,86,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,149,173,174,175,208,228,269,270,271,272,273,289,290,291,292,293,294);
		siguiente2();
	var skin2;
	skin2 = 0;
	var img2 = new Image();
	function siguiente2(){
	skin2++;
	if(skin2 >= skins2.length){
		skin2 = 0;
	}
    $(function () {

        $(img2).load(function () {
            document.getElementById('skinid2').value = skins2[skin2];
			if(skins2[skin2] == 271 || skins2[skin2] == 272 || skins2[skin2] == 269){
				document.getElementById('precio2').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
			}else{
				document.getElementById('precio2').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
			}
			var cod = ja2+200;
			$('#loader2').removeClass('loading').append(this);
			$(img2).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins2[skin2]+'.jpg');$(img2).fadeOut('slow');
    });
    }
	function setear2(){
	if(!skin2){
		skin2 = 0;
	}else if(skin2 >= skins2.length){
		skin2 = 0;
	}else if(skin2 < 0){
		skin2 = skins2.length-1;
	}
	document.getElementById('skinid2').value = skins2[skin2];
	var cod = ja2+200;
    $(function () {

        $(img2).load(function () {
            if(skins2[skin2] == 271 || skins2[skin2] == 272 || skins2[skin2] == 269){
				document.getElementById('precio2').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
			}else{
				document.getElementById('precio2').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
			}
			$('#loader2').removeClass('loading').append(this);
			$(img2).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins2[skin2]+'.jpg');$(img2).fadeOut('slow');
    });
    }
	function anterior2(){
	skin2=skin2-1;
	if(skin2 < 0){
		skin2 = skins2.length-1;
	}
    $(function () {

        $(img2).load(function () {
            if(skins2[skin2] == 271 || skins2[skin2] == 272 || skins2[skin2] == 269){
				document.getElementById('precio2').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>10<?php echo $Diminutivo?></strong>';
			}else{
				document.getElementById('precio2').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
				document.getElementById('precio3').innerHTML = '<strong>5<?php echo $Diminutivo?></strong>';
			}
			$('#loader2').removeClass('loading').append(this);
			$(img2).fadeIn('slow');
        }).error(function () {
        }).attr('src', './imagenes/Skins/'+skins2[skin2]+'.jpg');$(img2).fadeOut('slow');
    });
    }
	var Comprando = 0;
						$( "#comprar-skin-oz" ).click(function() {
							if(Comprando == 0){
								Comprando = 1;
								$("#comprando-skin").fadeIn();
								$("#comprar-skin-oz").hide();
								$.get("comprar-skin-oz.php?s=" + $("#skinid2").val() , function(data)
								{
									if(data == 1)
									{
										alert("El skin ingresado no es correcto.");
										Comprando = 0;
										$("#comprando-skin").hide();
										$("#comprar-skin-oz").fadeIn();
									}
									else if(data == 2)
									{
										alert("Necesitas 10<?php echo $Diminutivo?> para comprar esta vestimenta.");
										Comprando = 0;
										$("#comprando-skin").hide();
										$("#comprar-skin-oz").fadeIn();
									}
									else if(data == 3)
									{
										alert("Necesitas 5<?php echo $Diminutivo?> para comprar esta vestimenta.");
										Comprando = 0;
										$("#comprando-skin").hide();
										$("#comprar-skin-oz").fadeIn();
									}
									else if(data == 4)
									{
										alert("Desconectate del juego para comprar la vestimenta.");
										Comprando = 0;
										$("#comprando-skin").hide();
										$("#comprar-skin-oz").fadeIn();
									}
									else if(data == 5)
									{
										$("#comprando-skin").html("Compra realizada corractamente.");
										setTimeout(
										function()
										{
											window.location = "./cuenta.php";
										},
										1000);
									}
									$("#btn"+n).fadeIn();
									$("#span"+n).hide();
								});
							}
						});

</script>
</form>
</div>
<?php
}
?>

</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>