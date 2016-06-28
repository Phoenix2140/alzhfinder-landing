jQuery(function($) {

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: 8000
		});
	});

	$( '.centered' ).each(function( e ) {
		$(this).css('margin-top',  ($('#main-slider').height() - $(this).height())/2);
	});

	$(window).resize(function(){
		$( '.centered' ).each(function( e ) {
			$(this).css('margin-top',  ($('#main-slider').height() - $(this).height())/2);
		});
	});

	//portfolio
	// $(window).load(function(){
	// 	$portfolio_selectors = $('.portfolio-filter >li>a');
	// 	if($portfolio_selectors!='undefined'){
	// 		$portfolio = $('.portfolio-items');
	// 		$portfolio.isotope({
	// 			itemSelector : 'li',
	// 			layoutMode : 'fitRows'
	// 		});
	// 		$portfolio_selectors.on('click', function(){
	// 			$portfolio_selectors.removeClass('active');
	// 			$(this).addClass('active');
	// 			var selector = $(this).attr('data-filter');
	// 			$portfolio.isotope({ filter: selector });
	// 			return false;
	// 		});
	// 	}
	// });

	//contact form
	// var form = $('.contact-form');
	// form.submit(function () {
	// 	$this = $(this);
	// 	$.post($(this).attr('action'), function(data) {
	// 		$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
	// 	},'json');
	// 	return false;
	// });

	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});	

	//Pretty Photo
	// $("a[rel^='prettyPhoto']").prettyPhoto({
	// 	social_tools: false
	// });	

	$("#newsletter-btn").click(function(event) {
		event.preventDefault();

		$.ajax({
		  url: baseUrl+'/news',
		  type: 'POST',
		  dataType: 'json',
		  data: {email: $("#news-mail").val()},
		  success: function(data) {
		  	var mensaje = "";
		    if(data.response){
		    	mensaje = msgNewsletter('success', '<strong>Gracias!</strong> has sido registrado en nuestra lista de noticias.');
		    }else{
		    	mensaje = msgNewsletter('danger', 'Ha ocurrido un <strong>error</strong>, el correo existe o es inválido.');
		    }

		    $("#post-msg-news").html(mensaje);
		  }
		});
		
	});

	function msgNewsletter(tipo, texto){
		var str = '<div class="alert alert-'+tipo+'"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+texto+'</div>';
		return str;
	}
});