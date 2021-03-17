<html>
<head><title>Registrazione</title></head>
<body>
<?php
		$cognome=$_POST["cognome"];
		$nome=$_POST["nome"];
		$eta=$_POST["eta"];
		$genere=$_POST["genere"];
		$indirizzo=$_POST["indirizzo"];
		$citta=$_POST["citta"];
		$provincia=$_POST["provincia"];
		$telefono=$_POST["telefono"];
		$mail=$_POST["mail"];
		$username=$_POST["username"];
		$password=$_POST["password"];
		$conn=mysqli_connect('localhost', 'root', '','gestionemustillo');
		if(!$conn){
			die('Impossibile connettersi al server:'.mysqli_connect_error());
		}
		$sql=" INSERT INTO utenti(cognome, nome, eta, genere, indirizzo, citta, provincia, telefono, mail, username, password)
		VALUES ('".$cognome."','".$nome."', '".$eta."','".$genere."','".$indirizzo."','".$citta."','".$provincia."','".$telefono."','".$mail."','".$username."','".$password."');";
		if(mysqli_query($conn, $sql)){
		echo "REGISTRAZIONE CORRETTA!";}
		else{
		echo "ERRORE NELL'INSERIMENTO!!!".mysqli_error();}
		mysqli_close($conn);
		?>
</body>
</html>