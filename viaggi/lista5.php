<html>
<head>
<title> INTERROGAZIONE 5</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$Localita=$_POST["Localita"];
$Durata=$_POST["Durata"];
$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:'. mysqli_connect_error());
    }
$sql="Insert into temp1(Prezzo_Min)
SELECT MIN(Prezzo)
FROM pacchetti inner join viaggi on IDpacchetto=CODpacchetto
inner join nazioni on CODnazione=IDnazione
WHERE Durata='$Durata' and Localita='$Localita';";
$result = mysqli_query($conn,$sql);
$sql1="SELECT * from temp1";
$result1=mysqli_query($conn,$sql1);
$sql2="SELECT organizzazioni.Denominazione as Denominazione, Prezzo
FROM viaggi inner join pacchetti on IDpacchetto=CODpacchetto
inner join organizzazioni on IDorganizzazione=CODorganizzazione
inner join nazioni on IDnazione=CODnazione
WHERE Prezzo IN (Select Prezzo_Min From temp1)
Order BY organizzazioni.Denominazione, Prezzo;";
$result2 = mysqli_query($conn,$sql2);
?>
<H3 align="center"> ELENCO VIAGGI SCELTI </H3>
<table align="center" border='1'>
<tr>
<th> Agenzia </th>
<th> Prezzo </th>
</tr>
<?php
while ($row = mysqli_fetch_array($result2))
{
	echo "<tr> \n";
	echo "<td>" , $row["Denominazione"], "</td> \n";
	echo "<td>" , $row["Prezzo"], "</td> \n";
	echo "</tr> \n";
}
$sql3="TRUNCATE TABLE temp1";
$result3=mysqli_query($conn,$sql3);
?>
</table>
<p align="center"><a href="interrogazioni.html">Torna indietro</a></p>
</body>
</html>