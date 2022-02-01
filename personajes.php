<title>OmegaZone RP</title>
<table align="center" bgcolor="#000000">
<tr>
<td>
<div id="contenedor" class="className">
<?php

include_once('./css/index.php');

$stm = $con->prepare("SELECT ID,Username,posX,posY,Nivel,Online,Sexo FROM `usuarios` WHERE Online='1'");
$stm->execute();


$num_row = $stm->rowCount();
	
if($num_row > 0)
{
	while($dato = $stm->fetch())
	{
?>
			
<?php
				$x = $dato["posX"]/7.5;
				$y = $dato["posY"]/7.5;
				$Sexo = $dato["Sexo"];
				$Username = $dato["Username"];
				$x =   $x + 393;
				$y = -($y - 393);
				
				if($Sexo == 2)
				{
					echo '<div style="position:absolute; left:'.$x.'px; top:'.$y.'px;z-index:20"><a href="#" rel="tooltip" title="'.$Username.' - ID: '.$dato['ID'].' - Nivel: '.$dato['Nivel'].'"><img src="./imagenes/iconos/58.gif"/></a></div>';
				}
				else
				{
					echo '<div style="position:absolute; left:'.$x.'px; top:'.$y.'px;z-index:20"><a href="#" rel="tooltip" title="'.$Username.' - ID: '.$dato['ID'].' - Nivel: '.$dato['Nivel'].'"><img src="./imagenes/iconos/60.gif"/></a></div>';
				}
?>

<?php
	}
}
?>
</div>
</td>
</tr>
</table>
<style>
#contenedor
{
	background-image:url("./imagenes/map.jpg");
	border:1px solid #000000;
	display:block;
	height:798px;position:relative;
	width:798px;
}
</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104151474-1', 'auto');
  ga('send', 'pageview');

</script>