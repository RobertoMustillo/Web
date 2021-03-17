<html>
<head>
<title> ELENCO NAZIONI</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:' . mysqli_connect_error());
    }
$sql= "SELECT * FROM nazioni";
$result = mysqli_query($conn, $sql);
?>
<H3/n/n align="center"> ELENCO NAZIONI </H3/n/n>
<table align="center" border='1'>
<tr>
<th> Codice </th>
<th> Denominazione </th>
<th> Localita </th>
<th> Moneta </th>
<th> Clima </th>
<th> Info </th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td>" , $row["IDnazione"], "</td> \n";
	echo "<td>" , $row["Denominazione"], "</td> \n";
	echo "<td>" , $row["Localita"], "</td> \n";
	echo "<td>" , $row["Moneta"], "</td> \n";
	echo "<td>" , $row["Clima"], "</td> \n";
	echo "<td>" , $row["Info"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="tabelle.html">Torna indietro</a></p>
</body>
</html>
	