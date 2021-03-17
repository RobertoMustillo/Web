<html>
<head>
<title> INTERROGAZIONE 1</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$Localita=$_POST["Localita"];
$Data1=$_POST["Datapartenza"];
$Data2=$_POST["Datapartenza1"];

$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:'. mysqli_connect_error());
    }
$sql= "SELECT organizzazioni.Denominazione, Prezzo
		FROM viaggi inner join pacchetti on IDpacchetto=CODpacchetto
					inner join organizzazioni on IDorganizzazione=CODorganizzazione
					inner join nazioni on IDnazione=CODnazione
		WHERE Datapartenza>'$Data1' and Datapartenza<'$Data2' and Localita='$Localita'
		ORDER BY organizzazioni.Denominazione, Prezzo ";
$result = mysqli_query($conn, $sql);
?>
<H3 align="center"> ELENCO VIAGGI SCELTI </H3>
<table align="center" border='1'>
<tr >
<th> Agenzia </th>
<th> Prezzo </th>
</tr>
<?php
while ($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td>" , $row["organizzazioni.Denominazione"], "</td> \n";
	echo "<td>" , $row["Prezzo"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="interrogazioni.html">Torna indietro</a></p>
</body>
</html>