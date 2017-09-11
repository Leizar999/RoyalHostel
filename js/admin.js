//Listar usuarios

$(document).ready(function(){
	$("#listadoUsuarios").on("click", function(){
      $.ajax({    //Creamos una consulta ajax.
	        type: "GET",
	        url: "listarUsuarios.php",             
	        dataType: "html",   //Se espera HTML               
	        success: function(respuesta){                    
	            $("#main").html(respuesta); 
	        }

	    });
	});

//Añadir usuarios

	$("#addUsuario").on("click", function(){
      $.ajax({
	        type: "GET",
	        url: "insertarUsuario.php",             
	        dataType: "html",              
	        success: function(respuesta){                    
	            $("#main").html(respuesta); 
	        }
	    });
  	});

//Borrar usuarios

	$("#removeUsuario").on("click", function(){
		$.ajax({
	        type: "GET",
	        url: "borrarUsuario.php",             
	        dataType: "html",              
	        success: function(respuesta){                    
	            $("#main").html(respuesta); 
	        }
	    });
	});

// Listar habitaciones

	$("#listadoHabitaciones").on("click", function(){
      $.ajax({
	        type: "GET",
	        url: "listarHabitaciones.php",             
	        dataType: "html",              
	        success: function(respuesta){                    
	            $("#main").html(respuesta); 
	        }
	    });
  	});

// Añadir habitaciones

	$("#addHabitacion").on("click", function(){
		$.ajax({
	        type: "GET",
	        url: "insertarHabitacion.php",             
	        dataType: "html",              
	        success: function(respuesta){                    
	            $("#main").html(respuesta); 
	        }
	    });
	});

// Borrar habitaciones

	$("#removeHabitacion").on("click", function(){
		$.ajax({
	        type: "GET",
	        url: "borrarHabitacion.php",             
	        dataType: "html",              
	        success: function(respuesta){                    
	            $("#main").html(respuesta); 
	        }
	    });
	});

// Listar servicios

	$("#listadoServicios").on("click", function(){
		$.ajax({
	        type: "GET",
	        url: "listarServicios.php",             
	        dataType: "html",               
	        success: function(respuesta){                    
	            $("#main").html(respuesta); 
	        }
	    });
	});


// Añadir servicios

	$("#addServicio").on("click", function(){
		$.ajax({
	        type: "GET",
	        url: "insertarServicio.php",             
	        dataType: "html",              
	        success: function(respuesta){                    
	            $("#main").html(respuesta); 
	        }
	    });
	});

// Borrar servicios

	$("#removeServicio").on("click", function(){
		$.ajax({
	        type: "GET",
	        url: "borrarServicio.php",             
	        dataType: "html",              
	        success: function(respuesta){                    
	            $("#main").html(respuesta); 
	        }
	    });
	});

// Listar reservas

	$("#listadoReservas").on("click", function(){
		$.ajax({
	        type: "GET",
	        url: "listarReservas.php",             
	        dataType: "html",               
	        success: function(respuesta){                    
	            $("#main").html(respuesta); 
	        }
	    });
	});

	//Recogemos los valores de la tabla, id, columna, y valor clickado para mandarlo via AJAX.

    $.fn.editable.defaults.mode = 'popup';
	$('.xedit').editable();

	var cual = ""; 
	var tipo = "";

	$("table").on("click", function(){
		tipo = $(this).attr("id");
	});

	$("" + tipo + " td").on("click", function(){
		var th = $('th').eq($(this).index());
	    cual = th.text();
	});

    $(document).on('click','.editable-submit', function(){
        var id = $(this).parents('tr:first').find('td:first').text();
        var valor = $('.input-sm').val();

        $.ajax({
            url: "/lib/dbeditor/editar.php?id=" + id + "&data=" + valor + "&col=" + cual + "&tabla=" + tipo,
            type: 'GET',
            success: function(s){
                console.log(s);
                if(s == 'status'){
                $(z).html(y);}
                if(s == 'error') {
                alert('Error al procesar');}
            },
            error: function(e){
                alert('Error al procesar!!');
            }
        });
    });

    // Código para enviar solucitud de borrado a la BBDD al hacer click en el botón borrar

    $("#borrar").on("click", function(){
    	var tabla = $("select").attr("id");
    	var valor = $('select[id=' + tabla + ']').val()
    	console.log(valor);

    	$.ajax({
            url: "/panel/procesoBorrar.php?tabla=" + tabla + "&valor=" + valor,
            type: 'GET',
            success: function(s){
                console.log(s);
                if(s == 'status'){
                $(z).html(y);}
                if(s == 'error') {
                alert('Error al procesar');}
            },
            error: function(e){
                alert('Error al procesar!!');
            }
        });
    });
});
