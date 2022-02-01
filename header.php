<style>.alertas{float:left;margin-left:660px;margin-top:170px;position:absolute;background-color:#0081ff;border-radius:3px;padding:0.2em 0.4em 0.2em;color:#FFFFFF;font-weight:bold;}.alertas a{color:#FFF;}.alertas:hover{background-color:#0068ce;}.alertas a:hover{color:#f0f0f0;}</style>
<div style="background-color:#000; position:absolute; width:997px; height:164px; top:29px; background-image:url(./imagenes/fondos-cabecera/<?php $andi = rand(1, 6); echo $andi;?>.jpg)"></div>

<?php
if(isset($_SESSION['User']))
{
?>
<div class="header-s3-2">
<?php
}
else
{
?>
<div class="header-s3-">
<?php
}
?>


<div class="ip">
<font size="2px">IP S1:</font> <b><a href="samp://<?php echo $serverIP ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?>" style="color:#FFFFFF; font-size: 13px;" title="Agregar a favoritos"><?php echo $serverIP ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?></a></b>
</div>

<?php
if(isset($_SESSION['User']))
{
?>

<div class="logged-usuario"><font size="2px;"><?php $quitargion=str_replace("_"," ",$name); echo $quitargion?></div>
<div class="img-usuario"><?php echo '<img src="./imagenes/personajes/'.$ropa.'.png">';?></div>
<div class="iconos-usuario">
<a href="../cuenta.php" title="Tu cuenta"><img src="./imagenes/iconos/casa.png" align="absmiddle" border="0"/></a> &nbsp;
<a href="../logout.php" title="Cerrar sesi&oacute;n - Salir"><img src="./imagenes/iconos/llave_salir.png" align="absmiddle" border="0"/></a>
</div>

<?php
}
include('./kev/idioma.php');
if(!isset($_SESSION['User']))
{
?>
<div class="casa"><a href="../ingresar.php" title="<?php echo $Texto_Index_92;?>"><img src="./imagenes/iconos/casa.png" align="absmiddle" border="0"></a></div>
<div class="nologeado">
<a href="../ingresar.php" title="<?php echo $Texto_Index_92;?>"><?php echo $Texto_Index_91;?></a>
</div>
<?php
}

?>
</div>
<div id="menu-superior-s3">
<ul>
<li id="principal<?php echo $principalAC; ?>"><a href="index.php">Pincipal</a></li>
<li id="foro"><a href="./foro/index.php">Foro</a></li>

<?php
if(!isset($_SESSION['User']))
{
?>
<li id="tucuenta"><a href="./ingresar.php">Tu cuenta</a></li>
<?php
}
else
{
?>
<li id="tucuenta<?php echo $tucuentaAC; ?>"><a href="./cuenta.php">Tu cuenta</a></li>
<?php
}
?>


<?php
if(!isset($_SESSION['User']))
{
?>
	<li id="crear-cuenta"><a href="./nuevo.php">Crear cuenta</a></li>
<?php
}
else
{
?>
	<li id="cuenta-creada"><a></a></li>
<?php
}
?>
</ul>
<div class="invitaciones-pendientes">
<?php include_once('./invitaciones/invitacion.php'); ?>
</div>
</div>
<?php
if(isset($_SESSION['User']))
{
if($ban == 1 || $validarcorrero == 0 || $cambiacorreo == 1)
{
?>
<div style="float:left;width:997px; margin-top:5px; font-size:12px;">
<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
<tbody>
<tr bgcolor="#333333"><td align="left" style="border-top: 1px solid #424242;border-left: 1px solid #424242; color:#FFFFFF;text-shadow: 0 1px 0 #000000;"><strong><font size="2.6px">Mensajes importantes</strong></td></tr>
</tbody>
</table>
</div>

<table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">

<tbody>
<?php
if($validarcorrero == 0 && $cambiacorreo != 1)
{
?>
	<tr class="alerta-roja">
	<td bgcolor="#FFFFCC" valign="middle" align="left" colspan="2">
	<img src="./imagenes/iconos/alerta16.png" align="absmiddle"> Tu direcci&oacute;n de correo <strong> <?php echo $email;?> </strong> no ha sido verificada todavía. (<a href="/enviar-verificacion.php">Enviar email de verificaci&oacute;n</a><!-- / <a href="/cambiar-correo.php" title="Cambiar direcci&oacute;n de correo.">Cambiar direcci&oacute;n de correo</a>-->)
	</td>
	</tr>
<?php
}
if($cambiacorreo > 0)
{
?>
	<tr class="alerta-roja">
	<td bgcolor="#FFFFCC" valign="middle" align="left" colspan="2">
	<img src="./imagenes/iconos/alerta16.png" align="absmiddle"> La dirección de correo de tu cuenta se cambiará a <strong> <?php echo $correoacambiar;?> </strong> en <b id="tiempo"></b> (<a href="/ccc.php" title="Cancelar cambio de correo">Cancelar cambio</a>)
	</td>
	</tr>
<?php
}
if($ban == 1)
{
?>
	<tr>
	<td valign="middle" bgcolor="RED" align="left" colspan="1" style="color:white"><img src="./imagenes/iconos/alerta16.png" align="absmiddle"><font size="2.6px"> Tu cuenta ha sido baneada por <strong><?php echo $razon;?></strong>  el <strong><?php echo $Conexion;?></strong>.</td>
	</tr>
<?php
}
?>
</tbody>

</table>

<?php
}
}
?>

<script>
<?php
if($cambiacorreo > 0)
{
?>
var countDownDate = new Date(<?php echo $tiempocorreo * 1000;?>).getTime();
var x = setInterval(function()
{
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    var horas = ('0'+hours).slice(-2);
    var minutos = ('0'+minutes).slice(-2);
    var segundos = ('0'+seconds).slice(-2);

    if(days == 0)
    {
    	document.getElementById("tiempo").innerHTML = horas + ":" + minutos + ":" + segundos + "h";
    }
    else
    {
    	document.getElementById("tiempo").innerHTML = days + "d " + horas + ":" + minutos + ":" + segundos + "h";
    }
    if (distance < 0)
	{
		clearInterval(x);
        document.getElementById("tiempo").innerHTML = "Completado";
		location.reload();
	}
}, 1000);
<?php
}
?>
</script>