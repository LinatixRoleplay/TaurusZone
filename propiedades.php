<?php 

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User']))
{
?>

<link rel="stylesheet" href="./css/magnific-popup2.css">
<br><table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F0F0F0">

<?php include_once('./kev/idioma.php'); ?>

<td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><strong><font size="2px"><?php echo $Texto_Index_96;?></strong></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="center">

<?php 
	$User = $_SESSION['User'];
	
	$stmt = $con->prepare("SELECT * FROM `propiedades` WHERE Propietario = :usuario");
	$stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
	$stmt->execute();
	
	
	$num_rows = $stmt->rowCount();
	
	if($num_rows >= 1)
	{

		while($datos = $stmt->fetch())
		{
			$id				= $datos['ID'];
			$propietario	= $datos['Propietario'];
			$interior		= $datos['Interior'];
			$nivel			= $datos['Nivel'];
			$moneda			= $datos['EnVentaPor'];
			$precio			= $datos['Precio'];			
			$A1				= $datos['AK47'];
			$A2				= $datos['M4'];
			$A3				= $datos['EscopetaNormal'];
			$A4				= $datos['EscopetaDeCombate'];
			$A5				= $datos['MP5'];
			$A6				= $datos['9mm'];
			$A7				= $datos['9mmSilenciada'];
			$A8				= $datos['DesertEagle'];
			$A9				= $datos['Rifle'];
			$A10			= $datos['Granada'];
			$A11			= $datos['Manopla'];
			$A12			= $datos['Cuchillo'];
			$A13			= $datos['Katana'];
			$A14			= $datos['Camara'];
			$A15			= $datos['Flores'];
			$A16			= $datos['Pala'];
			$A17			= $datos['BateDeBeisbol'];
			$A18			= $datos['PaloDeGolf'];
			$A19			= $datos['PaloDeBillar'];
			$A20			= $datos['ConsoladorRosa'];
			$A21			= $datos['VibradorBlanco'];
			$A22			= $datos['GranVibradorBlanco'];
			$A23			= $datos['VibradorPlateado'];
			$A24			= $datos['Baston'];
			$A25			= $datos['Motosierra'];
			$A26			= $datos['Sniper'];
			$A27			= $datos['Lanzacohetes'];
			$A28			= $datos['Bazooka'];
			$A29			= $datos['Lanzallamas'];
			$A30			= $datos['Minigun'];
			$A31			= $datos['Paracaidas'];
			$A32			= $datos['Tec9'];
			$A33			= $datos['Uzi'];
			
			$tipo			= $datos['Tipo'];
			$direccion		= $datos['Localizacion'];
			$garaje			= $datos['GX'];
		
			$Contador = $A1+$A2+$A3+$A4+$A5+$A6+$A7+$A8+$A9+$A10+$A11+$A12+$A13+$A14+$A15+$A16+$A17+$A18+$A19+$A20+$A21+$A22+$A23+$A24+$A25+$A26+$A27+$A28+$A29+$A30+$A31+$A32+$A33;
?>

<br>

<table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<tr bgcolor="#F4F4F4">
<td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;" colspan="2">
<strong><font size="2px">
<?php 
switch($tipo)
{
	case 1: echo $Texto_Index_152; 		break; 
	case 2: echo $Texto_Index_153; 	break; 
	case 3: echo $Texto_Index_154;	break;
} 
?>
</strong>
</td>
</tr>
<tr bgcolor="#FFFFFF">


<?php
if($interior == 5 || $interior == 36)
{
?>
<td align="center" colspan="2">
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="./interiores/galleries/interiores/<?php echo $interior;?>/1.png" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="./interiores/galleries/interiores/<?php echo $interior;?>/2.png" width="150" height="150" alt="1"/></div>
</td>
<?php
}
else if($interior == 3 || $interior == 7 || $interior == 34)
{
?>
<td align="center" colspan="2">
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="./interiores/galleries/interiores/<?php echo $interior;?>/1.png" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="./interiores/galleries/interiores/<?php echo $interior;?>/2.png" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="./interiores/galleries/interiores/<?php echo $interior;?>/3.png" width="150" height="150" alt="1"/></div>
</td>
<?php
}
else
{
?>
<td align="center" colspan="2">
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="./interiores/galleries/interiores/<?php echo $interior;?>/1.png" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="./interiores/galleries/interiores/<?php echo $interior;?>/2.png" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="./interiores/galleries/interiores/<?php echo $interior;?>/3.png" width="150" height="150" alt="1"/></div>
<div style="border: solid 1px #999999; margin-left:2px;margin-right:2px; background-color:#F5F5F5; float:left; width:150px; height:125px; overflow:hidden; background-position:center top">
<img src="./interiores/galleries/interiores/<?php echo $interior;?>/4.png" width="150" height="150" alt="1"/></div>
</td>
<?php
}
?>

</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><?php echo $Texto_Index_155;?>:</td>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><a class="popup" href="./casa.php?id=<?php echo $id;?>"><?php echo $direccion;?></a></td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><?php echo $Texto_Index_156;?>:</td>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font color="orange" size="2px"><?php echo $precio;?><?php switch($moneda) { case 1: echo "";?><?php echo $Diminutivo?><?php echo ""; break; case 0: echo "$"; break;} ?></font></td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><?php echo $Texto_Index_157;?>:</td>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><?php echo $Contador;?>/20</td>
</tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><?php echo $Texto_Index_158;?>:</td>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><?php echo $interior;?></td>
</tr>

<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px">Nivel:</td>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><?php echo $nivel;?></td>
</tr>

<tr>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font size="2px"><?php echo $Texto_Index_159;?>:</td>
<td valign="middle" bgcolor="#FFFFFF" align="left"><font color="green" size="2px">
<?php
	if($garaje != 0)
	{
		echo "S&iacute;";
	}else{
		echo "No";
	}
?>
</font></td>
</tr>
</tbody>
</table>
	<br>
<?php
		}
	}
	else
	{
		$stm = $con->prepare("SELECT COUNT(EnVenta) AS Kevin FROM propiedades WHERE EnVenta=1");
		$stm->execute();
		
		
		while($dato = $stm->fetch())
		{
			$numero	= $dato['Kevin'];
		}
		
?>
		<font size="2px"><b>No tienes ninguna propiedad</b><br>
		<?php echo $Texto_Index_160;?> <a class="popup" href="./casas.php"><?php echo $numero;?></a> <?php echo $Texto_Index_161;?>
<?php	
	}
}
else echo "<script>window.location='ingresar.php';</script>";
?>

</td>
</tr>
</tbody>
</table>

<script src="./js/jquery.magnific-popup2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#cargando').fadeOut();
	$('.popup').magnificPopup({
		type: 'ajax',
		alignTop: true,
		overflowY: 'scroll'
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