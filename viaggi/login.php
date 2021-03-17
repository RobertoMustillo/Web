<html>
<head><title>Accesso utente</title></head>
<body>
<br><br><br><br><br>
<?php
	$username=$_POST["username"];
	$password=$_POST["password"];
	$conn=mysqli_connect('localhost','root','','gestionemustillo');
	if(!$conn){
		die('Impossibile connettersi al server:'.mysqli_connect_error());
	}
	$sql= "SELECT cognome, nome from utenti where username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);
?>
<table border='0'>
<tr>
<th colspan="2">Utenti</th>
<tr>
<th> Tabella </th>
</tr>
<?php
while($row = mysqli_fetch_array($result))
{
	$cognome=$row["cognome"];
	$nome=$row["nome"];
	
	echo "<tr> \n";
	echo "<td>" , $cognome, "</td> \n";
	echo "<td>" , $nome, "</td> \n";
	}
if ($cognome!="" || $nome!="")
{
	header ("location:/viaggi/sito.php");
}
	else
	{
		header("location:/viaggi/errore.php");
	}
		?>
</table>
</body>
</html>