<!-- Mensaje de login -->
<?php if(isset($_SESSION["errores"])): ?>

	<script type="text/javascript">	
	sweetAlert({
			title: "Error qué horror!", 
		    text: `<?php echo $_SESSION["errores"][0]; ?>`, 
		    type: "error"
		})
	</script>

<?php unset($_SESSION["errores"]); ?>
<?php elseif(isset($_SESSION["exito"])): ?>

	<script type="text/javascript">	
	sweetAlert({
			title: "Todo correcto!", 
		    text: `<?php echo $_SESSION["exito"]; ?>`, 
		    type: "success"
		})
	</script>

<?php unset($_SESSION["exito"]); ?>
<?php endif; ?>
