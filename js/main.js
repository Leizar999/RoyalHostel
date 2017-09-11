var fechaGlobal = [];
var start = new Date();
var fechas = "";

$(document).ready(function(){

	//Muestra la llegada del datepicker

	$("#llegada").on("click", function(){

		//var start = new Date();
		start.setDate(start.getDate());

	    diasOcupadosLLegada(sessionStorage.getItem("idHab"));
		console.log(fechas);

	});

	//Muestra el final del datepicker

	$("#salida").on("click", function(){

		var end = new Date();
		end.setDate(end.getDate());

		diasOcupadosSalida(sessionStorage.getItem("idHab"));

	});

    //Iluminar navbar
    function setActive(){
        var path = window.location.pathname;
        $("ul.nav.navbar-nav").find("a[href='" + path + "']").attr("class", "activo");
  	}

    setActive();

	// Función para coger valor de los días ocupados por habitación

	function diasOcupadosLLegada(id){
		$.ajax({
	    	type: "GET",
	    	url: "/programa/recogerDias.php?id=" + sessionStorage.getItem("idHab") + "",
	    	dataType: "json",
	    	success: function(respuesta) {
	    		console.log(respuesta);
	    		fechaGlobal = JSON.stringify(respuesta);
	       		sessionStorage.setItem("array", JSON.stringify(respuesta));

	       		fechas = JSON.parse(sessionStorage.getItem("array")) || fechaGlobal;

				$("#llegada").datepicker({ 
				    startDate: start,
				    format: "dd/mm/yyyy",
				    todayHighlight: true,
				    autoclose: true,
		   			datesDisabled: fechas

				});

				$("#llegada").datepicker('show');
	    	}
		});
		sessionStorage.removeItem("idHab");
	}

	function diasOcupadosSalida(id){
		$.ajax({
	    	type: "GET",
	    	url: "/programa/recogerDias.php?id=" + sessionStorage.getItem("idHab") + "",
	    	dataType: "json",
	    	success: function(respuesta) {
	    		console.log(respuesta);
	    		fechaGlobal = JSON.stringify(respuesta);
	       		sessionStorage.setItem("array", JSON.stringify(respuesta));

	       		fechas = JSON.parse(sessionStorage.getItem("array")) || fechaGlobal;

				$("#salida").datepicker({ 
			    	startDate: $("#llegada").val(),
				    format: "dd/mm/yyyy",
				    todayHighlight: true,
				    autoclose: true,
		   			datesDisabled: fechas

				});

				$("#salida").datepicker('show');
	    	}
		});
		sessionStorage.removeItem("idHab");
	}

	// Evento para abrir las reservas

	$(".reservar").on("click", function(e){
		var id = $(e.target).attr("id");
		sessionStorage.setItem("idHab", id);
		console.log(sessionStorage.getItem("idHab"));

		//diasOcupadosLLegada(id);

		window.location.href = "/vista/reserva.php?hab=" + id + "";
	});

	// CKeditor configuración
	CKEDITOR.editorConfig = function( config ) {
		config.language = 'es';
		config.uiColor = '#F7B42C';
		config.height = 300;
		config.toolbarCanCollapse = true;
	};

	$('textarea.editor').ckeditor();
	$(window).resize(redimensionar);
	redimensionar();

	function redimensionar(){

		var alturaTotal = $("main").height() - $("#formulario-aside").height();

		if(alturaTotal > 0){
			$("#twitter").css("height", (alturaTotal - 16) + "px");
		}else {
			$("#abajo").remove();
		}
	}

	$("#lateral").on("submit", function(evento){
		var tipo = $("#tipo").val();
		var llegada = $("#llegada").val();
		var salida = $("#salida").val();
		var adultos = $("#adultos").val();
		var children = $("#children").val();

		if(tipo != "" && llegada != "" && salida != "" && adultos != "" && children != ""){


		}else {
			sweetAlert({
				title: "Error qué horror!", 
			    text: `TIENES QUE RELLENAR TODOS LOS CAMPOS!`, 
			    type: "error"
			})
			evento.preventDefault();
		}
	});

});