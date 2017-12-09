<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stil.css">
<title> B4U - Naslovnica</title>
<link rel="icon" href="/slike/logomali.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>


<body>
<div style="width:50%; margin-left:20px;float:left;">

<div id="slika_slogan"><img style="width:90%;" src="/slike/headlogo.png"></div>

</div>

<div id="big_kontejner">

<div style="float:right; width:40%;">
<p style="float:left; font-family: 'Bookman Old Style'; font-size:120%;color:#3e4095; margin-left:5%; margin-right:5%;margin-top:25% ">Kreditiranje</p>
<p style="float:left; font-family: 'Bookman Old Style';font-size:120%;color:#3e4095;margin-left:5%; margin-right:5%;margin-top:25%">Štednja</p>
<p style="float:left; font-family: 'Bookman Old Style';font-size:120%;color:#3e4095;margin-left:5%; margin-right:5%;margin-top:25%"> <a href="prijava.php" style="text-decoration:none; position:relative; z-index:10000;"> Prijavi se</a></p>

</div>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"><h1></h1></div>
  <img src="/slike/Slika1.png" style="width:100%">
  <div class="text">
</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/slike/Slika2.jpg" style="width:100%">
 
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="/slike/Slika3.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="clearfix"><br/><br/>
<p style="text-align:center;font-size:150%;color: #3e4095">
<b>BANKA ZA TEBE</b>
<hr style="width:80%;border-top: 1px solid #3e4095;"><br></p>

<p style="text-align:center;"><b>
&emsp;&emsp;B4U želi samo najbolje za svoje klijente, i je od vodećih imena u Europi. U samo prošloj godini, otvorene su 3 nove poslovnice u Bosni i Hercegovini. 
Cilj nam je što bolje i što preciznije upoznati javnost sa pogodnostima koje pruža B4U. Koristeći B4U sustav, moguće je 24 sata na dan upravljati 
svojim novcem, te pristupiti bilo kojoj potrebnoj informacciji. Jednostavnost korištenja, brzina, ljubaznost te obavljanje poslova iz udobnosti vlastitog doma 
samo su neke pogodnosti koje ostvarujete. Posebne pogodnosti ostvaruju korisnici koji se registriraju do 01.06.2017.</b><br><br>

</p>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}



$(function() {
	
	  $( "#slika_slogan" ).hide();
	   $( "#big_kontejner" ).hide();
	  	 
    setTimeout(function(){
		 $( "#slika_slogan" ).fadeIn( "slow", function() {  });
		     },1000);
			   	 
    setTimeout(function(){
		 $( "#big_kontejner" ).fadeIn( "slow", function() {  });
		     },2000);
			 
			 
});
</script>
</div>
</body>
</html> 