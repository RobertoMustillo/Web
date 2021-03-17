<html>
<head>
<title> CERCA</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
	$Localita=$_POST["Localita"];
	$Andata=$_POST["Andata"];
	$Ritorno=$_POST["Ritorno"];
	$Trattamento=$_POST["Trattamento"];

$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:' . mysqli_connect_error());
    }
$sql= "SELECT Localita, Andata, Ritorno, Trattamento, Prezzo
		FROM nazioni inner join pacchetti on IDnazione=CODnazione
					inner join viaggi on IDpacchetto=CODpacchetto
		WHERE Andata > '$Andata' and Ritorno<'$Ritorno' and Localita='$Localita' and Trattamento='$Trattamento'		";
	
	$result = mysqli_query($conn,$sql);
?>
<H3 align="center"> ELENCO VIAGGI </H3>
<table align="center" border='1'>
<tr>
<th> Localita </th>
<th> Andata </th>
<th> Ritorno </th>
<th> Mezzo di trasporto </th>
<th> Prezzo </th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td>" , $row["Localita"], "</td> \n";
	echo "<td>" , $row["Andata"], "</td> \n";
	echo "<td>" , $row["Ritorno"], "</td> \n";
	echo "<td>" , $row["Trattamento"], "</td> \n";
	echo "<td>" , $row["Prezzo"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="sito.php">Torna indietro</a></p>
</body>
</html>