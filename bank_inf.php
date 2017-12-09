
 <?php
 session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: prijava.php");
		header("content-type: text/html; charset=UTF-8");  
}
include_once 'dbconfig.php';
	

$stmt = $db_con->prepare("SELECT * FROM `Bankovni racun` INNER JOIN Klijent ON Klijent.ID_Klijenta=`Bankovni racun`.Klijent_ID_Klijenta AND `Bankovni racun`.Lozinka=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$result=$stmt->fetch(PDO::FETCH_ASSOC);


$stmt = $db_con->prepare("SELECT * FROM poslovnica INNER JOIN `Bankovni racun` ON poslovnica.ID_Poslovnice=`bankovni racun`.Poslovnica_ID_Poslovnice AND `Bankovni racun`.Lozinka=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$result1=$stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $db_con->prepare("SELECT * FROM `vrsta racuna` INNER JOIN `bankovni racun` ON `vrsta racuna`.`idVrsta racuna`=`bankovni racun`.`Vrsta racuna_idVrsta racuna` AND `Bankovni racun`.Lozinka=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$result2=$stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $db_con->prepare("SELECT * FROM `kredit` INNER JOIN `Bankovni racun` ON kredit.ID_Klijenta=`Bankovni racun`.Klijent_ID_Klijenta AND `Bankovni racun`.Lozinka=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$result3=$stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $db_con->prepare("SELECT * FROM `vrsta kredita` INNER JOIN `kredit` ON `vrsta kredita`.`idVrsta kredita`=`kredit`.`idVrsta kredita`");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$result4=$stmt->fetch(PDO::FETCH_ASSOC);


echo '<table ID="Tabela_Poslovnica">';
echo "<tr><th>Informacije o Računu</th></tr>";


//print out the fruits name in this case.
echo "<tr>";

echo "<tr>";
  echo "<td>";
  echo "<b> Trenutno stanje računa: </b> "; print $result["Stanje racuna"]; echo " KM" ;
	 echo "</td>";
echo "</tr>";



echo "<tr>";
  echo "<td>";
    echo "<b> Dnevni limit: </b> "; print $result["Dnevni limit"]; echo " KM" ;
	 echo "</td>";
echo "</tr>";



echo "<tr>";
  echo "<td>";
    echo "<b> Račun je otvoren u poslovnici : </b> "; print $result1["Grad"];
	 echo "</td>";
echo "</tr>";

echo "<tr>";
  echo "<td>";
    echo "<b> Vrsta računa : </b> "; print $result2["Vrsta racuna"];
	 echo "</td>";
echo "</tr>";

echo "<tr>";
  echo "<td>";
    echo "<b> Dopušteno prekoračenje : </b> "; print $result2["Dopusteno prekoracenje"]; echo " KM" ;
	 echo "</td>";
echo "</tr>";


echo "<tr>";
  echo "<td>";
    echo "<b> Mjesečna naknada za održavanje : </b> "; print $result2["mjesecna_naknada_koristenja"]; echo " KM" ;
	 echo "</td>";
echo "</tr>";

echo "<tr>";
  echo "<td>";
    echo "<b> Imate li kredit u našoj banci: </b> "; if(  $result3["Iznos otplatne glavnice"]) {
		print "DA - "; print $result4["Naziv kredita"]; print"&nbsp od &nbsp"; print $result3["Iznos otplatne glavnice"]; echo " KM" ;
	
		}
	else print "NE";
	 echo "</td>";
echo "</tr>";

echo "</table>";

?>
