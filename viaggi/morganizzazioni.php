<html>
<head><title> MODIFICA DELL'ORGANIZZAZIONE</title></head>
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
	$sql="UPDATE organizzazioni SET Denominazione='".$dato."' WHERE IDorganizzazione='".$codice."'";
	}
	elseif($scelta=="Telefono")
	{
	$sql="UPDATE organizzazioni SET Telefono='".$dato."' WHERE IDorganizzazione='".$codice."'";
	}
	elseif($scelta=="Mail")
	{
	$sql="UPDATE organizzazioni SET Mail='".$dato."' WHERE IDorganizzazione='".$codice."'";
	}
	elseif($scelta=="Piva")
	{
	$sql="UPDATE organizzazioni SET Piva='".$dato."' WHERE IDorganizzazione='".$codice."'";
	}
	elseif($scelta=="Sede")
	{
	$sql="UPDATE organizzazioni SET Sede='".$dato."' WHERE IDorganizzazione='".$codice."'";
	}
	if(mysqli_query($conn, $sql)){
	echo"ORGANIZZAZIONE MODIFICATA CORRETTAMENTE!";}
	else{
	echo" ERRORE NELLA MODIFICA!!!".mysqli_error();}
	mysqli_close($conn);
	?>
	</body>
	</html>