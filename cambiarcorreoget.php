<?php

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

$correo = $_GET["sel"][0];
$clave = $_GET["sel"][1];
$encriptado	= md5($clave); 

if(isset($_SESSION['User']))
{
    $User = $_SESSION['User'];
	
	$stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
	$stmt->bindParam(':usuario', $User, PDO::PARAM_STR); 
	$stmt->execute();
	
	
	$querydos = $con->prepare("SELECT * FROM usuarios WHERE Email = :correo");
	$querydos->bindParam(':correo', $correo, PDO::PARAM_STR);
	$querydos->execute();
	
	
	$num_rows = $querydos->rowCount();
	
    while($datos = $stmt->fetch())
	{
		$password = $datos['Password'];
    }
}
else echo "<script>window.location='cuenta.php';</script>";

if(!isset($correo))
{
    echo "<script>window.location='cuenta.php';</script>";
}
if(!isset($clave))
{
    echo "<script>window.location='cuenta.php';</script>";
}

if($num_rows == 0)
{
	if($encriptado == $password)
	{
		echo '
		<div id="error">
		<img src="imagenes/correcto2-32.png"><br><br>
		<strong>Acabas de solicitar un cambio de correo.</strong>
		<br>El cambio se completará transcurridos los 30 días a partir de ahora, esta demora es por la seguridad de su cuenta.<br><br>
		<button class="verde-btn btn" type="button" id="btnrecargar" onclick=javascript:location.reload()>Aceptar</button>
		</div>';
		
		$tiempo = time() + 2592000;
		//$tiempo = time() + 10;
		
		$st = $con->prepare("UPDATE usuarios SET CambiaCorreo='1', TiempoCorreo=:tiempo, CorreoACambiar=:correoacambiar WHERE Username = :usuario");   
		$st->bindParam(':tiempo', $tiempo, PDO::PARAM_INT); 
		$st->bindParam(':correoacambiar', $correo, PDO::PARAM_STR); 
		$st->bindParam(':usuario', $User, PDO::PARAM_STR); 
		$st->execute();
		
	}
	else
	{
		echo '
		<div id="error">
		<img src="./imagenes/dialog-error.png"><br><br>La contraseña ingresada no es correcta.<br><br>
		<a href="#" id="corregir">Corregir</a>
		</div>';
	}
}
else
{
	echo '
	<div id="error">
	<img src="./imagenes/dialog-error.png"><br><br>Ese correo ya esta en uso.<br><br>
	<a href="#" id="corregir">Corregir</a>
	</div>';
}
?>

<div id="nn" style="display:none">
<div id="enviandoLOG" style="display:none;"><table width="404" height="175" cellpadding="0" cellspacing="0"><tr><td align="center" valign="middle"><span id="resultadocarga"><img src="./imagenes/cargandox50.gif"/><br><br><strong><font color="#585858">Procesando...</font></strong></span></td></tr></table></div>
<form action="" id="ccorreo">
<input type="hidden" id="idoc" value="3664">
<div class="txt-fld">
<label for="">Nuevo correo:</label>
<input type="text" name="cemail" id="cemail" value="Tu E-Mail." style="color:#979797">
<input type="text" name="cemail99" id="cemail99" value="" style="display:none">
</div>
<div class="txt-fld">
<label for="">Repetir correo:</label>
<input type="text" name="cemail2" id="cemail2" value="Repetir E-Mail." style="color:#979797">
<input type="text" name="cemail299" id="cemail299" value="" style="display:none">
</div>
<div class="txt-fld">
<label for="">Contraseña:</label>
<input type="text" name="cpass" id="cpass" value="Contraseña de tu cuenta." style="color:#979797">
<input type="password" name="cpass99" id="cpass99" value="" style="display:none">
</div>
<div class="btn-fld">
<button class="verde-btn btn" type="button" id="btncambiar">Cambiar correo</button>
<div id="resultadoLOG" style="display:none; padding:9px;"></div>
</div>
</form>
</div>

<script>
$(function() {
	$(document).keypress(function(e) {
		if(e.which == 13) {
			if($("#cemail299").val() != $("#cemail99").val()){
				alert("Error: Los correos ingresados no son iguales.");	
			}else if($("#cemail299").val() == ""){
				alert("Error: No ingresaste la nueva direcciÃ³n de correo.");	
				$("#cemail299").focus();
			}else if($("#cemail99").val() == ""){
				alert("Error: No ingresaste la nueva direcciÃ³n de correo.");	
				$("#cemail99").focus();
			}else if($("#cpass99").val() == ""){
				alert("Error: No ingresaste la contraseÃ±a de tu cuenta.");	
				$("#cpass99").focus();
			}else{
				$("#btncambiar").hide();
				$("#ccorreo").hide();
				$("#enviandoLOG").show();
				$.get("cambiarcorreoget.php", { 'sel[]': [$("#cemail99").val(), $("#cpass99").val(), $("#idoc").val()] } , function(data) {
					$("#resultadocarga").html(data);
				});
			}
		}
	});
	$("#corregir").click(function() {
		 $( "#error" ).fadeOut( "slow", function() {
			$("#nn").fadeIn();
		});
	});
	$("#cemail").focus(function() {
			$("#cemail").hide();
			$("#cemail99").show();
			$("#cemail99").focus();
	});
	$("#cemail2").focus(function() {
			$("#cemail2").hide();
			$("#cemail299").show();
			$("#cemail299").focus();
	});
	$("#cpass").focus(function() {
		$("#cpass").hide();
		$("#cpass99").show();
		$("#cpass99").focus();
	});
	$("#ocultarLogin").click(function() {
		$("#lean_overlay").fadeOut();
		$("#cambiarcorreo").fadeOut();
	});
	$("#btncambiar").click(function() {
		if($("#cemail299").val() != $("#cemail99").val()){
			alert("Error: Los correos ingresados no son iguales.");	
		}else if($("#cemail299").val() == ""){
			alert("Error: No ingresaste la nueva direcciÃ³n de correo.");	
			$("#cemail299").focus();
		}else if($("#cemail99").val() == ""){
			alert("Error: No ingresaste la nueva direcciÃ³n de correo.");	
			$("#cemail99").focus();
		}else if($("#cpass99").val() == ""){
			alert("Error: No ingresaste la contraseÃ±a de tu cuenta.");	
			$("#cpass99").focus();
		}else{
		$("#btncambiar").hide();
		$("#ccorreo").hide();
		$("#enviandoLOG").show();
		$.get("cambiarcorreoget.php", { 'sel[]': [$("#cemail99").val(), $("#cpass99").val(), $("#idoc").val()] } , function(data) {
			$("#resultadocarga").html(data);
		});
		}
	});
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104151474-1', 'auto');
  ga('send', 'pageview');

</script>