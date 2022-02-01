<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if($_SESSION['User'])
{ 
	echo "<script>window.location='cuenta.php';</script>";
}
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title><?php echo $NombreServidor?> Roleplay - Crear cuenta</title>
<link rel="stylesheet" type="text/css" href="./css/estilos3.css"/>
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<script src="./js/jquery-1.9.1.js"></script>
<script src="./js/jquery-ui.js"></script>
<script>
$(function() {
$( document ).tooltip();
});
</script>
<style>
label{display:inline-block;width:5em;}
.ui-tooltip{padding:5px;position:absolute;z-index:9999;max-width:220px;-webkit-box-shadow:0 0 5px #aaa;box-shadow:0 0 5px #aaa;background-color:#FFC;border:1px #999999 solid;}
body .ui-tooltip{border-width:1px;}
.nuevo-bg{background-image:url(./imagenes/nuevo-bg.png);float:left;width:975px;height:730px;margin-left:11px;background-repeat:no-repeat}
.bloq-iz{float:left;width:360px;margin-top:115px;padding-left:20px;padding-right:3px;height:315px;}
.bloq-de{float:left;width:560px;margin-top:110px;margin-left:18px;height:315px;}
.bloq-desc{float:left;clear:both;margin-left:20px;margin-top:18px;text-shadow:0 1px 0 #FFFFFF;width:930px}
.bloq-iz{font-size:14px;text-shadow:0 1px 0 #FFFFFF;}
.bloq-iz input[type="text"],input[type="password"],select{font-size:15px;padding:4px;width:190px;text-shadow:0 1px 0 #FFFFFF;background-image:url(./imagenes/fondo-input-text.png);border:1px #CCCCCC solid;color:#666666}
.bloq-iz input[type="text"]:focus,input[type="password"]:focus{border-color:rgba(82,168,236,0.8);outline:0;outline:thin dotted \9;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(82,168,236,.6);}
.rec-iz{float:left;width:150px;margin-top:7px;}
.rec-de{float:left;width:210px;}
.verde-btn{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#8DCC35,#459015) repeat scroll 0 0 #459015;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8DCC35',endColorstr='#459015');background:-webkit-gradient(linear,left top,left bottom,from(#8DCC35),to(#459015));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF!important;text-shadow:0 1px 0 rgba(0,0,0,0.3);font-size:15px!important;padding:2px 10px!important;}
.verde-btn:hover{-moz-border-bottom-colors:none;-moz-border-left-colors:none;-moz-border-right-colors:none;-moz-border-top-colors:none;background:-moz-linear-gradient(center top,#A2D956,#479815) repeat scroll 0 0 #A2D956;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#A2D956',endColorstr='#479815');background:-webkit-gradient(linear,left top,left bottom,from(#A2D956),to(#479815));border-color:#7CB32F #387411 #387411;border-image:none;border-right:1px solid #387411;border-style:solid;border-width:1px;box-shadow:0 1px 2px 0 #999999;color:#FFFFFF;text-shadow:0 1px 0 rgba(0,0,0,0.3);}.btn{padding:4px 12px;margin-bottom:0;line-height:20px;text-align:center;vertical-align:middle;cursor:pointer;color:#333333;border-radius:7px}
</style>
</head>
<body>
<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
 
<tr>
<td width="997">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16687198-9', 'auto');
  ga('send', 'pageview');

</script>
<style>.alertas{float:left;margin-left:660px;margin-top:170px;position:absolute;background-color:#0081ff;border-radius:3px;padding:0.2em 0.4em 0.2em;color:#FFFFFF;font-weight:bold;}.alertas a{color:#FFF;}.alertas:hover{background-color:#0068ce;}.alertas a:hover{color:#f0f0f0;}</style>
<div style="background-color:#000; position:absolute; width:997px; height:164px; top:29px; background-image:url(./imagenes/fondos-cabecera/<?php $andi = rand(1, 6); echo $andi;?>.jpg)"></div>
<?php include_once('./kev/idioma.php'); ?>
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
<li id="foro"><a href="./foro/index.php">Foro</a></li>
<li id="tucuenta"><a href="./ingresar.php">Tu cuenta</a></li>
<li id="crear-cuenta-ac"><a href="./nuevo.php">Crear cuenta</a></li>
</ul>

<div class="invitaciones-pendientes">
</div>

</div>

<?php

$idtotem = $_GET['u'];

if(isset($idtotem))
{
	$stmt = $con->prepare("SELECT * FROM usuarios WHERE ID = :idtotem");
	$stmt->bindParam(':idtotem', $idtotem, PDO::PARAM_INT);
	$stmt->execute();
	

	while($row = $stmt->fetch())
	{
		$nombretotem = $row['Username'];
	}
}
else $nombretotem = 0;

function validarCadena($cadena)
{ 
	if(strlen($cadena) < 2 || strlen($cadena) > 24)
	{ 
		return false; 
	} 
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ"; 
    for ($i=0; $i<strlen($cadena); $i++)
	{
		if (strpos($permitidos, substr($cadena,$i,1))===false)
		{
			return false; 
		}
    }
    return true; 
}

function validarCadenaCorreo($cadena)
{ 
	if(strlen($cadena) < 2 || strlen($cadena) > 50)
	{ 
		return false; 
	} 
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ0123456789@-_."; 
    for ($i=0; $i<strlen($cadena); $i++)
	{
		if (strpos($permitidos, substr($cadena,$i,1))===false)
		{
			return false; 
		}
    }
    return true; 
}

function validarCadenaContra($cadena)
{ 
	if(strlen($cadena) < 2 || strlen($cadena) > 24)
	{ 
		return false; 
	} 
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ0123456789"; 
    for ($i=0; $i<strlen($cadena); $i++)
	{
		if (strpos($permitidos, substr($cadena,$i,1))===false)
		{
			return false; 
		}
    }
    return true; 
}

$fecha=strftime( "%d/%m/%Y", time() );

if($_POST['submit'])
{
	$nombre			= $_POST['nomb'];
	$apellido		= $_POST['ape'];
	$contraseña1	= $_POST['con1'];
	$contraseña2 	= $_POST['con2'];
	$emailnumero	= $_POST['email'];
	$genero			= $_POST['genero'];
	
	$nombrecompleto = $nombre.'_'.$apellido;
	$nombrecespacio = $nombre.' '.$apellido;
	
	if($genero == 1)
	{
		$eskin = 250;
		$skinforo = 'personajes/250.png';
	}
	else
	{
		$eskin = 11;
		$skinforo = 'personajes/11.png';
	}
	
	if($_SESSION['img_number'] == $_POST['codigo'])
	{
		if($_POST['nomb'])
		{
			if( $_POST['ape'])
			{
				if($_POST['con1'])
				{
					if($_POST['con2'])
					{
						if($_POST['email'])
						{
							if(validarCadena($nombre) == true && validarCadena($apellido) == true && validarCadenaContra($contraseña1) == true && validarCadenaContra($contraseña2) == true && validarCadenaCorreo($emailnumero) == true)
							{
								if($contraseña1 == $contraseña2)
								{
									$stm = $con->prepare("SELECT * FROM usuarios WHERE Username = :nombrecompleto");
									$stm->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
									$stm->execute();
									
									$num_rows = $stm->rowCount();
									
									if($num_rows > 0)
									{
										echo '<script type="text/javascript">alert("Ya existe una cuenta con ese nombre.");</script>';
									}
									else
									{

										$st = $con->prepare("SELECT * FROM usuarios WHERE Email = :emailnumero");
										$st->bindParam(':emailnumero', $emailnumero, PDO::PARAM_STR);
										$st->execute();
										
										$num_row = $st->rowCount();
										if($num_row > 0)
										{
											echo '<script type="text/javascript">alert("Ya existe una cuenta con ese E-mail.");</script>';
										}
										else
										{
											$IDInsert = 0;

											$gen = $con->prepare("INSERT INTO usuarios (Username, Password, Nivel, Email, Vida, Money, Skin, Sexo, posX, posY, posZ, EMS, ent_totem, totem, registro) VALUES (:nombrecompleto, :contrasena, '1', :emailnumero, '100', '15000', :eskin, :genero, '1723.24', '-1870.86', '13.5645', '1', '0', :nombretotem, :fecha)");
											$gen->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); 
											$gen->bindParam(':contrasena', md5($contraseña1), PDO::PARAM_STR); 
											$gen->bindParam(':emailnumero', $emailnumero, PDO::PARAM_STR); 
											$gen->bindParam(':eskin', $eskin, PDO::PARAM_STR); 
											$gen->bindParam(':genero', $genero, PDO::PARAM_STR); 
											$gen->bindParam(':nombretotem', $nombretotem, PDO::PARAM_STR); 
											$gen->bindParam(':fecha', $fecha, PDO::PARAM_STR); 
											$gen->execute();
											
											$IDInsert = $con->lastInsertId();
											
											$gen2 = $con2->prepare("INSERT INTO `smf_members` (member_name, passwd, real_name, avatar, date_registered, id_group, email_address, is_activated) VALUES (:nombrecompleto, SHA1(CONCAT(LOWER(:nombrecompleto), :contrasena)), :nombrecespacio, :skinforo, UNIX_TIMESTAMP(now()), 0, :emailnumero, 1)");
											$gen2->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); 
											$gen2->bindParam(':contrasena', $contraseña1, PDO::PARAM_STR); 
											$gen2->bindParam(':nombrecespacio', $nombrecespacio, PDO::PARAM_STR); 
											$gen2->bindParam(':skinforo', $skinforo, PDO::PARAM_STR); 
											$gen2->bindParam(':emailnumero', $emailnumero, PDO::PARAM_STR); 
											$gen2->execute();
											
											$sql1 = $con->prepare("INSERT INTO `logros` (ID) VALUES (:id)");   
											$sql1->bindParam(':id', $IDInsert, PDO::PARAM_INT); 
											$sql1->execute();
											
											$sql2 = $con->prepare("UPDATE `registros` SET `Cantidad`= Cantidad+1");	
											$sql2->execute();
											
											$sql3 = $con2->prepare("UPDATE `smf_settings` SET `Value`=:nombrecespacio WHERE `Variable`='latestRealName'");   
											$sql3->bindParam(':nombrecespacio', $nombrecespacio, PDO::PARAM_STR); 
											$sql3->execute();

											$sql4 = $con2->prepare("UPDATE `smf_settings` SET `Value`=Value+1 WHERE `Variable`='totalMembers'");	
											$sql4->execute();
											
											$sql5 = $con2->prepare("UPDATE `smf_settings` SET `Value`=Value+1 WHERE `Variable`='latestMember'"); 
											$sql5->execute();
											
											$_SESSION['User'] = $nombrecompleto;
											
											echo "<script>window.location='reg.php?u=1';</script>";
										}
									}
								}
								else echo '<script type="text/javascript">alert("Las contrase\u00f1as no son iguales.");</script>';
							}
							else echo '<script type="text/javascript">alert("Usaste algun caracter invalido - Error 10.");</script>';
						}
						else echo '<script type="text/javascript">alert("Tienes que ingresar el E-mail de tu cuenta.");</script>';
					}
					else echo '<script type="text/javascript">alert("Completa la verificacion de contrase\u00f1a.");</script>';
				}
				else echo '<script type="text/javascript">alert("Completa la contrase\u00f1a.");</script>';
			}
			else echo '<script type="text/javascript">alert("Tienes que ingresar el apellido de tu personaje.");</script>';
		}
		else echo '<script type="text/javascript">alert("Tienes que ingresar el nombre de tu personaje.");</script>';
	}
	else echo '<script type="text/javascript">alert("El c\u00f3digo de seguridad ingresado no es correcto.");</script>';
}
?>

<div id="contenido">

<div id="contenido">

<div class="nuevo-bg">


<form method="POST">
<div class="bloq-iz">

<div style="margin-bottom:6px;float:left; margin-top:8px">
<div class="rec-iz"><?php echo $Texto_Index_70;?>:</div><div class="rec-de"><input id="nomb" name="nomb" type="text" style="width:86px" title="<?php echo $Texto_Index_71;?>"/>_<input id="ape" name="ape" type="text" style="width:86px" title="<?php echo $Texto_Index_72;?>"/></div>
</div>

<div style="margin-bottom:6px;float:left;">
<div class="rec-iz"><?php echo $Texto_Index_73;?>:</div><div class="rec-de"><input id="con1" name="con1" type="password" title="<?php echo $Texto_Index_74;?>." maxlength="20"/></div>
</div>

<div style="margin-bottom:6px;float:left;">
<div class="rec-iz"><?php echo $Texto_Index_75;?>:</div><div class="rec-de"><input id="con2" name="con2" type="password" title="<?php echo $Texto_Index_76;?>." maxlength="20"//></div>
</div>

<div style="margin-bottom:6px;float:left;">
<div class="rec-iz"><?php echo $Texto_Index_77;?>:</div><div class="rec-de"><input id="email" name="email" type="text" title="<?php echo $Texto_Index_78;?>."/></div>
</div>

<div style="margin-bottom:6px;float:left;">
<div class="rec-iz"><?php echo $Texto_Index_79;?>:</div>
<div class="rec-de">
<select id="genero" name="genero" style="height:28px; width:200px">
<option value="1"><?php echo $Texto_Index_80;?></option>
<option value="2"><?php echo $Texto_Index_81;?></option>
</select>
</div>
</div>

<div style="margin-bottom:20px;float:left; height:32px">
<div class="rec-iz"><?php echo $Texto_Index_82;?>:</div><div class="rec-de" style="margin-top:4px">&nbsp;
<img id="seg" src="./captcha/image.php">
<script>
function recarga()
{
	document.getElementById('seg').src='./captcha/image.php';
}
</script>
<a style="width:25px; height:25px;background-image:url('./imagenes/refresh.gif'); display:block; float:left; margin-right:1px" href="javascript:recarga();" title="<?php echo $Texto_Index_83;?>" alt="S"></a>
</div>
</div>

<div style="margin-bottom:1px;float:left;">
<div class="rec-iz"><?php echo $Texto_Index_84;?>:</div><div class="rec-de"><input id="codigo" name="codigo" type="text" title="<?php echo $Texto_Index_85;?>."/></div>
</div>

<div style="float:left; margin-left: 202px;margin-top: 8px;"><div style="float:left;margin-right: 10px;margin-top: 8px; width:16px"><img src="imagenes/iconos/ajax-cargando.gif" id="estadoa" style="display:none"/></div>
<p class="submit">
<input class="verde-btn btn" type="submit" name="submit" value="<?php echo $Texto_Index_86;?>">
</p>
</div>

</div>
</form>


<div class="bloq-de"><iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $youtube?>?rel=0" frameborder="0" allowfullscreen></iframe></div>

<div class="bloq-desc">
<?php echo $NombreServidor?> <?php echo $Texto_Index_87;?>
<br><br>
<?php echo $Texto_Index_88;?>.
<br><br>
<?php echo $Texto_Index_89;?>.
<br><br>
<?php echo $Texto_Index_90;?>
</div>
</div>
</div>
</div>

<script> 
function isNumber(n)
{
	return !isNaN(parseFloat(n)) && isFinite(n);
}

function validarEmail( strValue)
{
	var objRegExp  = /(^[a-z]([a-z0-9_\.]*)@([a-z0-9_\.]*)([.][a-z]{3})$)|(^[a-z]([a-z0-9_\.]*)@([a-z0-9_\.]*)(\.[a-z]{2})(\.[a-z]{2})*$)/i;
	return objRegExp.test(strValue);
}

function validarNombre(strValue, strMatchPattern)
{
	var objRegExp = new RegExp(strMatchPattern);
	return objRegExp.test(strValue);
}
</script>

<div id="pie"><hr><?php echo $NombreServidor?> Roleplay &copy; 2015</div> </td>
</tr>
</table>
</body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104151474-1', 'auto');
  ga('send', 'pageview');

</script>