<html>
<head>
<title> INTERROGAZIONE 8</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$Data1=$_POST["Datapartenza"];
$Data2=$_POST["Datapartenza1"];

$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:'. mysqli_connect_error());
    }
$sql= "SELECT organizzazioni.Denominazione as Denominazione, COUNT(IDcliente) as Numero_Clienti
		FROM viaggi inner join pacchetti on CODpacchetto=IDpacchetto
					inner join organizzazioni on CODorganizzazione=IDorganizzazione
					inner join clienti on CODcliente=IDcliente
		WHERE Datapartenza>'$Data1' and Datapartenza<'$Data2'
		GROUP BY Denominazione
		HAVING COUNT(IDcliente) > 1000";
$result = mysqli_query($conn, $sql);
?>
<H3 align="center"> ELENCO DELLE AGENZIE CON PIU DI 1000 CLIENTI </H3>
<table align="center" border='1'>
<tr >
<th> Agenzia </th>
<th> Numero Clienti </th>
</tr>
<?php
while ($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td>" , $row["Denominazione"], "</td> \n";
	echo "<td>" , $row["Numero_Clienti"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="interrogazioni.html">Torna indietro</a></p>
</body>
</html>