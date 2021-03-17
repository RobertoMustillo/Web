<html>
<head>
<title> INTERROGAZIONE 4</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$Datapartenza=$_POST["Datapartenza"];
$Datapartenza1=$_POST["Datapartenza1"];
$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:' . mysqli_connect_error());
    }
$sql= "SELECT organizzazioni.Denominazione, COUNT(CODcliente) as numero_clienti
		FROM viaggi inner join pacchetti on IDpacchetto=CODpacchetto
					inner join organizzazioni on IDorganizzazione=CODorganizzazione
		WHERE Datapartenza between '$Datapartenza' and '$Datapartenza1'
		GROUP BY organizzazioni.Denominazione ";
$result = mysqli_query($conn, $sql);
?>
<H3/n/n align="center"> ELENCO CLIENTI </H3/n/n>
<table align="center" border='1'>
<tr >
<th> Denominazione </th>
<th> Numero clienti </th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td>" , $row["Denominazione"], "</td> \n";
	echo "<td>" , $row["numero_clienti"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="interrogazioni.html">Torna indietro</a></p>
</body>
</html>