<html>
<head>
    <link rel="stylesheet" href="css/table_style.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>


  <div class="login-header">
    <img src="b4u.png" alt="logo" style="width:100%; max-width: 100px; display:inline-block; height:auto;"> <h3>B4U Poslovnice </h3>
  </div>
 <br><br>




<?php 
//connection information
$user = "root";
$pass = "";
$dbh = new PDO('mysql:host=localhost;dbname=b4u_schema;', $user, $pass);

//prepare statement to query table
$sth = $dbh->prepare("SELECT * FROM Poslovnica");
$sth->execute();
//loop over all table rows and fetch them as an object
echo '<table ID="Tabela_Poslovnica">';
echo "<tr><th>Grad</th><th>Adresa</th><th>Telefon</th></tr>";

while($result = $sth->fetch(PDO::FETCH_OBJ))
{
//print out the fruits name in this case.
echo "<tr>";
  echo "<td>";
  print $result->Grad;
echo "</td>";	
	echo "<td>";
	print $result->Adresa;
echo "</td>";
echo "<td>";
	print $result->Telefon;
echo "</td>";	
	
echo "</tr>";
}
echo "</table>";
?>


</body>
</html>