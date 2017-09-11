<aside id="barra-lateral" class="col-sm-3">
	<div class="wrapper">
		<div class="sidebar-wrapper">
			<div id="formulario-aside" class="panel panel-primary text-center">
			    <div class="panel-heading"><h4>RESERVAS</h4></div>
			    <div class="panel-body">
					<form action="/templates/fetchGaleriaCriterio.php" method="POST" id="lateral">
						<div class="row form-group text-center">
							
							<div class="col-sm-12">
								<div class="row form-group">
									<div class="col-sm-1">
										<label for="tipo">TIPO</label>
									</div>

									<div class="col-sm-12">
										<select class="form-control" name="tipo" id="tipo">
											<option value="individual">INDIVIDUAL</option>
											<option value="doble">DOBLE</option>
											<option value="compartida">COMPARTIDA</option>
										</select>
									</div>
								</div>

								<div class="row form-group">
									<div class="col-sm-1">
										<label for="llegada">LLEGADA</label>
									</div>
									<div class="col-sm-12">
										<input class="form-control datepicker" type="text" id="llegada" name="llegada">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-sm-1">
										<label for="salida">SALIDA</label>
									</div>
									<div class="col-sm-12">
										<input class="form-control datepicker" type="text" id="salida" name="salida">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-sm-1">
										<label for="adultos">ADULTOS</label>
									</div>
									<div class="col-sm-12">
										<input class="form-control" type="number" name="adultos" min="1" value="1" id="adultos">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-sm-1">
										<label for="childs">NIÑOS</label>
									</div>
									<div class="col-sm-12">
										<input class="form-control" type="number" name="childs" min="0" value="0" id="children">
									</div>
								</div>
								
								<div class="row form-group">
									<button type="submit" class="btn btn-primary btn-lg" id="disp">VER DISPONIBILIDAD</button>
								</div>
							</div>
						</div>
					</form>
			    </div>
			</div>

			<div id="abajo" class="panel panel-primary text-center">
				<div class="panel-heading"><h4>TWEETS</h4></div>
				<div class="panel-body">
					<div id="twitter" class="wrapper">
						<a class="twitter-timeline" data-lang="es" href="https://twitter.com/royalhostelesp">Tweets by royalhostelesp</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>

				</div>
			</div>
		</div>
	</div>
</aside>

<script src="/js/main.js"></script>