<?php
session_start();

if(isset($_SESSION['user_session'])!="")
{
	header("Location: Klijenti.php");
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>B4U - Prijava</title>
<link rel="icon" href="/slike/logomali.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 


<link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>		
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">

<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<script type="text/javascript" src="script.js"></script>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 

</head>


<body>
       	
	<div class="main" style="margin-top:50px;">	
		<div class="w3layouts_main agileinfo w3">		
			<div class="w3_agile_signup_form agileits">
				<div class="agile_login_form">
				<div class="err" id="add_err"></div>
				<img src="Slike/logomali.png" style="max-width:150px;"/>
				
				<!---------------------------------------->
				<div class="signin-form">

	
     
        
       <form method="post" id="login-form" class="agileits_w3layouts_form" >
      
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        <div class="form-group">
        <input type="text"  placeholder="Korisničko ime" name="korisnicko_ime" id="korisnicko_ime" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password"  placeholder="Lozinka" name="password" id="password" />
        </div>
       
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Prijavite se
			</button> 
        </div>  
      
      </form>

  
    
</div>
<!----------------------------------->
					
		
				</div>
			</div>
		</div>
	</div>

    
<script src="bootstrap/js/bootstrap.min.js"></script>

<script>


$(function() {
	
	  $( ".main" ).hide();
	  	 
    setTimeout(function(){
		 $( ".main" ).fadeIn( "slow", function() {  });
		     },1000);
});
</script>





</body>
<!--
STARI LOGIN

			<form method="post" action="./" id="login-form" class="agileits_w3layouts_form">
					<input name="korisnicko_ime" id="korisnicko_ime"type="text" placeholder="Korisnik"  oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Korisnicko ime je obavezno.')" required /><br>
						<input name="lozinka" id="lozinka" type="password" placeholder="********"  oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Molimo unesite ispravnu lozinku')"  required />
							<br>
						<!--<button type="submit" value="Prijavi se" id="btn-login" height="200px"> Prijavi se </button> <!-- action=".././Izbornik.php"-->
<!--	<div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Prijavi se

			</button> 
        </div>  

					</form>
				
				->
</html>




				