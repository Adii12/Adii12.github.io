var isToggled =0;

$('body').css('display','none');
	$('body').fadeIn(1000);
	$('.content').css('display','none'); 
	$('.content').slideDown(1000);
	$('.card').css('display','none'); 
	$('.card').fadeIn(1000);
$(document).ready(function(){
	//Fade in Website on LOAD
	
	$('.toggleCard').click(function(){
		$('.card').slideUp(1000);
		
		
		if($('.card').is(":hidden")){
		$('.card').slideDown(1000);
		

			
		
	}
	});
	
});