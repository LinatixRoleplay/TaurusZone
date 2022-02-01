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
			$clave = $datos['Password'];
			$validarcorrero = $datos['CorreoValido'];
			$cambiacorreo = $datos['CambiaCorreo'];
			$correoacambiar = $datos['CorreoACambiar'];
			$tiempocorreo = $datos['TiempoCorreo'];
			$email = $datos['Email'];
			$money = $datos['Money'];
			$totems = $datos['totems'];
			$score = $datos['Nivel'];
			$oz = $datos['Moneda'];
			$online = $datos['Online'];
			$ropa = $datos['Skin'];
			$platabanco = $datos['Banco'];
			$posibilidad = $datos['changenamefree'];
			$faccion = $datos['Faccion'];
			$rango = $datos['Rango'];
			$CasaID = $datos['CasaID'];
			$CasaID2 = $datos['CasaID2'];
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
function validarCadena($cadena)
{
	if(strlen($cadena) < 3 || strlen($cadena) > 12)
	{
		return false;
	}
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ";
    for ($i=0; $i<strlen($cadena);
											$i++)
	{
		if (strpos($permitidos, substr($cadena,$i,1))===false)
		{
			return false;
		}
    }
    return true;
}

function validarCadenaEdad($cadena)
{
	if(strlen($cadena) > 2)
	{
		return false;
	}
    $permitidos = "0123456789";
    for ($i=0; $i<strlen($cadena);
											$i++)
	{
		if (strpos($permitidos, substr($cadena,$i,1))===false)
		{
			return false;
		}
    }
    return true;
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

<title><?php echo $NombreServidor?> Roleplay - Cambiar contrase&ntilde;a</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css"> 

<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />

</head>

<body>

<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">



<tbody><tr>

<td width="997">

<?php include("header.php") ?>

<div id="contenido">

<div id="contenido-izquierdo">

<div class="td-img">

<div class="icono-td"><img src="./imagenes/iconos/editar-informacion.png"></div>

<div style=" padding-bottom:160px;height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px">Cambio de nombre</div>

<?php

$firmar			= $_POST['firmar'];
$nombrex1		= $_POST['nombre'];
$apellidox1		= $_POST['apellido'];
$edad			= $_POST['edad'];
$contracuenta	= $_POST['contracuenta'];
$hashedPassword	= md5($contracuenta);

$nombrecompleto = $nombrex1.'_'.$apellidox1;
$nombrecespacio = $nombrex1.' '.$apellidox1;

if($nombrex1)
{
	if($apellidox1)
    {
		if(strlen($nombrecompleto) >= 20)
   	 	{
   	 		echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">La suma de letras entre el nombre y el apellido, no puede ser superior a 20.<br><a href="cambiar-nombre.php">Clic para probar con otro nombre</a><hr></center> </div>';
   	 	}
   	 	else
  	 	{
     		if($edad <= 17 || $edad >= 100)
       		{
	        	echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">La edad ingresada no es correcta.<br><a href="cambiar-nombre.php">Clic para reingresar los datos.</a><hr></center></div>';
	        }
        	else
       		{
				if(validarCadena($nombrex1) == true && validarCadena($apellidox1) == true && validarCadenaEdad($edad) == true)
				{
					if($clave == $hashedPassword)
					{
						if($ban == 0)
						{
							if($posibilidad == 1)
							{
								if($online == 0)
								{
									if($totems < 10)
									{
										echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Se acabaron los cambios de nombres gratuitos, necesitas 10';?><?php echo $Diminutivo?><?php echo ' para volver a cambiarlo.<hr></center> </div>';
									}
									else
									{
										$stm = $con->prepare("SELECT * FROM usuarios WHERE Username = :nombrecompleto");
										$stm->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
										$stm->execute();
										

										$num_rows = $stm->rowCount();

										if($num_rows == 1)
										{
											echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Ya hay una persona con el nombre <b>'.$nombrex1.' '.$apellidox1.'</b><br><a href="/cambiar-nombre.php">Clic para probar con otro nombre</a><hr></center> </div>';
										}
										else
										{
											$mssql = $con->prepare("UPDATE usuarios SET totems = totems-10 WHERE Username = :usuario");
											$mssql->bindParam(':usuario', $name, PDO::PARAM_STR); 
											$mssql->execute();
											

											$mysql = $con->prepare("UPDATE usuarios SET totem = :nombrecompleto WHERE totem = :nombre");
											$mysql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR); 
											$mysql->bindParam(':nombre', $name, PDO::PARAM_STR); 
											$mysql->execute();
											

											$misqk = $con->prepare("UPDATE antecedentes SET Oficial = :nombrecompleto WHERE Oficial = :nombre");
											$misqk->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
											$misqk->bindParam(':nombre', $name, PDO::PARAM_STR); 
											$misqk->execute();
											

											$misqlll = $con->prepare("UPDATE log_baneos SET Baneado = :nombrecompleto WHERE Baneado = :nombre");
											$misqlll->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
											$misqlll->bindParam(':nombre', $name, PDO::PARAM_STR); 
											$misqlll->execute();
											

											$mism = $con->prepare("UPDATE log_transacciones SET Enviador = :nombrecompleto WHERE Enviador = :nombre");
											$mism->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
											$mism->bindParam(':nombre', $name, PDO::PARAM_STR); 
											$mism->execute();
											

											$misn = $con->prepare("UPDATE log_transacciones SET Receptor = :nombrecompleto WHERE Receptor = :nombre");
											$misn->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
											$misn->bindParam(':nombre', $name, PDO::PARAM_STR); 
											$misn->execute();
											

											$mismm = $con->prepare("UPDATE log_ventas SET Vendedor = :nombrecompleto WHERE Vendedor = :nombre");
											$mismm->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
											$mismm->bindParam(':nombre', $name, PDO::PARAM_STR); 
											$mismm->execute();
											

											$misnn = $con->prepare("UPDATE log_ventas SET comprador = :nombrecompleto WHERE comprador = :nombre");
											$misnn->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
											$misnn->bindParam(':nombre', $name, PDO::PARAM_STR); 
											$misnn->execute();
											

											$misl = $con->prepare("INSERT INTO `log_nombres`(`ID`, `Viejo_Nombre`, `Nuevo_Nombre`, `Fecha`) VALUES ('', :nombre, :nombrecompleto, now())");
											$misl->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
											$misl->bindParam(':nombre', $name, PDO::PARAM_STR); 
											$misl->execute();
											

											$misql = $con2->prepare("UPDATE smf_members SET real_name = :nombrecespacio ,member_name= :nombrecompleto ,passwd=SHA1(CONCAT(LOWER(:nombrecompleto), :contracuenta)) WHERE member_name = :nombre");
											$misql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
											$misql->bindParam(':nombrecespacio', $nombrecespacio, PDO::PARAM_STR);
											$misql->bindParam(':nombre', $name, PDO::PARAM_STR);
											$misql->bindParam(':contracuenta', $contracuenta, PDO::PARAM_STR);
											$misql->execute();
											

											if($rango == 6 && $faccion > 0)
											{
												$st = $con->prepare("UPDATE facciones SET Lider = :nombrecompleto WHERE Lider = :nombre");
												$st->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
												$st->bindParam(':nombre', $name, PDO::PARAM_STR); 
												$st->execute();
												
											}
											if($CasaID > 0 || $CasaID2 > 0)
											{
												$sql = $con->prepare("UPDATE propiedades SET Propietario = :nombrecompleto WHERE Propietario = :nombre");
												$sql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
												$sql->bindParam(':nombre', $name, PDO::PARAM_STR); 
												$sql->execute();
												
											}

											$msql = $con->prepare("UPDATE usuarios SET Username=:nombrecompleto, Edad = :edad WHERE Username = :nombre");
											$msql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
											$msql->bindParam(':nombre', $name, PDO::PARAM_STR);
											$msql->bindParam(':edad', $edad, PDO::PARAM_INT);
											$msql->execute();
											

											echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/bien.png" width="60"><hr><font size="2.6px">Cambio de nombre hecho con exito, recuerda ingresar ala cuenta con tu nuevo nombre, -10';?><?php echo $Diminutivo?><?php echo '</b><br><a href="cambiar-nombre.php">Clic para ingresar de nuevo</a><hr></center> </div>';
											session_destroy();
										}
									}
								}
								else
								{
									echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Por favor desconectate del juego para poder cambiar tu nombre y apellido.<br><a href="cambiar-nombre.php">Clic para regresar</a><hr></center> </div>';
								}
							}
							if($posibilidad == 0)
							{
								if($online == 0)
								{
									$stm = $con->prepare("SELECT * FROM usuarios WHERE Username = :nombrecompleto");
									$stm->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
									$stm->execute();
									

									$num_rows = $stm->rowCount();

									if($num_rows == 1)
									{
										echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Ya hay una persona con el nombre <b>'.$nombrex1.' '.$apellidox1.'</b><br><a href="/cambiar-nombre.php">Clic para probar con otro nombre</a><hr></center> </div>';
									}
									else
									{
										$mysql = $con->prepare("UPDATE usuarios SET totem = :nombrecompleto WHERE totem = :nombre");
										$mysql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
										$mysql->bindParam(':nombre', $name, PDO::PARAM_STR); 
										$mysql->execute();
										

										$misqk = $con->prepare("UPDATE antecedentes SET Oficial = :nombrecompleto WHERE Oficial = :nombre");
										$misqk->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
										$misqk->bindParam(':nombre', $name, PDO::PARAM_STR); 
										$misqk->execute();
										

										$misqlll = $con->prepare("UPDATE log_baneos SET Baneado = :nombrecompleto WHERE Baneado = :nombre");
										$misqlll->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
										$misqlll->bindParam(':nombre', $name, PDO::PARAM_STR); 
										$misqlll->execute();
										

										$mism = $con->prepare("UPDATE log_transacciones SET Enviador = :nombrecompleto WHERE Enviador = :nombre");
										$mism->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
										$mism->bindParam(':nombre', $name, PDO::PARAM_STR); 
										$mism->execute();
										

										$misn = $con->prepare("UPDATE log_transacciones SET Receptor = :nombrecompleto WHERE Receptor = :nombre");
										$misn->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
										$misn->bindParam(':nombre', $name, PDO::PARAM_STR); 
										$misn->execute();
										

										$mismm = $con->prepare("UPDATE log_ventas SET Vendedor = :nombrecompleto WHERE Vendedor = :nombre");
										$mismm->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
										$mismm->bindParam(':nombre', $name, PDO::PARAM_STR); 
										$mismm->execute();
										

										$misnn = $con->prepare("UPDATE log_ventas SET comprador = :nombrecompleto WHERE comprador = :nombre");
										$misnn->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
										$misnn->bindParam(':nombre', $name, PDO::PARAM_STR); 
										$misnn->execute();
										

										$misl = $con->prepare("INSERT INTO `log_nombres`(`ID`, `Viejo_Nombre`, `Nuevo_Nombre`, `Fecha`) VALUES ('', :nombre, :nombrecompleto, now())");
										$misl->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
										$misl->bindParam(':nombre', $name, PDO::PARAM_STR); 
										$misl->execute();
										

										$misql = $con2->prepare("UPDATE smf_members SET real_name = :nombrecespacio ,member_name= :nombrecompleto ,passwd=SHA1(CONCAT(LOWER(:nombrecompleto), :contracuenta)) WHERE member_name = :nombre");
										$misql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
										$misql->bindParam(':nombrecespacio', $nombrecespacio, PDO::PARAM_STR);
										$misql->bindParam(':nombre', $name, PDO::PARAM_STR);
										$misql->bindParam(':contracuenta', $contracuenta, PDO::PARAM_STR);
										$misql->execute();
										

										if($rango == 6 && $faccion > 0)
										{
											$st = $con->prepare("UPDATE facciones SET Lider = :nombrecompleto WHERE Lider = :nombre");
											$st->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
											$st->bindParam(':nombre', $name, PDO::PARAM_STR); 
											$st->execute();
											
										}
										if($CasaID > 0 || $CasaID2 > 0)
										{
											$sql = $con->prepare("UPDATE propiedades SET Propietario = :nombrecompleto WHERE Propietario = :nombre");
											$sql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
											$sql->bindParam(':nombre', $name, PDO::PARAM_STR); 
											$sql->execute();
											
										}
										
										$msql = $con->prepare("UPDATE usuarios SET Username=:nombrecompleto, changenamefree = '1', Edad = :edad WHERE Username = :nombre");
										$msql->bindParam(':nombrecompleto', $nombrecompleto, PDO::PARAM_STR);
										$msql->bindParam(':nombre', $name, PDO::PARAM_STR);
										$msql->bindParam(':edad', $edad, PDO::PARAM_INT);
										$msql->execute();
										
										
										echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/bien.png" width="60"><hr><font size="2.6px">Cambio de nombre hecho con exito, recuerda ingresar ala cuenta con tu nuevo nombre, gastastes tu cambio de nombre.</b><br><a href="cambiar-nombre.php">Clic para ingresar de nuevo</a><hr></center> </div>';
										session_destroy();
									}
								}
								else
								{
									echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Por favor desconectate del juego para poder cambiar tu nombre y apellido.<br><a href="cambiar-nombre.php">Clic para regresar</a><hr></center> </div>';
								}
							}
						}
						else
						{
							echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Tu cuenta se encuentra baneada.<br><a href="cambiar-nombre.php">Clic para regresar</a><hr></center> </div>';
						}
					}
					else
					{
						echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Contraseña incorrecta.<br><a href="cambiar-nombre.php">Clic para regresar</a><hr></center> </div>';
					}
				}
				else
				{
?>
					<script language="javascript">alert("Error 5");</script>
<?php
					session_start();
					session_destroy();
					echo "<script>window.location='index.php';</script>";
				}
	        }
	    }
	}
    else
    {
		echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Por favor completa con nombre y apellido.<br><a href="cambiar-nombre.php">Clic para regresar</a><hr></center> </div>';
    }
}
else
{
		echo '<div style="padding:30px 0 0 0;"><center><img src="./imagenes/mal.png" width="60"><hr><font size="2.6px">Por favor completa con nombre y apellido.<br><a href="cambiar-nombre.php">Clic para regresar</a><hr></center> </div>';
}

?>

</div>

</div>

<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>