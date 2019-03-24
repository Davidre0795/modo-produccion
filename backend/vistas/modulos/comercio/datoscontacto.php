<?php

$plantilla = ControladorComercio::ctrSeleccionarPlantilla();

?>

<div class="box box-success">
	
	<div class="box-header with-border">
		
		<h3 class="box-title">DATOS DE CONTACTO</h3>

	    <div class="box-tools pull-right">

     		<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">

	        	<i class="fa fa-minus"></i>

	       	</button>

	    </div>

	</div>


 	<div class="box-body formularioContacto">
	 	

			<div class="form-group row">

					<div class="col-xs-8">

					<label>Número de teléfono:</label>
				
						<div class="input-group">

							<span class="input-group-addon"><i class="fa fa-phone-square"></i></span>

							<input type="text" class="form-control input-lg cambioContacto" id="phone_number" value="<?php echo $plantilla["phone_number"];?>">

						</div>

					</div>

				</div>


			<div class="form-group row">

				<div class="col-xs-8">

				<label>Correo electrónico:</label>

					<div class="input-group">

						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>

						<input type="text" class="form-control input-lg cambioContacto" id="email" value="<?php echo $plantilla["email"];?>">

					</div>

				</div>

				</div>

				<div class="form-group row">

				<div class="col-xs-8">

				<label>Domicilio:</label>

					<div class="input-group">

						<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

						<input type="text" class="form-control input-lg cambioContacto" id="address" value="<?php echo $plantilla["address"];?>">

					</div>

				</div>

				</div>

			<div class="form-group row">

				<div class="col-xs-5">

				<label>Ciudad</label>

					<div class="input-group">

						<input type="text" class="form-control input-lg cambioContacto" id="city" value="<?php echo $plantilla["city"];?>">
					</div>

				</div>

				<div class="col-xs-2">

				</div>

				<div class="col-xs-5">

				<label>País</label>

					<div class="input-group">

						<input type="text" class="form-control input-lg cambioContacto" id="country" value="<?php echo $plantilla["country"];?>">
					</div>

				</div>

				</div>

				 		<div class="form-group">
      
						<label for="comment">Mapa:</label>

						<textarea class="form-control cambioContacto"  id="map">

						<?php echo $plantilla["map"]; ?>

						</textarea>

				</div>
				

 	</div>

 	<div class="box-footer">
      
    	<button type="button" id="guardarContacto" class="btn btn-primary pull-right">Guardar</button>
    
	</div>

</div>

