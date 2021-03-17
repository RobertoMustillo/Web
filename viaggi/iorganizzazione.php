<html>
<head><title>RICEVI ORGANIZZAZIONE</title></head>
<body>
<?php
		$Denominazione=$_POST["Denominazione"];
		$Telefono=$_POST["Telefono"];
		$Mail=$_POST["Mail"];
		$Piva=$_POST["Piva"];
		$Sede=$_POST["Sede"];
		$conn=mysqli_connect('localhost', 'root', '','gestionemustillo');
		if(!$conn){
			die('Impossibile connettersi al server:'.mysqli_connect_error());
		}
		$sql=" INSERT INTO organizzazioni(Denominazione, Telefono, Mail, Piva, Sede) VALUES ('".$Denominazione."','".$Telefono."', '".$Mail."','".$Piva."','".$Sede."');";
		if(mysqli_query($conn, $sql)){
		echo "AGGIUNTO CORRETTAMENTE!";}
		else{
		echo "ERRORE NELL'INSERIMENTO!!!".mysqli_error();}
		mysqli_close($conn);
		?>
</body>
</html>