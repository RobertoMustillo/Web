<html>
<head>
<title> ELENCO ORGANIZZAZIONI</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:' . mysqli_connect_error());
    }
$sql= "SELECT * FROM organizzazioni";
$result = mysqli_query($conn, $sql);
?>
<H3/n/n align="center"> ELENCO ORGANIZZAZIONI </H3/n/n>
<table align="center" border='1'>
<tr>
<th> Codice </th>
<th> Denominazione </th>
<th> Telefono </th>
<th> Mail </th>
<th> Piva </th>
<th> Sede </th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td>" , $row["IDorganizzazione"], "</td> \n";
	echo "<td>" , $row["Denominazione"], "</td> \n";
	echo "<td>" , $row["Telefono"], "</td> \n";
	echo "<td>" , $row["Mail"], "</td> \n";
	echo "<td>" , $row["Piva"], "</td> \n";
	echo "<td>" , $row["Sede"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="tabelle.html">Torna indietro</a></p>
</body>
</html>
	