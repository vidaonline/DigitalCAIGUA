<!DOCTYPE HTML>
<html>

	<head>
	
	</head>
	
	<body>
	
	<div class="container">
	
		<div class="col-md-12">
		
			<div id="login">

					
					<div>Iniciar Sesión</div>
					
					<div>Cerrar Sesión</div>

					<div>Password</div>


					
function clientImage(key) {

	if(key != null) {

		$("#client-img").fadeOut(200, function() {
        $("#client-img").attr({'src':'assets/'+key+".png"});

        		$("img").error(function () {
		  $(this).unbind("error").attr({'src':'assets/0.png'});
		});
        		
    }).fadeIn(200);


	}
	
	

}
					

			</div>
		
		</div>
		
	</div>
	
	
	</body>

</html>