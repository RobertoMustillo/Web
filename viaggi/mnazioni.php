<html>
<head><title> MODIFICA DELLA NAZIONE</title></head>
<body>
<?php
	$codice=$_POST["codice"];
	$scelta=$_POST["scelta"];
	$dato=$_POST["dato"];
	$conn= mysqli_connect('localhost', 'root', '', 'gestionemustillo');
	if(!$conn){
	die('Impossibile connettersi al server:'.mysqli_connect_error());
	}
	elseif($scelta=="Denominazione")
	{
	$sql="UPDATE nazioni SET Denominazione='".$dato."' WHERE IDnazione='".$codice."'";
	}
	elseif($scelta=="Localita")
	{
	$sql="UPDATE nazioni SET Localita='".$dato."' WHERE IDnazione='".$codice."'";
	}
	elseif($scelta=="Moneta")
	{
	$sql="UPDATE nazioni SET Moneta='".$dato."' WHERE IDnazione='".$codice."'";
	}
	elseif($scelta=="Clima")
	{
	$sql="UPDATE nazioni SET Clima='".$dato."' WHERE IDnazione='".$codice."'";
	}
	elseif($scelta=="Info")
	{
	$sql="UPDATE nazioni SET Info='".$dato."' WHERE IDnazione='".$codice."'";
	}
	if(mysqli_query($conn, $sql)){
	echo"NAZIONE MODIFICATA CORRETTAMENTE!";}
	else{
	echo" ERRORE NELLA MODIFICA!!!".mysqli_error();}
	mysqli_close($conn);
	?>
	</body>
	</html>