<html>
<head>
<title> INTERROGAZIONE 9</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$Denominazione=$_POST["Denominazione"];
$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:' . mysqli_connect_error());
    }
$sql= "SELECT Localita, Moneta, Clima
		FROM nazioni
		WHERE Denominazione='$Denominazione'
		";
$result = mysqli_query($conn, $sql);
?>
<H3/n/n align="center"> ELENCO VIAGGI SCELTI </H3/n/n>
<table align="center" border='1'>
<tr >
<th> Localita </th>
<th> Moneta </th>
<th> Clima </th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td>" , $row["Localita"], "</td> \n";
	echo "<td>" , $row["Moneta"], "</td> \n";
	echo "<td>" , $row["Clima"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="interrogazioni.html">Torna indietro</a></p>
</body>
</html>