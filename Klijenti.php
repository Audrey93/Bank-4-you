<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: prijava.php");

}

include_once 'dbconfig.php';

//$stmt = $db_con->prepare("SELECT * FROM `Bankovni racun` WHERE Lozinka=:uid");
$stmt = $db_con->prepare("SELECT * FROM Klijent INNER JOIN `Bankovni racun` ON Klijent.ID_Klijenta=`Bankovni racun`.Klijent_ID_Klijenta AND `Bankovni racun`.Lozinka=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!---<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">-->
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<title>B4U - Klijent</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="css/table_style.css">
<style>
.body-container
{
	//border:solid red 1px;
	margin-top:110px;
}

body{
	background-image: url(/Slike/brick_wp.jpg);
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
background-size: cover;
}
.alert-success {
  background-color: rgba(255,255,255,0.5);
  background-image: none;
  background-repeat: no-repeat;
  border-color: rgba(255,255,255,0.5);
  color:grey;
  font-size:1.5em;


}
.navbar-fixed-top{
  background-color: rgba(255,255,255,0.5);
  background-image: none;
  background-repeat: no-repeat;
	height:100%;
	max-height:70px;
}


</style>

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Navigacija</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:#e74c53; font-size:2.5em;" ><img src="/Slike/logomali.png" alt="logo" style="height:50px; display:inline-block;padding-right:5px;"/>  Klijent</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!--<li><a href="http://www.codingcage.com/search/label/jQuery"></a></li>
            <li><a href="http://www.codingcage.com/search/label/PHP">PHP</a></li>-->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-top:15px; color:#3e4095; font-size:1.2em; ">
			  <span class="glyphicon glyphicon-user"></span>&nbsp; <?php 
	echo $row['Ime']; ?>&nbsp; <?php echo $row['Prezime'];?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu"style="background-color:rgba(62, 64, 149,0.7);" >
                
				<li id="klik_podatci"><a href="#"style="color:white;"><span class="glyphicon glyphicon-user"></span>&nbsp;Osobni podaci</a></li>
				<li id="klik_informacije"><a href="#" style="color:white;"><span class="glyphicon glyphicon-info-sign"></span>&nbsp; Moj račun</a></li>
				<li ><a href="#" style="color:white;"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;FAQ</a></li> 
                <li><a href="logout.php" style="color:rgb(231, 76, 83);"><span class="glyphicon glyphicon-log-out" ></span>&nbsp;Odjava</a></li>
              
			  </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    
<div class="body-container">

<div class="container " >
    <div class='alert alert-success' ">
		<button class='close' data-dismiss='alert'>&times;</button>
			 Dobrodošli, <strong><?php echo $row['Ime']; ?></strong> !
    </div>
</div>



<!------------------------------------------------------------------------------------------->

<div class="container">


<div id="tabela1"></div>
<div id="tabela2"></div>

<!--
<table  class="table" border="1px">
<tr>
<th>Podatci o računu </th>
</tr>
<tr>
<td>
bla bla
</td>
</tr>
<tr>
<td> blabla
       </td>
</tr>
<tr>
<td> blabla
       </td>
</tr>
<tr>
<td>blabla
       </td>
</tr>
</table>


-->

<script type="text/javascript">
window.twttr = (function (d, s, id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src= "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
}(document, "script", "twitter-wjs"));
</script>

<!-- Place this tag where you want the widget to render. -->


<!-- Place this tag after the last widget tag. -->
<script type="text/javascript">
    (function() {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script>
    </div>
	



</div>

</div>
</div>


</div>

</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
$(function() {
	 
	 $("#tabela2").hide();
	$("#tabela1").hide();
	
	setTimeout(function(){ $.ajax({
                type: 'POST',
                url: 'bank_inf.php',
                success: function(data) {
                  //  alert(data);
                    $("#tabela1").html(data);
					  $("#tabela1").fadeIn(1500);
					
                }
            });
			 },500);
});

$( "#klik_podatci" ).click(function() {
$("#tabela1").hide();
  $("#tabela2").hide();
            $.ajax({
                type: 'POST',
                url: 'osobni_inf.php',
                success: function(data) {
                 
                    $("#tabela2").html(data);
					$("#tabela2").fadeIn(2000);
                }
            });


});

$( "#klik_informacije" ).click(function() {
$("#tabela1").hide();
  $("#tabela2").hide();
 $("#tabela1").fadeIn(2000);
});



</script>

</body>
</html>