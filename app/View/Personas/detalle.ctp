<!--
<pre>
<?php print_r($persona); ?>
</pre>
-->
<div class="container">
	<h2> Detalle de las mascotas de: <b><?php echo $persona['Persona']['name'].' '.$persona['Persona']['last_name']; ?></b></h2>
	<div class="row">
		<div class="col-xs-6 col-md-4">Correo: <b><?php echo $persona['Persona']['email']; ?></b></div>
		<div class="col-xs-6 col-md-4">Sexo: <b><?php echo $persona['Persona']['sex']; ?></b></div>
		<div class="col-xs-6 col-md-4">Fecha creacion: <b><?php echo $persona['Persona']['created']; ?></b></div>
	</div><br>
	<div class="row">
	<?php foreach ($persona['Mascota'] as $mascota): ?>
	 	<div class="col-xs-6 col-md-3">
		    <div class="thumbnail">
		       <?php echo $this->Html->image('../files/mascota/image/'.$mascota['image_dir'].'/'.$mascota['image']); ?>
		      <div class="caption">
		        <h3><?php echo $mascota['name']; ?></h3>
		        <p><?php echo $mascota['description']; ?></p>
		      </div>
		    </div>
	  	</div>
	<?php endforeach; ?>
	<?php if(empty($persona['Mascota'])){ ?>
		<div class="alert alert-danger text-center" role="alert">
			<span class="sr-only">Error:</span>
		 	,<b>El usuario indicado no tiene mascotas asociadas !!!</b>
		</div>
	<?php } ?>
	</div>
</div>