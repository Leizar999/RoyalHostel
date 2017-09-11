<footer class="row">
	<div class="col-sm-12">
	  <div class="panel panel-default naranja">
	  		<div class="panel-heading azul-oscuro">CONTACTO</div>
	   		<div id="footer-links" class="panel-body pie">
		    	<div class="col-sm-2">
			    	<a href="">INICIO</a><br>
			    	<a href="nosotros.php">NOSOTROS</a><br>
			    	<a href="galeria.php">GALERÍA</a><br>
		    	</div>
		    	<div class="col-sm-2">
			    	<a href="servicios.php">SERVICIOS</a><br>
			    	<a href="llegar.php">CÓMO LLEGAR</a><br>
			    	<a href="">BUSCADOR</a><br>
		    	</div>
		    	<div class="col-sm-2">
			    	INFORMACIÓN<br>
					C/ San Ignacio, 15<br>
					28034 - Madrid<br>
		    	</div><br>

				<form action="./lib/mailsystem/contactform.php" method="post">
					<div class="col-sm-2 panel-content">
						<input type="text" name="nombre" placeholder="Nombre" class="row form-control"><br>
						<input type="email" name="email" placeholder="E-Mail" class="row form-control"><br>
					</div>

					<div class="col-sm-3 panel-content">
						<textarea name="comentario" placeholder="Comentario" class="form-control"></textarea>
					</div>
					<div class="col-sm-1">
						<button type="submit" class="btn btn-primary">ENVIAR</button>
					</div>
				</form>
	    	</div>
	    <div id="copyright" class="panel-footer azul-oscuro">ROYAL HOSTEL <?php echo date("Y"); ?> - Todos los derechos reservados</div>
	  	</div>
	</div>
</footer>
