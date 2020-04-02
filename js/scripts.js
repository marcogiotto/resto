$(document).scroll(function() {
	if($('.header-inner').offset().top> 25){
		$('.header-inner').addClass('header-fixed');
		$('h1').addClass('logo');
		
		$('nav').addClass('navbar-light');
	}else{
		$('.header-inner').removeClass('header-fixed');
		$('h1').removeClass('logo');
		
		$('nav').removeClass('navbar-light');

	}
});

$(document).ready(function(){

		var pantalla =screen.width;
		console.log(pantalla);
			 if (pantalla> 700) {
			$('.mobile').addClass('d-none');
			$('.no-mobile').removeClass('d-none');
		} else {
			$('.no-mobile').addClass('d-none');
			$('.mobile').removeClass('d-none');
			 }
		
 		

	



		
	});
	
	/* Call the function */
  
$(document).ready(function (){
$('.Desayunos').show();
	$('.p').hide();

$('.fil').click(function(e){

		e.preventDefault();
		var filtro=$(this).attr('data-filter');
		if(filtro =='todo'){

			$('.cu').show(500);

			
		}else {
			$('.cu').not('.'+filtro).hide(500);
			$('.cu').filter('.'+filtro).show(500);
			
		}

		
	})



})




 		
