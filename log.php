<?php

session_start(); 
error_reporting(0); 
include_once('./css/index.php');

if(isset($_SESSION['User'])) 
{
?>
<div id="ui-tabs-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-live="polite" aria-labelledby="ui-id-7" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">
<br>
<table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<tbody>
<?php include_once('./kev/idioma.php'); ?>
<tr bgcolor="#F0F0F0">
<td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;" colspan="5"><strong><font size="2px"><?php echo $Texto_Index_173;?></strong></td>
</tr>

<tr>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2px"><div align="center"><?php echo $Texto_Index_174;?></div></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2ps"><div align="center">-</div></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2ps"><div align="center"><?php echo $Texto_Index_175;?></div></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2ps"><div align="center"><?php echo $Texto_Index_176;?></div></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><font size="2ps"><div align="center"><?php echo $Texto_Index_177;?></div></td>
</tr>
<?php 
	$User = $_SESSION['User'];
	
	$stmt = $con->prepare("SELECT ID FROM usuarios WHERE Username = :usuario");
    $stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
	$stmt->execute();
	
	if($stmt->rowCount() != 1)
		die('Error 1284: Contacta con la administración');

	$IDUser = $stmt->fetchColumn();

	$stmt = $con->prepare("SELECT usuarios.Username AS Nombre, log_ingresos.Pais, INET_NTOA(log_ingresos.IP) AS IP, FROM_UNIXTIME(log_ingresos.Fecha) AS Fecha, log_ingresos.Host FROM log_ingresos LEFT JOIN usuarios ON log_ingresos.UserID=usuarios.ID WHERE log_ingresos.UserID = :iduser ORDER BY `log_ingresos`.`ID` DESC LIMIT 50");
	$stmt->bindParam(':iduser', $IDUser, PDO::PARAM_INT);
	$stmt->execute();
	

	$num_rows = $stmt->rowCount();
	
	if($num_rows >= 1)
	{
	
		while($datos = $stmt->fetch())
		{
			$Nombre	= $datos['Nombre'];		
			$Pais	= $datos['Pais'];
			$IP		= $datos['IP'];			
			$Fecha	= $datos['Fecha'];
			$host	= $datos['Host'];
			
			$newpais=str_replace(" ","-",$Pais);
		
			if($newpais == '')
			{
				$newpais = "Unknown";
			}
			
?>

<tr>
<td valign="middle" bgcolor="#FFFFFF" align="center"><center><font size="2px"><?php echo $Fecha;?></center></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><center><font size="2px"><img src="imagenes/banderas/<?php echo $newpais?>.png"/></center></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><center><font size="2px"><?php echo $Pais;?></center></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><center><font size="2px"><?php echo $IP;?></center></td>
<td valign="middle" bgcolor="#FFFFFF" align="center"><center><font size="2px"><?php echo $host;?></center></td>
</tr>
<?php 
		}
	}
	else
	{
?>
		<tr><td valign="middle" bgcolor="#FFFFFF" align="center" colspan="5"><font size="2px"><?php echo $Texto_Index_178;?></td></tr>
<?php 
	}
}
else echo "<script>window.location='ingresar.php';</script>";

?>
</table>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104151474-1', 'auto');
  ga('send', 'pageview');

</script>