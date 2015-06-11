$( document ).ready(function() {


	$('body button').click(function(){
		$('section').slideToggle("slow");
	});

	$('h2').click(function(){
		$('table').fadeToggle('slow');
	});


});

