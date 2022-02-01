<div id="pie"><hr><?php echo $NombreServidor?> Roleplay by Hahn © 2016 - 2019</div> </td>
</tr>
</table>
</body>
<div id="lean_overlay"></div>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-104151474-1', 'auto');
  ga('send', 'pageview');
 
</script>
<?php
if($cambiacorreo > 0)
{
	$tiempo = time();
	if($tiempo >= $tiempocorreo)
	{
		$st = $con->prepare("UPDATE usuarios SET CambiaCorreo='0', TiempoCorreo='0', CorreoValido='0', Email=:correoacambiar WHERE Username = :usuario");
		$st->bindParam(':correoacambiar', $correoacambiar, PDO::PARAM_STR);
		$st->bindParam(':usuario', $User, PDO::PARAM_STR);
		$st->execute();
		
		
		$stdh = $con->prepare("INSERT INTO `log_correos`(`ID`, `Nombre`, `Viejo_Correo`, `Nuevo_Correo`, `Fecha`) VALUES ('', :nombre, :email, :correoacambiar, now())");
		$stdh->bindParam(':nombre', $User, PDO::PARAM_STR);
		$stdh->bindParam(':email', $email, PDO::PARAM_STR); 
		$stdh->bindParam(':correoacambiar', $correoacambiar, PDO::PARAM_STR); 
		$stdh->execute();
		
		
		$std = $con2->prepare("UPDATE smf_members SET email_address=:correoacambiar WHERE member_name = :usuario");
		$std->bindParam(':correoacambiar', $correoacambiar, PDO::PARAM_STR);
		$std->bindParam(':usuario', $User, PDO::PARAM_STR);
		
		$std->execute();
	}
}
?>