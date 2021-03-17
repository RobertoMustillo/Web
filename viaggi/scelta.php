<html>
<head><title>Inserimento/Modifica</title></head>
<body>
<br><br><br><br><br><br><br>
<?php
	$username=$_POST["username"];
	$password=$_POST["password"];
	$user=array('roberto');
	$pass=array('mustillo00');
	
	if (in_array($password,$pass)and in_array($username,$user))
		echo '
<body width="100%" height="100%" background="immagini/4.jpg">
<table align="center" BORDER="0">
<tr height="50"><td colspan="2" align="center"><B>BENVENUTO NELL AREA RISERVATA</B></td></tr>
<tr height="40"><td align="center"><a href="inserimentodati.html">INSERISCI I DATI</a></td></tr>
<tr height="40"><td align="center"><a href="modificadati.html">MODIFICA DATI</a></td></tr>
<tr height="40"><td align="center"><a href="query.html">QUERY</a></td></tr>
<tr height="100"><td colspan="">&nbsp; </td></tr>
<tr height="40"><td align="center"><a href="homepage.html">Torna alla home</a></td></tr>
</table>
</body>';
	else
echo 
'<body width="100%" height="100%" background="immagini/4.jpg">
<table border="0" align="center">
<tr><td><font color="red" size="5"><b>CREDENZIALI ERRATE!</b></font></td></tr>
<tr height="100"><td valign="bottom" align="center"><a href="accesso.html"> Torna ad inserimento</a></td></tr>
</table>
</body>
';
?>
