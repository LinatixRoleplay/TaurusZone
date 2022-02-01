<?php
if($activar_apsa == 1) 
{
	include('apsa/wp-blog-header.php');
}

if(isset($_SESSION['User']))
{
?>
<div class="td">
<div class="icono-td"><img src="./imagenes/iconos/dinero_p.png"></div>
<div class="titulo-td">
<?php echo $Texto_Index_1;?>
</div>
</div>

<div class="bloque-monedas">
<div style="float:left; margin-left:170px; font-size:18px; color:#003366; margin-bottom:4px"><?php echo number_format($fz, 0, '', '.');?> <?php echo $Diminutivo?></div>
<div class="hr2"></div>
<div style="float:left; margin-left:170px; font-size:18px; color:#003366;">$<?php echo number_format($dinerototal, 0, '', '.');?></div>
<div class="hr2"></div>
<div style="float:left; margin-left:170px; font-size:18px; color:#003366;"><?php echo $score;?></div>
<div class="hr2"></div>
</div>
<hr>
<a href="comprar-oz.php"><center><img src="imagenes/comprar-oz.png" title="Comprar <?php echo $Diminutivo?>" border="0"></center></a>
<hr>
<?php
}
?>

<div class="td-menu">

<div class="icono-td"><img src="./imagenes/iconos/casa.png"></div>
<div class="titulo-td"><?php echo $Texto_Index_2;?></div>
</div>

<div class="bloque-menu">
<a href="cuenta.php" class="panel-todo <?= $mcuenta; ?>" title="<?php echo $Texto_Index_56;?>">&raquo; <?php echo $Texto_Index_44;?></a>
<!-- -->
<a href="validar.php" class="panel-todo <?= $mcr; ?>" title="Autorización de IP">&raquo; Autorización de IP</a>
<!-- -->
<a href="comprar-ropa.php" class="panel-todo <?= $mcr; ?>" title="<?php echo $Texto_Index_57;?>">&raquo; <?php echo $Texto_Index_45;?></a>
<a href="comprar-vehiculos.php" class="panel-todo <?= $mcv; ?>" title="<?php echo $Texto_Index_46;?>">&raquo; <?php echo $Texto_Index_46;?></a>
<a href="comprar-unicos.php" class="panel-todo <?= $mcv; ?>" title="<?php echo $Texto_Index_58;?>">&raquo; <?php echo $Texto_Index_58;?></a>
<?php if($activar_pr == 1){?>
<a href="comprar-prendas.php" class="panel-todo <?= $mcv; ?>" title="<?php echo $Texto_Index_273;?>">&raquo; <?php echo $Texto_Index_273;?></a>
<?php } ?>
<a href="cambiar-nombre.php" class="panel-todo <?= $mcn; ?>" title="<?php echo $Texto_Index_59;?>">&raquo; <?php echo $Texto_Index_47;?></a>
<a href="<?php if($faccion == 0){echo "crear-banda.php";}else{echo "tubanda.php";}?>" class="panel-todo <?= $mbanda; ?>" title="<?php if($faccion == 0){echo $Texto_Index_48;}else{echo $Texto_Index_49;}?>">&raquo; <?php if($faccion == 0){echo $Texto_Index_48;}else{echo $Texto_Index_49;}?></a>
<a href="cc.php" class="panel-todo <?= $mcc; ?>" title="<?php echo $Texto_Index_60;?>">&raquo; <?php echo $Texto_Index_50;?></a>
<a href="cs.php" class="panel-todo <?= $mcs; ?>" title="<?php echo $Texto_Index_61;?>">&raquo; <?php echo $Texto_Index_51;?></a>
<a href="vip.php" class="panel-todo <?= $mvip; ?>" title="<?php echo $Texto_Index_62;?>">&raquo; <?php echo $Texto_Index_52;?></a>
<a href="invitar-amigo.php" class="panel-todo <?= $minva; ?>" title="<?php echo $Texto_Index_63;?>">&raquo; <?php echo $Texto_Index_53;?></a>
<?php if(isset($_SESSION['User'])) { ?><a href="logout.php" class="panel-todo" title="<?php echo $Texto_Index_64;?>">&raquo; <?php echo $Texto_Index_54;?></a><?php } else { ?><a href="ingresar.php" class="panel-todo" title="<?php echo $Texto_Index_55;?>">&raquo; <?php echo $Texto_Index_55;?></a> <?php } ?>
</div>
<hr>

<?php
if(isset($_SESSION['User']))
{
?>
<span style="background:url(./imagenes/totem.png) no-repeat center center; width: 300px; height: 320px;" class="rounded-img">
<a href="invitar-amigo.php" title="<?php echo $Texto_Index_268;?>">
<span class="rounded-img" style="background:url(./imagenes/totem.png) no-repeat center center; width: 300px; height: 320px;">
<img class="rounded-img" src="./imagenes/totem.png" style="opacity: 0; border:0">
</span>
</a>
</span>
<?php
}
?>
<script type="text/javascript">
$(document).ready(function(){

  $(".rounded-img").load(function() {
    $(this).wrap(function(){
      return '<span class="' + $(this).attr('class') + '" style="background:url(' + $(this).attr('src') + ') no-repeat center center; width: ' + $(this).width() + 'px; height: ' + $(this).height() + 'px;" />';
    });
    $(this).css("opacity","0");
  });

});
</script>

<?php 
if($activar_jc == 1) 
{
?>
<hr/>
<div class="td">
<div class="icono-td"><img src="./imagenes/iconos/diario.png"/></div>
<div class="titulo-td">
<?php echo $Texto_Index_3;?>
</div>
</div>

<div class="bloque">
<span id="total" style="font-size:35px; color:#050;text-shadow: 0 1px 0 #FFFFFF; margin-left:35%">
<center>
<!--
<?php if(!empty($aInformation)){echo $aInformation['Players'];} else {echo "<img src='./imagenes/iconos/ajax-cargando.gif'>";}?>
-->

<?php 

	$result4 = $con->prepare("SELECT COUNT(*) FROM usuarios WHERE Online='1'");
	$result4->execute();
	
	$number_of_rows4 = $result4->fetchColumn();
	
	echo $number_of_rows4;

?>

</center>
</span>
</div>
<?php 
}
?>

<?php 
if($activar_es == 1) 
{
?>
<hr>

<div class="td">
<div class="icono-td"><img src="./imagenes/iconos/estadisticas.png"/></div>
<div class="titulo-td">
<?php echo $Texto_Index_4;?>
</div>
</div>

<div class="bloque">
<span style="font-weight:bold;font-size:12px; color:#003366">Roleplay S1:&nbsp;&nbsp;&nbsp;</span> 
<span style="font-size:12px; font-weight:bold; color:#305B79"><?php echo $serverIP ?><?php if($activar_pt == 1){?>:<?php echo $serverPort ?><?php } ?></span>
<span style="float:right; width:68px">
<img src="./imagenes/iconos/en-linea.png" align="absmiddle" title="En linea">
<span id="rols4" style="color:#030">
<font size="2px">
<!--
<?php if(!empty($aInformation)){echo $aInformation['Players'];} else {echo "<img src='./imagenes/iconos/ajax-cargando.gif'>";}?>/<?php if(!empty($aInformation)){echo $aInformation['MaxPlayers'];} else {echo "<img src='./imagenes/iconos/ajax-cargando.gif'>";}?>
-->

<?php echo $number_of_rows4; ?>/<?php echo $max_user; ?>

</span>
</span>
</div>
<?php 
}
?>
<!---->

<?php 
if($activar_apsa == 1) 
{ 
?>
<hr/>

<div class="td">
<div class="icono-td">
<img src="./imagenes/iconos/diario.png">
</div>
<div class="titulo-td">
&Uacute;ltimos art&iacute;culos period&iacute;sticos
</div>
</div>

<div class="bloque">
<?php
// Get the last 5 posts.
global $post;
$args = array( 'posts_per_page' => 5 );
$myposts = get_posts( $args );

foreach( $myposts as $post ) :	setup_postdata($post); ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Leer Art&iacute;culo"><?php the_title(); ?></a><div class="hr"></div>
<?php endforeach; ?>
<!---->
</div>
<?php
}
?>

<?php 
if($activar_fb == 1) 
{
?>
<hr/>
<div class="td">
<div class="icono-td"><img src="./imagenes/iconos/facebook.png"></div>
<div class="titulo-td"><?php echo strtoupper($Diminutivo)?>:RP <?php echo $Texto_Index_5;?></div>
</div>

<div class="bloque">
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com/<?php echo $FacebookURL?>/?fref=ts&width=280&colorscheme=light&show_faces=false&stream=false&header=false&height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:68px;" allowTransparency="true">
</iframe>

</div>
<?php 
}
?>
<!---->

<?php 
if($activar_tw == 1) 
{
?>
<hr/>
<div class="td">
<div class="icono-td"><img src="./imagenes/twitter.png" height="16" width="16"></div>
<div class="titulo-td"><?php echo strtoupper($Diminutivo)?>:RP <?php echo $Texto_Index_6;?></div>
</div>
<div class="bloque">
<a class="twitter-timeline" href="https://twitter.com" data-widget-id="<?php echo $TwitterID?>">Twitter <?php echo $NombreServidor?></a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
</div>
<?php 
}
?>

<!---->

<hr/>
<div class="td">
<div class="icono-td">
<img src="./imagenes/iconos/auto2.png"/>
</div>
<div class="titulo-td">
<?php echo $Texto_Index_7;?>
</div>
</div>
<div class="bloque">
<?php

$carrera = $con->prepare("SELECT Username,PuntosCarrera FROM usuarios ORDER BY PuntosCarrera DESC LIMIT 5");
$carrera->execute();


$counter = 0;

if($row = $carrera->fetch(PDO::FETCH_ASSOC))
{
	do
	{
		$nombre = $row["Username"];
		$newnombre=str_replace("_"," ",$nombre);
		$counter++;
		echo "".$counter.". ".$newnombre."<span style='float:right; font-size:11px;'>".$row["PuntosCarrera"]." $Texto_Index_93</span><div class='hr'></div>";
	}
	while($row = $carrera->fetch(PDO::FETCH_ASSOC));
}

?>
<center><a href="./torneo-carreras.php"><?php echo $Texto_Index_8;?></a></center>
</div>

<!-- -->
<!-- Anuncio -->
<hr/>
<div class="td">
<div class="icono-td">
<img src="./imagenes/anuncio.png" height="16" width="16"/>
</div>
<div class="titulo-td">Anuncio</div>
</div>
<div class="bloque" style="padding-bottom: 40px;">
<center>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Anuncio 4 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1072011961085613"
     data-ad-slot="7461875407"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>
</div>
<!-- Anuncio -->
</div>
