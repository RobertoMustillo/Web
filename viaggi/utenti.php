<html>
<head>
<title> ELENCO UTENTI</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:' . mysqli_connect_error());
    }
$sql= "SELECT * FROM utenti";
$result = mysqli_query($conn, $sql);
?>
<H3/n/n align="center"> ELENCO UTENTI </H3/n/n>
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
<th> Telefono </th>
<th> Mail </th>
<th> Username </th>
<th> Password </th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td>" , $row["IDutente"], "</td> \n";
	echo "<td>" , $row["cognome"], "</td> \n";
	echo "<td>" , $row["nome"], "</td> \n";
	echo "<td>" , $row["eta"], "</td> \n";
	echo "<td>" , $row["genere"], "</td> \n";
	echo "<td>" , $row["indirizzo"], "</td> \n";
	echo "<td>" , $row["citta"], "</td> \n";
	echo "<td>" , $row["provincia"], "</td> \n";
	echo "<td>" , $row["telefono"], "</td> \n";
	echo "<td>" , $row["mail"], "</td> \n";
	echo "<td>" , $row["username"], "</td> \n";
	echo "<td>" , $row["password"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="query.html">Torna indietro</a></p>
</body>
</html>
	