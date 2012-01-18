var paginaAtual = '';

$('document').ready(function () {
	
	$('#menu a').anchorAnimate();		

	onResize();

	$(window).resize(function(){onResize()});
	$(window).scroll(function(){onScroll()});
	
	$('#job-grid-motion').jcarousel({
		visible: 1,
		scroll: 1,
        initCallback: mycarousel_initCallback,
        // This tells jCarousel NOT to autobuild prev/next buttons
        buttonNextHTML: null,
        buttonPrevHTML: null		
	});

	$('#job-grid-grafico').jcarousel({
		visible: 1,
		scroll: 1,
        initCallback: mycarousel_initCallback_grafico,
        // This tells jCarousel NOT to autobuild prev/next buttons
        buttonNextHTML: null,
        buttonPrevHTML: null		
	});

	
	$(".grid a[href$='.jpg'], .grid a[href$='.jpeg'], .grid a[href$='.gif'], .grid a[href$='.png']").prettyPhoto({
		animationSpeed: 'normal', /* fast/slow/normal */
		padding: 40, /* padding for each side of the picture */
		opacity: 0.7, /* Value betwee 0 and 1 */
		showTitle: false /* true/false */			
	});		
	
		
});


function mycarousel_initCallback(carousel) {
	
    $('.mycarousel-next').bind('click', function() {
        carousel.next();
        return false;
    });

    $('.mycarousel-prev').bind('click', function() {
        carousel.prev();
        return false;
    });
};

function mycarousel_initCallback_grafico(carousel) {
	
    $('.mycarousel-next').bind('click', function() {
        carousel.next();
        return false;
    });

    $('.mycarousel-prev').bind('click', function() {
        carousel.prev();
        return false;
    });
};


function onResize()
{
	if($(window).height() > 990){
		$('.conteudo').height($(window).height());
		$('#eu').height(990);
		$('#portifolio').height(990);
		$('#extra').height(990);		
		$('#contato').height(990);
	} else {
		$('.page').height(990);
	}
}

function onScroll()
{	
	var scrollY = $(document).scrollTop() + $(window).height() / 2;

	//atualiza marcador no menu
	if(scrollY >= $('#portifolio').position().top && scrollY < $('#extra').position().top){
		$("#menu li").removeClass('active');
		$('#menu #link-portifolio').addClass('active');
		
		if(paginaAtual != '/#portifolio'){
			paginaAtual = '/#portifolio';
			console.log(paginaAtual);
/*			_gaq.push(['_trackPageview', '/#garnier-body']);*/
		}
	} else if(scrollY >= $('#extra').position().top && scrollY < $('#contato').position().top){
		$("#menu li").removeClass('active');
		$('#menu #link-extra').addClass('active');

		if(paginaAtual != '/#extra'){
			paginaAtual = '/#extra';
			console.log(paginaAtual);
/*			_gaq.push(['_trackPageview', '/#garnier-body']);*/
		}
	} else if(scrollY >= $('#contato').position().top) {
		$("#menu li").removeClass('active');
		$('#menu #link-contato').addClass('active');

		if(paginaAtual != '/#portifolio'){
			paginaAtual = '/#portifolio';
			console.log(paginaAtual);
/*			_gaq.push(['_trackPageview', '/#garnier-body']);*/
		}
	}
	else{
		$("#menu li").removeClass('active');
		$('#menu #link-eu').addClass('active');

		if(paginaAtual != '/#eu'){
			paginaAtual = '/#eu';
			console.log(paginaAtual);
/*			_gaq.push(['_trackPageview', '/#pagina-inicial']);*/
		}
	}
}




/*******
	***	Anchor Slider by Cedric Dugas   ***
	*** Http://www.position-absolute.com ***
*****/
jQuery.fn.anchorAnimate = function(settings) {

 	settings = jQuery.extend({
		speed : 1700
	}, settings);	
	
	return this.each(function(){
		var caller = this
		$(caller).click(function (event) {	
			event.preventDefault()
			var locationHref = window.location.href
			var elementClick = $(caller).attr("href")
			
			var destination = $(elementClick).offset().top - 85;
			$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
				window.location.hash = elementClick;
			});
		  	return false;
		})
	})
}