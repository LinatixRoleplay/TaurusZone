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
		$IDUser = $datos['ID'];
		$name = $datos['Username'];
		$money = $datos['Money'];
		$score = $datos['Nivel'];
		$validarcorrero = $datos['CorreoValido'];
		$cambiacorreo = $datos['CambiaCorreo'];
		$correoacambiar = $datos['CorreoACambiar'];
		$tiempocorreo = $datos['TiempoCorreo'];
		$email = $datos['Email'];
		$fz = $datos['Moneda'];
		$online = $datos['Online'];
		$ropa = $datos['Skin'];
		$platabanco = $datos['Banco'];
		$faccion = $datos['Faccion'];
		$razon = $datos['razon'];
		$ban = $datos['Baneado'];
		$Conexion = $datos['Conexion'];
		$admin = $datos['Admin'];
	}

	$Objeto1 = 0;
	$Objeto2 = 0;
	$Objeto3 = 0;
	$Objeto4 = 0;

	// Prenda 1
	$obj1 = $con->prepare("SELECT * FROM prendas WHERE `Slot` = '1' AND `UserID` = :usuario");
	$obj1->bindParam(':usuario', $IDUser, PDO::PARAM_INT);
	$obj1->execute();
	
	if($row1 = $obj1->fetch(PDO::FETCH_ASSOC))
	{
		$Objeto1 = $row1['Objeto'];
	}
	// Prenda 2
	$obj2 = $con->prepare("SELECT * FROM prendas WHERE `Slot` = '2' AND `UserID` = :usuario");
	$obj2->bindParam(':usuario', $IDUser, PDO::PARAM_INT);
	$obj2->execute();
	
	if($row2 = $obj2->fetch(PDO::FETCH_ASSOC))
	{
		$Objeto2 = $row2['Objeto'];
	}
	// Prenda 3
	$obj3 = $con->prepare("SELECT * FROM prendas WHERE `Slot` = '3' AND `UserID` = :usuario");
	$obj3->bindParam(':usuario', $IDUser, PDO::PARAM_INT);
	$obj3->execute();
	
	if($row3 = $obj3->fetch(PDO::FETCH_ASSOC))
	{
		$Objeto3 = $row3['Objeto'];
	}
	// Prenda 4
	$obj4 = $con->prepare("SELECT * FROM prendas WHERE `Slot` = '4' AND `UserID` = :usuario");
	$obj4->bindParam(':usuario', $IDUser, PDO::PARAM_INT);
	$obj4->execute();
	
	if($row4 = $obj4->fetch(PDO::FETCH_ASSOC))
	{
		$Objeto4 = $row4['Objeto'];
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

<title><?php echo $NombreServidor?> Roleplay - Comprar veh&iacuteculos</title>

<link rel="stylesheet" type="text/css" href="./css/estilos3.css"> 

<link rel="shortcut icon" href="./imagenes/favicon/favicon.ico" />

<style>
.ft1{ width:300px; float:left; padding:10px; margin-left:35px;}
.ft2{ width:300px; float:left;padding:10px;}
.ft1 img{background-color:#FFFFFF; padding:5px; border:solid 1px #CCCCCC; width:250px; height:150px}
.ft2 img{background-color:#FFFFFF; padding:5px; border:solid 1px #CCCCCC; width:250px; height:150px}
.datos2{ background-color:#FFFFFF; padding:5px; float:left; width:250px;border-left:solid 1px #CCCCCC;border-right:solid 1px #CCCCCC;border-bottom:solid 1px #CCCCCC;}
.datos2 span{ text-align:right; float:right; font-weight:bold}
.ft1 a{ background-image:url(imagenes/iconos/carrito.png); background-repeat:no-repeat; height:16px; padding-left:20px; width:0;float:right; overflow:hidden; margin-left:5px;}
.ft2 a{ background-image:url(imagenes/iconos/carrito.png); background-repeat:no-repeat; height:16px; padding-left:20px; width:0;float:right; overflow:hidden; margin-left:5px;}
.verde-btn {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: -moz-linear-gradient(center top , #8DCC35, #459015) repeat scroll 0 0 #459015;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#8DCC35', endColorstr='#459015');
	background: -webkit-gradient(linear, left top, left bottom, from(#8DCC35), to(#459015)); /* for webkit browsers */
    border-color: #7CB32F #387411 #387411;
    border-image: none;
    border-right: 1px solid #387411;
    border-style: solid;
    border-width: 1px;
    box-shadow: 0 1px 2px 0 #999999;
    color: #FFFFFF !important;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);
	
	font-size: 15px !important;
    padding: 2px 10px !important;
}
.verde-btn:hover {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: -moz-linear-gradient(center top , #A2D956, #479815) repeat scroll 0 0 #A2D956;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#A2D956', endColorstr='#479815');
	background: -webkit-gradient(linear, left top, left bottom, from(#A2D956), to(#479815));
    border-color: #7CB32F #387411 #387411;
    border-image: none;
    border-right: 1px solid #387411;
    border-style: solid;
    border-width: 1px;
    box-shadow: 0 1px 2px 0 #999999;
    color: #FFFFFF;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);
}
.btn{padding:4px 12px;margin-bottom:0;line-height:20px;text-align:center;vertical-align:middle;cursor:pointer;color:#333333; border-radius:7px}
	.recs:hover table{
		background-color:#BECFFD;
		
	}
	.cmpbtn{
background: rgba(185,230,49,1);
background: -moz-linear-gradient(top, rgba(185,230,49,1) 0%, rgba(98,153,47,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(185,230,49,1)), color-stop(100%, rgba(98,153,47,1)));
background: -webkit-linear-gradient(top, rgba(185,230,49,1) 0%, rgba(98,153,47,1) 100%);
background: -o-linear-gradient(top, rgba(185,230,49,1) 0%, rgba(98,153,47,1) 100%);
background: -ms-linear-gradient(top, rgba(185,230,49,1) 0%, rgba(98,153,47,1) 100%);
background: linear-gradient(to bottom, rgba(185,230,49,1) 0%, rgba(98,153,47,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b9e631', endColorstr='#62992f', GradientType=0 );
		border: 0;
		padding-left: 12px;
padding-right: 12px;
		padding-top: 5px;
padding-bottom: 7px;
line-height: 17px;
color: #FFF;
		font-size: 13px;
		border-top-left-radius: 6px;
border-bottom-right-radius: 6px;
}
	.cmpbtn:hover
	{

background: rgba(168,209,19,1);
background: -moz-linear-gradient(top, rgba(168,209,19,1) 0%, rgba(77,138,15,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(168,209,19,1)), color-stop(100%, rgba(77,138,15,1)));
background: -webkit-linear-gradient(top, rgba(168,209,19,1) 0%, rgba(77,138,15,1) 100%);
background: -o-linear-gradient(top, rgba(168,209,19,1) 0%, rgba(77,138,15,1) 100%);
background: -ms-linear-gradient(top, rgba(168,209,19,1) 0%, rgba(77,138,15,1) 100%);
background: linear-gradient(to bottom, rgba(168,209,19,1) 0%, rgba(77,138,15,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a8d113', endColorstr='#4d8a0f', GradientType=0 );


		cursor:pointer;
		border-top-right-radius: 6px;
		border-bottom-left-radius: 6px;
	}
</style>
</head>
<body>
<table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">

<tr>
<td width="997">

<script async="" src="./js/analytics.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16687198-9', 'auto');
  ga('send', 'pageview');

</script>

<?php include("header.php") ?>

<?php

function validarCadena($cadena)
{
	if(strlen($cadena) > 6)
	{
		return false;
	}
    $permitidos = "0123456789";
    for ($i=0; $i<strlen($cadena); $i++)
	{
		if (strpos($permitidos, substr($cadena,$i,1))===false)
		{
			return false;
		}
    }
    return true;
}

function ObtenerPrecioPrenda($i)
{
    switch($i)
    {
		case 18963: $precioprenda = 200; return $precioprenda;
		case 19086: $precioprenda = 100; return $precioprenda;
		case 19137: $precioprenda = 200; return $precioprenda;
		default: $precioprenda = 50; return $precioprenda;
    }
}

$prenda = $_GET['u'];

if($prenda > 10000)
{
	if($activar_pr == 1)
	{
		if($online == 0)
		{
			if(validarCadena($prenda) == true)
			{
				if(ObtenerPrecioPrenda($prenda) <= $fz)
				{
					if($prenda == 2052 || 
					$prenda == 2053 || 
					$prenda == 2054 || 
					$prenda == 11704 || 
					$prenda == 18638 || 
					$prenda == 18639 || 
					$prenda == 18640 || 
					$prenda == 18645 || 
					$prenda == 18891 || 
					$prenda == 18892 || 
					$prenda == 18893 || 
					$prenda == 18894 || 
					$prenda == 18895 || 
					$prenda == 18896 || 
					$prenda == 18897 || 
					$prenda == 18898 || 
					$prenda == 18899 || 
					$prenda == 18900 || 
					$prenda == 18901 || 
					$prenda == 18902 || 
					$prenda == 18903 || 
					$prenda == 18904 || 
					$prenda == 18905 || 
					$prenda == 18906 || 
					$prenda == 18907 || 
					$prenda == 18908 || 
					$prenda == 18909 || 
					$prenda == 18910 || 
					$prenda == 18911 || 
					$prenda == 18912 || 
					$prenda == 18913 || 
					$prenda == 18914 || 
					$prenda == 18915 || 
					$prenda == 18916 || 
					$prenda == 18917 || 
					$prenda == 18918 || 
					$prenda == 18919 || 
					$prenda == 18920 || 
					$prenda == 18921 || 
					$prenda == 18922 || 
					$prenda == 18923 || 
					$prenda == 18924 || 
					$prenda == 18925 || 
					$prenda == 18926 || 
					$prenda == 18927 || 
					$prenda == 18928 || 
					$prenda == 18929 || 
					$prenda == 18930 || 
					$prenda == 18931 || 
					$prenda == 18932 || 
					$prenda == 18933 || 
					$prenda == 18934 || 
					$prenda == 18935 || 
					$prenda == 18936 || 
					$prenda == 18937 || 
					$prenda == 18938 || 
					$prenda == 18939 || 
					$prenda == 18940 || 
					$prenda == 18941 || 
					$prenda == 18942 || 
					$prenda == 18943 || 
					$prenda == 18944 || 
					$prenda == 18945 || 
					$prenda == 18946 || 
					$prenda == 18947 || 
					$prenda == 18948 || 
					$prenda == 18949 || 
					$prenda == 18950 || 
					$prenda == 18951 || 
					$prenda == 18952 || 
					$prenda == 18953 || 
					$prenda == 18954 || 
					$prenda == 18955 || 
					$prenda == 18956 || 
					$prenda == 18957 || 
					$prenda == 18958 || 
					$prenda == 18959 || 
					$prenda == 18960 || 
					$prenda == 18961 || 
					$prenda == 18962 || 
					$prenda == 18963 || 
					$prenda == 18964 || 
					$prenda == 18965 || 
					$prenda == 18966 || 
					$prenda == 18967 || 
					$prenda == 18968 || 
					$prenda == 18969 || 
					$prenda == 18970 || 
					$prenda == 18971 || 
					$prenda == 18972 || 
					$prenda == 18973 || 
					$prenda == 18974 || 
					$prenda == 18975 || 
					$prenda == 18976 || 
					$prenda == 18977 || 
					$prenda == 18978 || 
					$prenda == 18979 || 
					$prenda == 19006 || 
					$prenda == 19007 || 
					$prenda == 19008 || 
					$prenda == 19009 || 
					$prenda == 19010 || 
					$prenda == 19011 || 
					$prenda == 19012 || 
					$prenda == 19013 || 
					$prenda == 19014 || 
					$prenda == 19015 || 
					$prenda == 19016 || 
					$prenda == 19017 || 
					$prenda == 19018 || 
					$prenda == 19019 || 
					$prenda == 19020 || 
					$prenda == 19021 || 
					$prenda == 19022 || 
					$prenda == 19023 || 
					$prenda == 19024 || 
					$prenda == 19025 || 
					$prenda == 19026 || 
					$prenda == 19027 || 
					$prenda == 19028 || 
					$prenda == 19029 || 
					$prenda == 19030 || 
					$prenda == 19031 || 
					$prenda == 19032 || 
					$prenda == 19033 || 
					$prenda == 19034 || 
					$prenda == 19035 || 
					$prenda == 19036 || 
					$prenda == 19037 || 
					$prenda == 19038 || 
					$prenda == 19064 || 
					$prenda == 19065 || 
					$prenda == 19066 || 
					$prenda == 19067 || 
					$prenda == 19068 || 
					$prenda == 19069 || 
					$prenda == 19077 || 
					$prenda == 19078 || 
					$prenda == 19079 || 
					$prenda == 19085 || 
					$prenda == 19086 || 
					$prenda == 19093 || 
					$prenda == 19094 || 
					$prenda == 19095 || 
					$prenda == 19096 || 
					$prenda == 19097 || 
					$prenda == 19098 || 
					$prenda == 19101 || 
					$prenda == 19102 || 
					$prenda == 19103 || 
					$prenda == 19104 || 
					$prenda == 19105 || 
					$prenda == 19106 || 
					$prenda == 19107 || 
					$prenda == 19108 || 
					$prenda == 19109 || 
					$prenda == 19110 || 
					$prenda == 19111 || 
					$prenda == 19112 || 
					$prenda == 19113 || 
					$prenda == 19114 || 
					$prenda == 19115 || 
					$prenda == 19116 || 
					$prenda == 19117 || 
					$prenda == 19118 || 
					$prenda == 19119 || 
					$prenda == 19120 || 
					$prenda == 19136 || 
					$prenda == 19137 || 
					$prenda == 19141 || 
					$prenda == 19160 || 
					$prenda == 19163 || 
					$prenda == 19274 || 
					$prenda == 19314 || 
					$prenda == 19330 || 
					$prenda == 19331 || 
					$prenda == 19350 || 
					$prenda == 19351 || 
					$prenda == 19352 || 
					$prenda == 19421 || 
					$prenda == 19422 || 
					$prenda == 19423 || 
					$prenda == 19424 || 
					$prenda == 19469 || 
					$prenda == 19472 || 
					$prenda == 19487 || 
					$prenda == 19488 || 
					$prenda == 19528 || 
					$prenda == 19553 || 
					$prenda == 19554 || 
					$prenda == 19557 || 
					$prenda == 19558 || 
					$prenda == 19583 || 
					$prenda == 19801)
					{
						$precioprenda = ObtenerPrecioPrenda($prenda);
						if($Objeto1 == 0)
						{
							if($Objeto1 != $prenda && $Objeto2 != $prenda && $Objeto3 != $prenda && $Objeto4 != $prenda)
							{
								$st = $con->prepare("UPDATE usuarios SET Moneda=Moneda-:precio WHERE ID = :usuario");
								$st->bindParam(':precio', $precioprenda, PDO::PARAM_INT); $st->bindParam(':usuario', $IDUser, PDO::PARAM_INT);
								$st->execute();
								
								
								$st2 = $con->prepare("INSERT INTO `prendas` (UserID,Objeto,Slot) VALUES (:usuario,:prenda,'1')");
								$st2->bindParam(':usuario', $IDUser, PDO::PARAM_INT); $st2->bindParam(':prenda', $prenda, PDO::PARAM_INT);
								$st2->execute();
								
								
								if($prenda == 19086)
								{
									$st3 = $con->prepare("UPDATE `prendas` SET `fOffsetX`='0.039998',`fOffsetY`='-0.002',`fOffsetZ`='-0.004999',`fRotX`='-176.6',`fRotY`='11.3',`fRotZ`='5.7',`fScaleX`='1',`fScaleY`='1',`fScaleZ`='1' WHERE `UserID`=:usuario AND `Slot`='1'");
									$st3->bindParam(':usuario', $IDUser, PDO::PARAM_INT); 
									$st3->execute();
									
								}
								echo '<script type="text/javascript">alert("Prenda comprada correctamente (-';?><?php echo ObtenerPrecioPrenda($prenda); echo "";?><?php echo $Diminutivo?><?php echo ")";?><?php echo '");</script>';
							}
							else
							{
								echo '<script type="text/javascript">alert("Ya tienes esa prenda en tu inventario");</script>';
							}
						}
						else if($Objeto2 == 0)
						{
							if($Objeto1 != $prenda && $Objeto2 != $prenda && $Objeto3 != $prenda && $Objeto4 != $prenda)
							{
								$st = $con->prepare("UPDATE usuarios SET Moneda=Moneda-:precio WHERE ID = :usuario");
								$st->bindParam(':precio', $precioprenda, PDO::PARAM_INT); $st->bindParam(':usuario', $IDUser, PDO::PARAM_INT);
								$st->execute();
								
								
								$st2 = $con->prepare("INSERT INTO `prendas` (UserID,Objeto,Slot) VALUES (:usuario,:prenda,'2')");
								$st2->bindParam(':usuario', $IDUser, PDO::PARAM_INT); $st2->bindParam(':prenda', $prenda, PDO::PARAM_INT);
								$st2->execute();
								
								
								if($prenda == 19086)
								{
									$st3 = $con->prepare("UPDATE `prendas` SET `fOffsetX`='0.039998',`fOffsetY`='-0.002',`fOffsetZ`='-0.004999',`fRotX`='-176.6',`fRotY`='11.3',`fRotZ`='5.7',`fScaleX`='1',`fScaleY`='1',`fScaleZ`='1' WHERE `UserID`=:usuario AND `Slot`='2'");
									$st3->bindParam(':usuario', $IDUser, PDO::PARAM_INT); 
									$st3->execute();
									
								}
								echo '<script type="text/javascript">alert("Prenda comprada correctamente (-';?><?php echo ObtenerPrecioPrenda($prenda); echo "";?><?php echo $Diminutivo?><?php echo ")";?><?php echo '");</script>';
							}
							else
							{
								echo '<script type="text/javascript">alert("Ya tienes esa prenda en tu inventario");</script>';
							}
						}
						else if($Objeto3 == 0)
						{
							if($Objeto1 != $prenda && $Objeto2 != $prenda && $Objeto3 != $prenda && $Objeto4 != $prenda)
							{
								$st = $con->prepare("UPDATE usuarios SET Moneda=Moneda-:precio WHERE ID = :usuario");
								$st->bindParam(':precio', $precioprenda, PDO::PARAM_INT); $st->bindParam(':usuario', $IDUser, PDO::PARAM_INT);
								$st->execute();
								
								
								$st2 = $con->prepare("INSERT INTO `prendas` (UserID,Objeto,Slot) VALUES (:usuario,:prenda,'3')");
								$st2->bindParam(':usuario', $IDUser, PDO::PARAM_INT); $st2->bindParam(':prenda', $prenda, PDO::PARAM_INT);
								$st2->execute();
								
								
								if($prenda == 19086)
								{
									$st3 = $con->prepare("UPDATE `prendas` SET `fOffsetX`='0.039998',`fOffsetY`='-0.002',`fOffsetZ`='-0.004999',`fRotX`='-176.6',`fRotY`='11.3',`fRotZ`='5.7',`fScaleX`='1',`fScaleY`='1',`fScaleZ`='1' WHERE `UserID`=:usuario AND `Slot`='3'");
									$st3->bindParam(':usuario', $IDUser, PDO::PARAM_INT); 
									$st3->execute();
									
								}
								echo '<script type="text/javascript">alert("Prenda comprada correctamente (-';?><?php echo ObtenerPrecioPrenda($prenda); echo "";?><?php echo $Diminutivo?><?php echo ")";?><?php echo '");</script>';
							}
							else
							{
								echo '<script type="text/javascript">alert("Ya tienes esa prenda en tu inventario");</script>';
							}
						}
						else if($Objeto4 == 0)
						{
							if($Objeto1 != $prenda && $Objeto2 != $prenda && $Objeto3 != $prenda && $Objeto4 != $prenda)
							{
								$st = $con->prepare("UPDATE usuarios SET Moneda=Moneda-:precio WHERE ID = :usuario");
								$st->bindParam(':precio', $precioprenda, PDO::PARAM_INT); $st->bindParam(':usuario', $IDUser, PDO::PARAM_INT);
								$st->execute();
								
								
								$st2 = $con->prepare("INSERT INTO `prendas` (UserID,Objeto,Slot) VALUES (:usuario,:prenda,'4')");
								$st2->bindParam(':usuario', $IDUser, PDO::PARAM_INT); $st2->bindParam(':prenda', $prenda, PDO::PARAM_INT);
								$st2->execute();
								
								
								if($prenda == 19086)
								{
									$st3 = $con->prepare("UPDATE `prendas` SET `fOffsetX`='0.039998',`fOffsetY`='-0.002',`fOffsetZ`='-0.004999',`fRotX`='-176.6',`fRotY`='11.3',`fRotZ`='5.7',`fScaleX`='1',`fScaleY`='1',`fScaleZ`='1' WHERE `UserID`=:usuario AND `Slot`='4'");
									$st3->bindParam(':usuario', $IDUser, PDO::PARAM_INT); 
									$st3->execute();
									
								}
								echo '<script type="text/javascript">alert("Prenda comprada correctamente (-';?><?php echo ObtenerPrecioPrenda($prenda); echo "";?><?php echo $Diminutivo?><?php echo ")";?><?php echo '");</script>';
							}
							else
							{
								echo '<script type="text/javascript">alert("Ya tienes esa prenda en tu inventario");</script>';
							}
						}
						else
						{
							echo '<script type="text/javascript">alert("No puedes comprar mas de 4 prendas.");</script>';
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("Error de prenda #1");</script>';
						echo "<script>window.location='index.php';</script>";
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("No tienes los ';?><?php echo $Diminutivo?><?php echo ' necesarios (';?><?php echo ObtenerPrecioPrenda($prenda);?><?php echo  ')");</script>';
				}
			}
			else
			{
				echo '<script type="text/javascript">alert("Error de prenda #2");</script>';
				echo "<script>window.location='index.php';</script>";
			}
		}
		else
		{
			echo '<script type="text/javascript">alert("Tienes que estar desconectado para comprar una prenda.");</script>';
		}
	}
}

?>

<form method="POST">
<div id="contenido">
<div id="contenido-total">

<div style="width:930px; margin-left: 32px;margin-top: 16px; border-left: solid 1px #DEDEDE; border-right: solid 1px #DEDEDE; border-bottom: solid 1px #DEDEDE; border-top: solid 1px #DEDEDE; background-color: #F6F6F6; background-repeat: no-repeat; float: left;">
<div class="icono-td"><img src="./imagenes/iconos/oz.png" /></div>
<div style="height:22px;font-weight:bold; font-size:14px;text-shadow:0 1px 0 #FFFFFF;color:#305B79;padding-top:8px; margin-left:10px; margin-left:34px; margin-bottom:10px">Venta de prendas</div>


<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<!--<div style="width:81px; height:81px; background-image:url(imagenes/especial_prendas.png); position:absolute;margin-left: 6px;margin-top: 6px;"></div>-->
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/2052.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=2052'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/2053.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=2053'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/2054.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=2054'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/11704.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=11704'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18638.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18638'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18639.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18639'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18640.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18640'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18645.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18645'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18891.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18891'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18892.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18892'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18893.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18893'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18894.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18894'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18895.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18895'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18896.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18896'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18897.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18897'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18898.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18898'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18899.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18899'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18900.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18900'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18901.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18901'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18902.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18902'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18903.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18903'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18904.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18904'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18905.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18905'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18906.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18906'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18907.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18907'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18908.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18908'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18909.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18909'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18910.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18910'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18911.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18911'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18912.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18912'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18913.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18913'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18914.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18914'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18915.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18915'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18916.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18916'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18917.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18917'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18918.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18918'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18919.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18919'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18920.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18920'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18921.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18921'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18922.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18922'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18923.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18923'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18924.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18924'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18925.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18925'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18926.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18926'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18927.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18927'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18928.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18928'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18929.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18929'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18930.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18930'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18931.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18931'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18932.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18932'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18933.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18933'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18934.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18934'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18935.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18935'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18936.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18936'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18937.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18937'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18938.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18938'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18939.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18939'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18940.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18940'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18941.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18941'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18942.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18942'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18943.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18943'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18944.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18944'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18945.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18945'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18946.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18946'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18947.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18947'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18948.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18948'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18949.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18949'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18950.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18950'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18951.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18951'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18952.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18952'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18953.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18953'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18954.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18954'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18955.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18955'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18956.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18956'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18957.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18957'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18958.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18958'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18959.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18959'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18960.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18960'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18961.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18961'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18962.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18962'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18963.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">200 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18963'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18964.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18964'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18965.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18965'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18966.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18966'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18967.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18967'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18968.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18968'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18969.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18969'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18970.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18970'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18971.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18971'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18972.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18972'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18973.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18973'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18974.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18974'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18975.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18975'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18976.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18976'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18977.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18977'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18978.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18978'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/18979.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=18979'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19006.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19006'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19007.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19007'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19008.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19008'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19009.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19009'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19010.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19010'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19011.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19011'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19012.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19012'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19013.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19013'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19014.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19014'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19015.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19015'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19016.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19016'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19017.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19017'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19018.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19018'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19019.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19019'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19020.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19020'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19021.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19021'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19022.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19022'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19023.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19023'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19024.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19024'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19025.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19025'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19026.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19026'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19027.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19027'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19028.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19028'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19029.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19029'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19030.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19030'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19031.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19031'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19032.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19032'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19033.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19033'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19034.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19034'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19035.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19035'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19036.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19036'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19037.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19037'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19038.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19038'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19064.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19064'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19065.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19065'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19066.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19066'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19067.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19067'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19068.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19068'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19069.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19069'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19077.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19077'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19078.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19078'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19079.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19079'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19085.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19085'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19086.gif" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">100 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19086'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19093.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19093'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19094.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19094'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19095.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19095'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19096.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19096'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19097.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19097'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19098.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19098'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19101.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19101'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19102.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19102'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19103.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19103'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19104.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19104'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19105.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19105'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19106.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19106'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19107.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19107'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19108.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19108'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19109.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19109'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19110.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19110'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19111.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19111'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19112.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19112'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19113.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19113'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19114.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19114'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19115.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19115'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19116.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19116'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19117.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19117'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19118.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19118'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19119.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19119'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19120.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19120'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19136.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19136'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19137.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">200 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19137'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19141.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19141'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19160.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19160'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19163.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19163'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19274.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19274'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19314.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19314'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19330.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19330'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19331.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19331'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19350.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19350'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19351.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19351'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19352.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19352'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19421.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19421'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19422.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19422'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19423.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19423'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19424.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19424'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19469.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19469'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19472.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19472'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19487.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19487'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19488.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19488'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19528.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19528'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19553.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19553'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19554.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19554'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19557.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19557'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19558.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19558'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19583.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19583'">Comprar</button>
</td></tr>
</table>
</div>

<div style="float:left;width:212px; margin-bottom:10px;margin-left: 20px;" class="recs">
<div style="width:81px; height:81px;  position:absolute;margin-left: 6px;margin-top: 6px;"></div>
<table bgcolor="#E1E1E1" cellspacing="1" cellpadding="5"><tr><td bgcolor="#FFFFFF" align="center" valign="middle" colspan="2"><img src="imagenes/prendas/19801.png" width="200" /></td></tr>
<tr><td bgcolor="#FFFFFF" height="26">Costo: </td><td bgcolor="#FFFFFF" align="center">50 <?php echo $Diminutivo?></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="2" valign="middle" align="center"><button class="cmpbtn" type="button" onclick="location.href='comprar-prendas.php?u=19801'">Comprar</button>
</td></tr>
</table>
</div>

</div>
</div>
</div>
</form>

<?php include "pie.php" ?>