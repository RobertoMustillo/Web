<html>
<head><title> MODIFICA DEI CLIENTI</title></head>
<body>
<?php
	$codice=$_POST["codice"];
	$scelta=$_POST["scelta"];
	$dato=$_POST["dato"];
	$conn= mysqli_connect('localhost', 'root', '', 'gestionemustillo');
	if(!$conn){
	die('Impossibile connettersi al server:'.mysqli_connect_error());
	}
	elseif($scelta=="Cognome")
	{
	$sql="UPDATE clienti SET Cognome='".$dato."' WHERE IDcliente='".$codice."'";
	}
	elseif($scelta=="Nome")
	{
	$sql="UPDATE clienti SET Nome='".$dato."' WHERE IDcliente='".$codice."'";
	}
	elseif($scelta=="Eta")
	{
	$sql="UPDATE clienti SET Eta='".$dato."' WHERE IDcliente='".$codice."'";
	}
	elseif($scelta=="Genere")
	{
	$sql="UPDATE clienti SET Genere='".$dato."' WHERE IDcliente='".$codice."'";
	}
	elseif($scelta=="Indirizzo")
	{
	$sql="UPDATE clienti SET Indirizzo='".$dato."' WHERE IDcliente='".$codice."'";
	}
	elseif($scelta=="Citta")
	{
	$sql="UPDATE clienti SET Citta='".$dato."' WHERE IDcliente='".$codice."'";
	}
	elseif($scelta=="Provincia")
	{
	$sql="UPDATE clienti SET Provincia='".$dato."' WHERE IDcliente='".$codice."'";
	}
	elseif($scelta=="Codfiscale")
	{
	$sql="UPDATE clienti SET Codfiscale='".$dato."' WHERE IDcliente='".$codice."'";
	}
	elseif($scelta=="Telefono")
	{
	$sql="UPDATE clienti SET Telefono='".$dato."' WHERE IDcliente='".$codice."'";
	}
	elseif($scelta=="Mail")
	{
	$sql="UPDATE clienti SET Mail='".$dato."' WHERE IDcliente='".$codice."'";
	}
	if(mysqli_query($conn, $sql)){
	echo"CLIENTE MODIFICATO CORRETTAMENTE!";}
	else{
	echo" ERRORE NELLA MODIFICA!!!".mysqli_error();}
	mysqli_close($conn);
	?>
	</body>
	</html>