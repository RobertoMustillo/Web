<html>
<head><title>RICEVI NAZIONE</title></head>
<body>
<?php
		$Denominazione=$_POST["Denominazione"];
		$Localita=$_POST["Localita"];
		$Moneta=$_POST["Moneta"];
		$Clima=$_POST["Clima"];
		$Info=$_POST["Info"];
		$conn=mysqli_connect('localhost', 'root', '','gestionemustillo');
		if(!$conn){
			die('Impossibile connettersi al server:'.mysqli_connect_error());
		}
		$sql=" INSERT INTO nazioni(Denominazione, Localita, Moneta, Clima, Info) VALUES ('".$Denominazione."','".$Localita."', '".$Moneta."','".$Clima."','".$Info."');";
		if(mysqli_query($conn, $sql)){
		echo "AGGIUNTO CORRETTAMENTE!";}
		else{
		echo "ERRORE NELL'INSERIMENTO!!!".mysqli_error();}
		mysqli_close($conn);
		?>
</body>
</html>