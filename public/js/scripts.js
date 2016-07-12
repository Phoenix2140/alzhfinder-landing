// Empty JS for your own code to be here
$(document).ready(function($) {
	//Enviar el formulario de contacto
	$("#btn-contacto").click(function(event) {
		event.preventDefault();

		$.ajax({
		  url: baseUrl+'/contacto',
		  type: 'POST',
		  dataType: 'json',
		  data: {nombre: $("#nombre").val(), fono: $("#fono").val(), email: $("#mail").val(), mensaje: "contacto"},
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

	function msgNewsletter(tipo, texto){
		var str = '<div class="alert alert-'+tipo+'"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+texto+'</div>';
		return str;
	}
});