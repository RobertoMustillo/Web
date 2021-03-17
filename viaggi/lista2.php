<html>
<head>
<title> INTERROGAZIONE 2</title>
</head>
<body width="100%" height="100%" background="immagini/4.jpg">
<?php
$Denominazione=$_POST["IDviaggio"];
$conn = mysqli_connect('localhost', 'root', '', 'gestionemustillo');
If (!$conn) {
	die ('Impossibile connettersi al server:' . mysqli_connect_error());
    }
$sql= "SELECT Cognome, Nome, Telefono, Mail
		FROM viaggi inner join clienti on IDcliente=CODcliente
		WHERE Saldo = 0 and IDviaggio='$Denominazione'
		ORDER BY Cognome, Nome ";
$result = mysqli_query($conn, $sql);
?>
<H3/n/n align="center"> VIAGGIO SCELTO </H3/n/n>
<table align="center" border='1'>
<tr >
<th> Cognome </th>
<th> Nome </th>
<th> Telefono </th>
<th> Mail </th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	echo "<tr> \n";
	echo "<td>" , $row["Cognome"], "</td> \n";
	echo "<td>" , $row["Nome"], "</td> \n";
	echo "<td>" , $row["Telefono"], "</td> \n";
	echo "<td>" , $row["Mail"], "</td> \n";
	echo "</tr> \n";
}
?>
</table>
<p align="center"><a href="interrogazioni.html">Torna indietro</a></p>
</body>
</html>