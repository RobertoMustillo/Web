<html>
<head><title> MODIFICA DEI VIAGGI</title></head>
<body>
<?php
	$codice=$_POST["codice"];
	$scelta=$_POST["scelta"];
	$dato=$_POST["dato"];
	$conn= mysqli_connect('localhost', 'root', '', 'gestionemustillo');
	if(!$conn){
	die('Impossibile connettersi al server:'.mysqli_connect_error());
	}
	elseif($scelta=="Prenotazione")
	{
	$sql="UPDATE viaggi SET Prenotazione='".$dato."' WHERE IDviaggio='".$codice."'";
	}
	elseif($scelta=="Datapartenza")
	{
	$sql="UPDATE viaggi SET Datapartenza='".$dato."' WHERE IDviaggio='".$codice."'";
	}
	elseif($scelta=="Numpersone")
	{
	$sql="UPDATE viaggi SET Numpersone='".$dato."' WHERE IDviaggio='".$codice."'";
	}
	elseif($scelta=="Prezzo")
	{
	$sql="UPDATE viaggi SET Prezzo='".$dato."' WHERE IDviaggio='".$codice."'";
	}
	elseif($scelta=="Assicurazione")
	{
	$sql="UPDATE viaggi SET Assicurazione='".$dato."' WHERE IDviaggio='".$codice."'";
	}
	elseif($scelta=="Anticipo")
	{
	$sql="UPDATE viaggi SET Anticipo='".$dato."' WHERE IDviaggio='".$codice."'";
	}
	elseif($scelta=="Dataanticipo")
	{
	$sql="UPDATE viaggi SET Dataanticipo='".$dato."' WHERE IDviaggio='".$codice."'";
	}
	elseif($scelta=="Saldo")
	{
	$sql="UPDATE viaggi SET Saldo='".$dato."' WHERE IDviaggio='".$codice."'";
	}
	elseif($scelta=="Datasaldo")
	{
	$sql="UPDATE viaggi SET Datasaldo='".$dato."' WHERE IDviaggio='".$codice."'";
	}
		elseif($scelta=="CODcliente")
	{
	$sql="UPDATE viaggi SET CODcliente='".$dato."' WHERE IDviaggio='".$codice."'";
	}
	elseif($scelta=="CODpacchetto")
	{
	$sql="UPDATE viaggi SET CODpacchetto='".$dato."' WHERE IDviaggio='".$codice."'";
	}
	if(mysqli_query($conn, $sql)){
	echo"VIAGGIO MODIFICATO CORRETTAMENTE!";}
	else{
	echo" ERRORE NELLA MODIFICA!!!".mysqli_error();}
	mysqli_close($conn);
	?>
	</body>
	</html>