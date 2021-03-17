<html>
<head>
<title> ELENCO VIAGGI</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:' . mysqli_connect_error());
    }
$sql= "SELECT * FROM viaggi";
$result = mysqli_query($conn, $sql);
?>
<H3/n/n align="center"> ELENCO VIAGGI </H3/n/n>
<table align="center" border='1'>
<tr>
<th> Codice </th>
<th> Prenotazione </th>
<th> Data partenza </th>
<th> Num persone </th>
<th> Prezzo </th>
<th> Assicurazione </th>
<th> Anticipo </th>
<th> Data anticipo </th>
<th> Saldo </th>
<th> Data saldo </th>
<th> CODcliente </th>
<th> CODpacchetto </th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td align='right'>" , $row["IDviaggio"], "</td> \n";
	echo "<td align='right'>" , $row["Prenotazione"], "</td> \n";
	echo "<td align='right'>" , $row["Datapartenza"], "</td> \n";
	echo "<td align='right'>" , $row["Numpersone"], "</td> \n";
	echo "<td align='right'>" , $row["Prezzo"], "</td> \n";
	echo "<td align='right'>" , $row["Assicurazione"], "</td> \n";
	echo "<td align='right'>" , $row["Anticipo"], "</td> \n";
	echo "<td align='right'>" , $row["Dataanticipo"], "</td> \n";
	echo "<td align='right'>" , $row["Saldo"], "</td> \n";
	echo "<td align='right'>" , $row["Datasaldo"], "</td> \n";
	echo "<td align='right'>" , $row["CODcliente"], "</td> \n";
	echo "<td align='right'>" , $row["CODpacchetto"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="tabelle.html">Torna indietro</a></p>
</body>
</html>
	
	