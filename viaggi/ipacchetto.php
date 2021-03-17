<html>
<head><title>RICEVI PACCHETTO</title></head>
<body>
<?php
		$Andata=$_POST["Andata"];
		$Ritorno=$_POST["Ritorno"];
		$Trattamento=$_POST["Trattamento"];
		$Sistemazione=$_POST["Sistemazione"];
		$Titolo=$_POST["Titolo"];
		$Durata=$_POST["Durata"];
		$CODnazione=$_POST["CODnazione"];
		$CODorganizzazione=$_POST["CODorganizzazione"];
		$conn=mysqli_connect('localhost', 'root', '','gestionemustillo');
		if(!$conn){
			die('Impossibile connettersi al server:'.mysqli_connect_error());
		}
		$sql=" INSERT INTO pacchetti(Andata, Ritorno, Trattamento, Sistemazione, Titolo, Durata, CODnazione, CODorganizzazione) 
		VALUES ('".$Andata."','".$Ritorno."', '".$Trattamento."','".$Sistemazione."','".$Titolo."','".$Durata."','".$CODnazione."','".$CODorganizzazione."');";
		if(mysqli_query($conn, $sql)){
		echo "AGGIUNTO CORRETTAMENTE!";}
		else{
		echo "ERRORE NELL'INSERIMENTO!!!".mysqli_error();}
		mysqli_close($conn);
		?>
</body>
</html>