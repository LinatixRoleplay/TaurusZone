<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

$tipobanda = $_GET['b'];

if($tipobanda == 1)
{
	$estadobanda = "Pandilla";
}
else if($tipobanda == 2)
{
	$estadobanda = "Mafia";
}
else echo "<script>window.location='crear-banda.php';</script>";

if(isset($_SESSION['User']))
{ 
    $User = $_SESSION['User'];
	$stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
	$stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
	$stmt->execute();
	
	
    while($row = $stmt->fetch())
    {
        $name = $row['Username'];
        $money = $row['Money'];
        $validarcorrero = $row['CorreoValido'];
		$cambiacorreo = $row['CambiaCorreo'];
		$correoacambiar = $row['CorreoACambiar'];
		$tiempocorreo = $row['TiempoCorreo'];
		$email = $row['Email'];
        $score = $row['Nivel'];
		$fz = $row['Moneda'];
		$ropa = $row['Skin'];
		$platabanco = $row['Banco'];
		$faccion = $row['Faccion'];
		$online = $row['Online'];
		$razon = $row['razon'];
		$ban = $row['Baneado'];
		$Conexion = $row['Conexion'];
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
<link rel="stylesheet" type="text/css" href="./css/estilos3.css"> 
<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />
<title><?php echo $NombreServidor?> Roleplay - Crear <?php echo $estadobanda ?></title>
<script src="./js/jquery-latest2.js"></script>
<style>DIV#loader.loading{background:url(./imagenes/iconos/spinner.gif) no-repeat center center;}#loader{width:300px;height:344px;background-color:#000000}#negro{background-color:#FFFFFF;width:300px;border:solid 1px #DEDEDE;padding:3px;margin-top:5px;margin-left:15px;margin-bottom:5px;float:left;}.skinid{border:solid 1px #DEDEDE;font-size:11px;width:20px;margin:3px 3px 0 3px;padding:3px}.botonskin{border:solid 1px #DEDEDE;font-size:11px;margin:3px 3px 0 3px;padding:2px;background-color:#FFFFFF;cursor:pointer}.bloquederecho{float:left;width:345px;}.bloq{background-color:#FFFFFF;border:solid 1px #DEDEDE;margin:5px;padding:5px;}body{ font-size: 1px;}</style>
</head>
<body>
<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
 
<tbody><tr>
<td width="997">

<?php include('header.php') ?>

<div id="contenido">
<div id="contenido-izquierdo">

<?php

function validarCadenaNombre($cadena)
{ 
	if(strlen($cadena) < 2 || strlen($cadena) > 20)
	{ 
		return false; 
	} 
    $permitidos = "abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ0123456789 "; 
    for ($i=0; $i<strlen($cadena); $i++)
	{
		if (strpos($permitidos, substr($cadena,$i,1))===false)
		{
			return false; 
		}
    }
    return true; 
}

$nombrebanda	= $_POST['nombre'];

$fecha=strftime( "%d/%m/%Y", time() );

if(isset($_POST['nombre']))
{
	if($online == 0)
	{
		if($nombrebanda)
		{
			if(validarCadenaNombre($nombrebanda) == true)
			{
				if($faccion == 0)
				{
					if($money >= 300000)
					{
						$obj1 = $con->prepare("SELECT * FROM facciones WHERE Nombre = :nombrebanda");
						$obj1->bindParam(':nombrebanda', $nombrebanda, PDO::PARAM_STR); 
						$obj1->execute();
						
						
						$num_rows = $obj1->rowCount();
						
						if($num_rows == 1)
						{
							echo '<script type="text/javascript">alert("Ya hay una banda con ese nombre.");</script>';
						}
						else
						{		
							$obj3 = $con->prepare("INSERT INTO facciones (Nombre, Integrantes, Lider, Rango2, Rango3, Rango4, Rango5, Rango6, Rango7, tipobanda, fecha) VALUES (:nombrebanda, '1', :usuario, NULL, NULL, NULL, NULL, NULL, NULL, :estadobanda, :fecha)");   
							$obj3->bindParam(':estadobanda', $estadobanda, PDO::PARAM_STR);
							$obj3->bindParam(':nombrebanda', $nombrebanda, PDO::PARAM_STR);
							$obj3->bindParam(':usuario', $User, PDO::PARAM_STR);
							$obj3->bindParam(':fecha', $fecha, PDO::PARAM_STR);
							$obj3->execute(); 
							
							
							
							$obj5 = $con->prepare("INSERT INTO `action_queue` (`status`, `Fecha`, `type`) VALUES ('0', NOW(), '5')");
							$obj5->execute();
							
							
							
							//Comando('cargarbandas');

							$obj2 = $con->prepare("SELECT * FROM facciones WHERE Lider = :usuario");
							$obj2->bindParam(':usuario', $User, PDO::PARAM_STR);
							$obj2->execute();
							
							
							while($row2 = $obj2->fetch())
							{
								$IDBanda = $row2['id'];
								
								$obj4 = $con->prepare("UPDATE usuarios SET Money = Money-300000, Faccion = :idbanda, Rango = '8' WHERE Username = :usuario");   
								$obj4->bindParam(':idbanda', $IDBanda, PDO::PARAM_INT); 
								$obj4->bindParam(':usuario', $User, PDO::PARAM_STR); 
								$obj4->execute();
								
							}
							echo '
							<script type="text/javascript">
								alert("Banda creada correctamente.");
								window.location.href="tubanda.php";
							</script>
							';
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("Dinero insuficiente.");</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("No puedes crear una banda si ya formas parte de una.");</script>';
				}
			}
			else
			{
				echo '<script type="text/javascript">alert("Error: Nombre muy extenso o usas simbolos.");</script>';
				echo "<script>window.location='crear-banda.php';</script>";
			}
		}
		else
		{
			echo '<script type="text/javascript">alert("Debes completar todos los campos.");</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("Tienes que estar desconectado.");</script>';
	}
}

?>

<style>
.kevin{
    margin: 5px;
    padding: 0 10px;
    width: 200px;
    height: 34px;
    color: #404040;
    background: red;
    border: 1px solid;
    border-color: #c4c4c4 #d1d1d1 #d4d4d4;
    border-radius: 2px;
    outline: 5px solid #eff4f7;
    -moz-outline-radius: 3px;
    -webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.12);
    box-shadow: inset 0 1px 3px rgba(0,0,0,0.12);
}
</style>

<form method="post" accept-charset="UTF-8">
<div class="datos-banda">
<div class="tipo-de-banda"><?php echo $estadobanda ?></div>
<div class="nombre-de-banda"><input style="kevin" name="nombre" type="text" title="Nombre de la <?php echo $estadobanda ?>"></div>
<div class="costo-banda">$300.000</div>
<div class="condiciones-banda"><input name="condiciones" type="checkbox" value="1"><label onclick="javascript:document.cb.condiciones.click()">Acepto cumplir las <a href="">reglas de banda</a></label></div>

<div class="enviar-banda">
<input name="submit" type="image" value="Crear" src="imagenes/bandas/boton-crear.png" title="Crear <?php echo $estadobanda ?>">
</div>

</div>
</form>


</div>
<div id="menu-derecho">
<style>.rounded-img{display:inline-block;overflow:hidden;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);-moz-box-shadow:0 1px 3px rgba(0,0,0,.9);box-shadow:0 1px 3px rgba(0,0,0,.9);}</style>
<?php include "menu.php" ?>
</div>

<?php include "pie.php" ?>