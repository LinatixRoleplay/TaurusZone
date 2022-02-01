<?php
session_start(); 
error_reporting(0); 
include_once('./css/index.php');
?>
<br>
<table width="98%" cellspacing="1" cellpadding="6" border="0" bgcolor="#C7C7C7" align="center">
<?php include_once('./kev/idioma.php'); ?>
<tbody>
<tr bgcolor="#F0F0F0"><td align="left" style="border-top: 1px solid #FFFFFF;border-left: 1px solid #FFFFFF;"><strong><font size="2px"><?php echo $Texto_Index_172;?></strong></td></tr>
<tr>
<td valign="middle" bgcolor="#FFFFFF" align="center" colspan="2"> <center>

<?php

if(isset($_SESSION['User']))
{

	$User = $_SESSION['User'];
	$stmt = $con->prepare("SELECT * FROM usuarios WHERE Username = :usuario");
	$stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
	$stmt->execute();
	
	
	$num_rows = $stmt->rowCount();
	
	if($num_rows > 0)
	{
		while($row = $stmt->fetch())
		{
			echo'
			<img src="http://'.$_SERVER['HTTP_HOST'].''.$NombreCarpeta.'/firma.php?t=1&n='.$row['ID'].'"/>
			<br/>
			<textarea name="" cols="" rows="" style="width:600px; height:30px; font-size:12px;">[url=http://'.$_SERVER['HTTP_HOST'].'/nuevo.php?u='.$row['ID'].'][img]http://'.$_SERVER['HTTP_HOST'].'/'.$NombreCarpeta.'firma.php?t=1&n='.$row['ID'].'[/img][/url]</textarea>
			';
			
			echo'
			<br>
			<br>
			<img src="http://'.$_SERVER['HTTP_HOST'].''.$NombreCarpeta.'/firma.php?t=2&n='.$row['ID'].'"/>
			<br/>
			<textarea name="" cols="" rows="" style="width:600px; height:30px; font-size:12px;">[url=http://'.$_SERVER['HTTP_HOST'].'/nuevo.php?u='.$row['ID'].'][img]http://'.$_SERVER['HTTP_HOST'].'/'.$NombreCarpeta.'firma.php?t=2&n='.$row['ID'].'[/img][/url]</textarea>
			';
			
			echo'
			<br>
			<br>
			<img src="http://'.$_SERVER['HTTP_HOST'].''.$NombreCarpeta.'/firma.php?t=3&n='.$row['ID'].'"/>
			<br/>
			<textarea name="" cols="" rows="" style="width:600px; height:30px; font-size:12px;">[url=http://'.$_SERVER['HTTP_HOST'].'/nuevo.php?u='.$row['ID'].'][img]http://'.$_SERVER['HTTP_HOST'].'/'.$NombreCarpeta.'firma.php?t=3&n='.$row['ID'].'[/img][/url]</textarea>
			';
			
			echo'
			<br>
			<br>
			<img src="http://'.$_SERVER['HTTP_HOST'].''.$NombreCarpeta.'/firma.php?t=4&n='.$row['ID'].'"/>
			<br/>
			<textarea name="" cols="" rows="" style="width:600px; height:30px; font-size:12px;">[url=http://'.$_SERVER['HTTP_HOST'].'/nuevo.php?u='.$row['ID'].'][img]http://'.$_SERVER['HTTP_HOST'].'/'.$NombreCarpeta.'firma.php?t=4&n='.$row['ID'].'[/img][/url]</textarea>
			';
			
			echo'
			<br>
			<br>
			<img src="http://'.$_SERVER['HTTP_HOST'].''.$NombreCarpeta.'/firma.php?t=5&n='.$row['ID'].'"/>
			<br/>
			<textarea name="" cols="" rows="" style="width:600px; height:30px; font-size:12px;">[url=http://'.$_SERVER['HTTP_HOST'].'/nuevo.php?u='.$row['ID'].'][img]http://'.$_SERVER['HTTP_HOST'].'/'.$NombreCarpeta.'firma.php?t=5&n='.$row['ID'].'[/img][/url]</textarea>
			';
			
			echo'
			<br>
			<br>
			<img src="http://'.$_SERVER['HTTP_HOST'].''.$NombreCarpeta.'/firma.php?t=6&n='.$row['ID'].'"/>
			<br/>
			<textarea name="" cols="" rows="" style="width:600px; height:30px; font-size:12px;">[url=http://'.$_SERVER['HTTP_HOST'].'/nuevo.php?u='.$row['ID'].'][img]http://'.$_SERVER['HTTP_HOST'].'/'.$NombreCarpeta.'firma.php?t=6&n='.$row['ID'].'[/img][/url]</textarea>
			';
			
			echo'
			<br>
			<br>
			<img src="http://'.$_SERVER['HTTP_HOST'].''.$NombreCarpeta.'/firma.php?t=7&n='.$row['ID'].'"/>
			<br/>
			<textarea name="" cols="" rows="" style="width:600px; height:30px; font-size:12px;">[url=http://'.$_SERVER['HTTP_HOST'].'/nuevo.php?u='.$row['ID'].'][img]http://'.$_SERVER['HTTP_HOST'].'/'.$NombreCarpeta.'firma.php?t=7&n='.$row['ID'].'[/img][/url]</textarea>
			';
		}
	}
}
else echo "<script>window.location='ingresar.php';</script>";
?>

</center></td>
</tr>
</tbody>
</table>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104151474-1', 'auto');
  ga('send', 'pageview');

</script>