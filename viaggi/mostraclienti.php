<html>
<head>
<title> ELENCO CLIENTI</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:' . mysqli_connect_error());
    }
$sql= "SELECT * FROM clienti";
$result = mysqli_query($conn, $sql);
?>
<H3/n/n align="center"> ELENCO CLIENTI </H3/n/n>
<table align="center" border='1'>
<tr >
<th> Codice </th>
<th> Cognome </th>
<th> Nome </th>
<th> Eta </th>
<th> Genere </th>
<th> Indirizzo </th>
<th> Citta </th>
<th> Provincia </th>
<th> Codfiscale </th>
<th> Telefono </th>
<th> Mail </th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td>" , $row["IDcliente"], "</td> \n";
	echo "<td>" , $row["Cognome"], "</td> \n";
	echo "<td>" , $row["Nome"], "</td> \n";
	echo "<td>" , $row["Eta"], "</td> \n";
	echo "<td>" , $row["Genere"], "</td> \n";
	echo "<td>" , $row["Indirizzo"], "</td> \n";
	echo "<td>" , $row["Citta"], "</td> \n";
	echo "<td>" , $row["Provincia"], "</td> \n";
	echo "<td>" , $row["Codfiscale"], "</td> \n";
	echo "<td>" , $row["Telefono"], "</td> \n";
	echo "<td>" , $row["Mail"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="tabelle.html">Torna indietro</a></p>
</body>
</html>
	
	