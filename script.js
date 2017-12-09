

$('document').ready(function()
{ 
     /* validacija preko plugina, moraju se popuniti oba polja*/
	 $("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			korisnicko_ime: {
            required: true,
            },
	   },
       messages:
	   {
            password:{
                      required: "Molimo unesite lozinku"
                     },
            korisnicko_ime: "Molimo unesite korisničko ime",
       },
	   submitHandler: submitForm	
       });  
	   
	   /* slanje podataka na obradu */
	   function submitForm()
	   {		
			var data = $("#login-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'login_process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Obrada podataka ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						$("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Prijava...');
						setTimeout(' window.location.href = "Klijenti.php"; ',3000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Prijavite se');
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});