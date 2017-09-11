<!-- Mensaje de login -->
<?php if(isset($_SESSION["errores"])): ?>
<div class="alert alert-danger alert-dismissable">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	<?php echo $_SESSION["errores"][0]; ?>
	<?php unset($_SESSION["errores"]); ?>
	<script>
		sweetAlert({
			title: "Error qué horror!", 
		    text: "El usuario y la contraseña no", 
		    type: "error"
		});
	</script>
</div>
<?php elseif(isset($_SESSION["exito"])): ?>
<div class="alert alert-success alert-dismissable">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	<?php echo $_SESSION["exito"]; ?>
	<?php unset($_SESSION["exito"]); ?>
</div>
<?php endif; ?>
