<html>
<head>
<title> ELENCO PACCHETTI</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:' . mysqli_connect_error());
    }
$sql= "SELECT * FROM pacchetti";
$result = mysqli_query($conn, $sql);
?>
<H3/n/n align="center"> ELENCO PACCHETTI </H3/n/n>
<table align="center" border='1'>
<tr>
<th> Codice </th>
<th> Andata </th>
<th> Ritorno </th>
<th> Trattamento </th>
<th> Sistemazione </th>
<th> Titolo </th>
<th> Durata </th>
<th> CODnazione </th>
<th> CODorganizzazione </th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td align='right'>" , $row["IDpacchetto"], "</td> \n";
	echo "<td align='right'>" , $row["Andata"], "</td> \n";
	echo "<td align='right'>" , $row["Ritorno"], "</td> \n";
	echo "<td align='right'>" , $row["Trattamento"], "</td> \n";
	echo "<td align='right'>" , $row["Sistemazione"], "</td> \n";
	echo "<td align='right'>" , $row["Titolo"], "</td> \n";
	echo "<td align='right'>" , $row["Durata"], "</td> \n";
	echo "<td align='right'>" , $row["CODnazione"], "</td> \n";
	echo "<td align='right'>" , $row["CODorganizzazione"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="tabelle.html">Torna indietro</a></p>
</body>
</html>
	
	