<html>
<head><title> MODIFICA DEI PACCHETTI</title></head>
<body>
<?php
	$codice=$_POST["codice"];
	$scelta=$_POST["scelta"];
	$dato=$_POST["dato"];
	$conn= mysqli_connect('localhost', 'root', '', 'gestionemustillo');
	if(!$conn){
	die('Impossibile connettersi al server:'.mysqli_connect_error());
	}
	elseif($scelta=="Andata")
	{
	$sql="UPDATE pacchetti SET Andata='".$dato."' WHERE IDpacchetto='".$codice."'";
	}
	elseif($scelta=="Ritorno")
	{
	$sql="UPDATE pacchetti SET Ritorno='".$dato."' WHERE IDpacchetto='".$codice."'";
	}
	elseif($scelta=="Trattamento")
	{
	$sql="UPDATE pacchetti SET Trattamento='".$dato."' WHERE IDpacchetto='".$codice."'";
	}
	elseif($scelta=="Sistemazione")
	{
	$sql="UPDATE pacchetti SET Sistemazione='".$dato."' WHERE IDpacchetto='".$codice."'";
	}
	elseif($scelta=="Titolo")
	{
	$sql="UPDATE pacchetti SET Titolo='".$dato."' WHERE IDpacchetto='".$codice."'";
	}
	elseif($scelta=="Durata")
	{
	$sql="UPDATE pacchetti SET Durata='".$dato."' WHERE IDpacchetto='".$codice."'";
	}
	elseif($scelta=="CODnazione")
	{
	$sql="UPDATE pacchetti SET CODnazione='".$dato."' WHERE IDpacchetto='".$codice."'";
	}
	elseif($scelta=="CODorganizzazione")
	{
	$sql="UPDATE pacchetti SET CODorganizzazione='".$dato."' WHERE IDpacchetto='".$codice."'";
	}
	if(mysqli_query($conn, $sql)){
	echo"PACCHETTO MODIFICATO CORRETTAMENTE!";}
	else{
	echo" ERRORE NELLA MODIFICA!!!".mysqli_error();}
	mysqli_close($conn);
	?>
	</body>
	</html>