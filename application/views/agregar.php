	<!-- Navbar -->
	
	<!-- End navbar -->

	<div class="container">
		<div class="row">
			<div class="col-md-8">    
	    	<h3>Agregar enlaces</h3>
				<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>main/guardar" method="POST">
					<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="titulo" name="url" placeholder="Ingresa un título">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">URL</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="url" name="url" placeholder="Ingresa una dirección">
				    </div>
			  	</div>
			  		<div class="form-group">
			    	<label for="inputnombre" class="col-sm-2 control-label">Nombre</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa una Nombre">
				    </div>
			  	</div>
			  	<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar</button>      				
    				</div>
  				</div>
				</form>
			</div>
    </div>
  </div>