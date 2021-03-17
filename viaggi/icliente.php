<html>
<head><title>RICEVI CLIENTE</title></head>
<body>
<?php
		$Cognome=$_POST["Cognome"];
		$Nome=$_POST["Nome"];
		$Eta=$_POST["Eta"];
		$Genere=$_POST["Genere"];
		$Indirizzo=$_POST["Indirizzo"];
		$Citta=$_POST["Citta"];
		$Provincia=$_POST["Provincia"];
		$Codfiscale=$_POST["Codfiscale"];
		$Telefono=$_POST["Telefono"];
		$Mail=$_POST["Mail"];
		$conn=mysqli_connect('localhost', 'root', '','gestionemustillo');
		if(!$conn){
			die('Impossibile connettersi al server:'.mysqli_connect_error());
		}
		$sql=" INSERT INTO clienti(Cognome, Nome, Eta, Genere, Indirizzo, Citta, Provincia, Codfiscale, Telefono, Mail) VALUES ('".$Cognome."','".$Nome."', '".$Eta."','".$Genere."','".$Indirizzo."','".$Citta."','".$Provincia."','".$Codfiscale."','".$Telefono."','".$Mail."');";
		if(mysqli_query($conn, $sql)){
		echo "AGGIUNTO CORRETTAMENTE!";}
		else{
		echo "ERRORE NELL'INSERIMENTO!!!".mysqli_error();}
		mysqli_close($conn);
		?>
</body>
</html>