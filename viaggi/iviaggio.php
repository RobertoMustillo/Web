<html>
<head><title>RICEVI VIAGGIO</title></head>
<body>
<?php
		$Prenotazione=$_POST["Prenotazione"];
		$Datapartenza=$_POST["Datapartenza"];
		$Numpersone=$_POST["Numpersone"];
		$Prezzo=$_POST["Prezzo"];
		$Assicurazione=$_POST["Assicurazione"];
		$Anticipo=$_POST["Anticipo"];
		$Dataanticipo=$_POST["Dataanticipo"];
		$Saldo=$_POST["Saldo"];
		$Datasaldo=$_POST["Datasaldo"];
		$CODcliente=$_POST["CODcliente"];
		$CODpacchetto=$_POST["CODpacchetto"];
		$conn=mysqli_connect('localhost', 'root', '','gestionemustillo');
		if(!$conn){
			die('Impossibile connettersi al server:'.mysqli_connect_error());
		}
		$sql=" INSERT INTO viaggi(Prenotazione,Datapartenza, Numpersone, Prezzo, Assicurazione, Anticipo, Dataanticipo, Saldo, Datasaldo, CODcliente,CODpacchetto) 
		VALUES ('".$Prenotazione."','".$Datapartenza."','".$Numpersone."', '".$Prezzo."','".$Assicurazione."','".$Anticipo."','".$Dataanticipo."','".$Saldo."','".$Datasaldo."','".$CODcliente."','".$CODpacchetto."');";
		if(mysqli_query($conn, $sql)){
		echo "AGGIUNTO CORRETTAMENTE!";}
		else{
		echo "ERRORE NELL'INSERIMENTO!!!".mysqli_error();}
		mysqli_close($conn);
		?>
</body>
</html>