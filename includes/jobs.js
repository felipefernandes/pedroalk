var ativo = "motion"; //inicializa em motion	

$(document).ready(function() {
	
	$.ajaxSetup({cache:false});
	
	//inicializa a aba
	$(".grafico").hide();
	$("#job-inside").hide();
	
	//controle do btn filtro de galeria: Motion
	$("#jobs-menu #motion a").click(function() {
		$(this).parent().addClass('selected');
		$('#jobs-menu #grafico').removeClass('selected');
		
		if($('.motion').is(':hidden')) {				
			$(".grafico").fadeOut('fast', function() { 
				$(".motion").fadeIn('slow'); });
		}			
		
		if($('#job-inside').is(':visible')) {
			$('#job-inside').fadeOut('fast');
		}
		
		ativo = "motion";
		return false;
	});
	
	//controle do btn filtro de galeria: Grafico		
	$("#jobs-menu #grafico a").click(function() {
		$(this).parent().addClass('selected');
		$('#jobs-menu #motion').removeClass('selected');
		
		if($('.grafico').is(':hidden')) {
			$('.motion').fadeOut('fast', function() {
				$(".grafico").fadeIn('slow');
			})				
		}
		
		if($('#job-inside').is(':visible')) {
			$('#job-inside').fadeOut('fast');
		}
		
		ativo = "grafico";
		return false;												
	});
	
	$("#jobs-menu #motion a").trigger('click');	//inicializo a variavel de controle usando simulacao de click	
		
});