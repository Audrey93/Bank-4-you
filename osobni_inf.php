
 <?php
 session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: prijava.php");
}
include_once 'dbconfig.php';
 
 $stmt = $db_con->prepare("SELECT * FROM `Bankovni racun` INNER JOIN Klijent ON Klijent.ID_Klijenta=`Bankovni racun`.Klijent_ID_Klijenta AND `Bankovni racun`.Lozinka=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$result=$stmt->fetch(PDO::FETCH_ASSOC);
echo '<table ID="Tabela_Poslovnica1">';
echo "<tr><th>Informacije o Korisniku</th></tr>";


echo "<tr>";
  echo "<td>";
    echo "<b> Ime  : </b> "; print $result["Ime"] ;
	 echo "</td>";
echo "</tr>";

echo "<tr>";
  echo "<td>";
    echo "<b> Prezime: </b> "; print $result["Prezime"] ;
	 echo "</td>";
echo "</tr>";

echo "<tr>";
  echo "<td>";
    echo "<b> Broj Telefona: </b> "; print $result["Telefon"] ;
	 echo "</td>";
echo "</tr>";
echo "<tr>";
  echo "<td>";
    echo "<b> E-mail: </b> "; print $result["E-mail"] ;
	 echo "</td>";
echo "</tr>";
echo "<tr>";
  echo "<td>";
    echo "<b> Adresa: </b> "; print $result["Adresa"] ;
	 echo "</td>";
echo "</tr>";

echo "<tr>";
  echo "<td>";
    echo "<b> Broj LK: </b> "; print $result["Broj licne karte"] ;
	 echo "</td>";
echo "</tr>";

echo "<tr>";
  echo "<td>";
    echo "<b> Mjesto i datum rođenja: </b> "; print $result["Mjesto rodenja"]. ", &nbsp" ;

$time = strtotime($result["datum_rodjenja"]);

$newformat = date('d. m. Y.',$time);

echo $newformat;


	 echo "</td>";
echo "</tr>";

echo "</table>";
?>
