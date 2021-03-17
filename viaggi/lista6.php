<html>
<head>
<title> INTERROGAZIONE 6</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$Denominazione=$_POST["Denominazione"];
$Data1=$_POST["Datapartenza"];
$Data2=$_POST["Datapartenza1"];
$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:'. mysqli_connect_error());
    }
$sql= "Select SUM(Prezzo) as incasso_totale
from organizzazioni inner join pacchetti on IDorganizzazione=CODorganizzazione
inner join viaggi ON IDpacchetto=CODpacchetto
where Denominazione='$Denominazione' and Datapartenza>'$Data1' and Datapartenza<'$Data2';";
$result = mysqli_query($conn, $sql);
?>
<H3 align="center"> INCASSO TOTALE </H3>
<table align="center" border='1'>
<tr>
<th> Incasso </th>
</tr>
<?php
while ($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td>" , $row["incasso_totale"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="interrogazioni.html">Torna indietro</a></p>
</body>
</html>