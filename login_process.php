<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		$korisnicko_ime =$_POST['korisnicko_ime'];
		$user_password =trim( $_POST['password']);
		
		$password = md5($user_password);
		
		try
		{	
		
			/*$stmt=$db_con->prepare("SELECT Lozinka FROM `Bankovni racun` WHERE Lozinka = ? ");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo $row['Klijent_ID_Klijenta']; echo "<br>hehe<br>";*/
	
	/*
	$sql = 'SELECT Lozinka FROM `Bankovni racun` WHERE Lozinka =:Lozinka';
	$sth = $db_con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$sth->execute(array(':Lozinka' =>"$password"));
	//$row = $sth->fetchAll();
	while ($row = $sth->fetch(PDO::FETCH_ASSOC)){

    echo $row['Lozinka']; echo "<br>";
	echo $password. "<br>";
	}
	*/
	$stmt = $db_con->prepare("SELECT * FROM `Bankovni racun` WHERE Klijent_ID_Klijenta=:korisnicko_ime");
			$stmt->execute(array(":korisnicko_ime"=>$korisnicko_ime));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
		
			//$stmt1 = $db_con->prepare("SELECT Klijent_ID_Klijenta FROM `Bankovni racun` WHERE Lozinka=:password");
			//$stmt->execute(array(":password"=>$password));
			//$row = $stmt->fetch(PDO::FETCH_ASSOC);
			//$count = $stmt->rowCount();
	
	if($row['Lozinka']==$password){
				
		echo "ok"; // log in
		$_SESSION['user_session'] = $row['Lozinka'];
		
			}
			else{
				
				echo "Korisničko ime ili lozinka nisu ispravni. Pokušajte ponovo "; // wrong details 
			}
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>