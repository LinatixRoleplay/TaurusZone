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
if($faccion >= 1)
{
	echo "<script>window.location='tubanda.php';</script>";
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
<title><?php echo $NombreServidor?> Roleplay - Crear banda</title>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css">
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<link rel="stylesheet" type="text/css" href="./css/layer.css">
<style>body{font-size: 13px;}.verde-btn{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#8DCC35,#459015) repeat scroll 0 0 #459015;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8DCC35',endColorstr='#459015');background:-webkit-gradient(linear,left top,left bottom,from(#8DCC35),to(#459015));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF!important;text-shadow:0 1px 0 rgba(0,0,0,0.3);font-size:15px!important;padding:2px 6px!important;}.verde-btn:hover{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#A2D956,#479815) repeat scroll 0 0 #A2D956;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#A2D956',endColorstr='#479815');background:-webkit-gradient(linear,left top,left bottom,from(#A2D956),to(#479815));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF;text-shadow:0 1px 0 rgba(0,0,0,0.3);}.btn{padding:4px 12px;margin-bottom:0;line-height:20px;text-align:center;vertical-align:middle;cursor:pointer;color:#333333;border-radius:7px;background-color:#00CC00}</style>
<link rel="stylesheet" href="./css/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="./js/jquery.leanModal.min.js"></script>
<script>
 var cargadocambiarcorreo = 0;
$(function() {
	$( "#tabs" ).tabs({
		beforeLoad: function( event, ui ) {
			ui.panel.html("<div style=\"padding-left:300px;padding-top:80px;padding-bottom:100px;font-size:15px;\"><img src=\"./imagenes/iconos/spinner.gif\"> Cargando...</div>");
			ui.jqXHR.error(function() {
				ui.panel.html("Problema al cargar. Por favor, recarga la p&aacute;gina." );
			});
		}
	});
	$('a[rel*=leanModal]').leanModal({ top : 200, closeButton: ".modal_close" });
	$("#cambiar-correo").click(function() {
		if(cargadocambiarcorreo == 0){
			$("#cargando-cambiar-correo").fadeIn();
			$("#cambiar-correo-ct").load("_cambiarcorreo.php",  function(){
				$("#cargando-cambiar-correo").hide();
				$("#cambiar-correo-ct").fadeIn(800);
				//cargadocambiarcorreo = 1;
			});
		}else{
			$("#cambiar-correo-ct").fadeIn(800);
		}
	});
});

</script>
</head>
<body>
<div style="width:0;height:0; overflow:hidden"><img src="./imagenes/iconos/spinner.gif"></div>
<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
 
<tbody><tr>
<td width="997">
<?php include('header.php') ?>
<div id="contenido">
<div id="contenido-izquierdo">
<div style="height:160px; float:left; padding-top:20px">
<table width="680" align="center" id="bloquesp">
<tbody>
<tr>
<div class="col-lg-12">
			<div class="crear-banda">
				<a href="cb.php?b=1" style="float: left;margin-left: 40px;margin-top: 100px;padding-top: 120px;text-align: center;width: 260px; padding-bottom:100px">Crear pandilla</a>
				<a href="cb.php?b=2" style="float: left;margin-left: 70px;margin-top: 100px;padding-top: 120px;text-align: center;width: 290px; padding-bottom:100px">Crear mafia</a>
			</div>
			<br><br/>
			<div class="crear-banda-bajo">
				Recuerda que al crear una banda, solamente podr&aacute;s luchar por territorios del mismo tipo. Por ejemplo si creas una pandilla, solamente podr&aacute;s desafiar a otra pandilla y no a una mafia.<br/><br/>
				Igualmente pueden organizar por el foro algunas batallas entre las mafias y pandillas actuales con territorio, pero est&aacute;s no tendran ning&uacute;n premio.<br/><br/>
				Por el momento solamente hay dos territorios por conquistar, uno para mafia y el otro para pandilla.
			</div>
		</div>
</tr>
</tbody></table>
</div>
<div style="float:left; width:690px">
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
<div id="info" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
<br>
<table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
</span>
</div>
</div>
</font>
</td>
</table>
<br>
<table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">

</table>

</div><div id="ui-tabs-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-2" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-3" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-4" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-5" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-6" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div><div id="ui-tabs-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-7" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;"></div>
</div></div>
</div>
<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>