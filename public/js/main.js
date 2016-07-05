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

	//Inscribirse al newsletter
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

	//Enviar el formulario de contacto
	$("#btn-contacto").click(function(event) {
		event.preventDefault();

		$.ajax({
		  url: baseUrl+'/contacto',
		  type: 'POST',
		  dataType: 'json',
		  data: {nombre: $("#nombre").val(), fono: $("#fono").val(), email: $("#mail").val(), mensaje: $("#message").val()},
		  success: function(data) {
		  	var mensaje = "";
		    if (data.response) {
		    	mensaje = msgNewsletter('success', '<strong>Gracias!</strong>, nos ha llegado tu contacto, pronto nos comunicaremos contigo.');

		    	$("#nombre").val("");
		    	$("#fono").val("");
		    	$("#mail").val("");
		    	$("#message").val("");
		    	
		    } else {
		    	mensaje = msgNewsletter('danger', 'Ha ocurrido un <strong>error</strong>, verifique sus dato e intente nuevamente.');
		    }
		    $("#contacto-msg").html(mensaje);
		  }
		});
		
	});

	// Sección para ingresar a la plataforma
	$("#btn-login").click(function(event) {
		event.preventDefault();

		$.ajax({
		  url: baseUrl+'/login',
		  type: 'POST',
		  dataType: 'json',
		  data: {usuario: $("#usuario").val(), pass: $("#pass").val()},
		  success: function(data) {
		  	var mensaje = "";
		    
		    if (data.response) {
		    	window.location.replace(baseUrl+'/panel');
		    } else {
		    	mensaje = msgNewsletter('danger', 'Ha ocurrido un <strong>error</strong>, verifique sus datos e intente nuevamente.');
		    }

		    $("#msg-login").html(mensaje);
		  }
		});
		
	});

	// Sección para crear noticias
	$("#btn-enviar-noticia").click(function(event) {
		event.preventDefault();
		var radio = $('input[name=email-radio]:checked', '#Formulario-noticia').val();		

		$.ajax({
		  url: baseUrl+'/panel/noticias',
		  type: 'POST',
		  dataType: 'json',
		  data: {email: radio, 
		  		titulo: $("#titulo-noticia").val(), 
		  		mensaje: tinymce.get('mensaje-noticia').getContent()},
		  success: function(data) {
		    if(data.response){
		    	window.location.replace(baseUrl+'/panel/noticias');
		    }else{
		    	$("#msg-news").html(msgNewsletter('danger', 'Ha ocurrido un <strong>error</strong>, verifique los campos e intente nuevamente.'));
		    }
		  }
		});
		
	});


	tinymce.init({
	  selector: '.tinymce-msg',
	  height: 300,
	  language: 'es',
	  plugins: [
	    'advlist autolink lists link image charmap print preview anchor',
	    'searchreplace visualblocks code fullscreen',
	    'insertdatetime media table contextmenu paste code'
	  ],
	  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	  content_css: [
	    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
	    '//www.tinymce.com/css/codepen.min.css'
	  ]
	});

	function msgNewsletter(tipo, texto){
		var str = '<div class="alert alert-'+tipo+'"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+texto+'</div>';
		return str;
	}
});