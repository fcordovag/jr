<div class="container">
<?php echo $this->Form->create('TipoMascota'); ?>
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<h2>Editar el tipo de mascotas </h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
		<?php
			echo $this->Form->create('TipoMascota',array('type' => 'file', 'novalidate' => 'novalidate' ));
			echo $this->Form->input('name', array('class' => 'form-control', 'label' => 'Nombre','placeholder'=>'Nombre del tipo'));
			echo $this->Form->input('description', array('class' => 'form-control', 'label' => 'Descripcion','placeholder'=>'Detalle del tipo de animales'));
			//echo $this->Form->input('image', array('class' => 'form-control', 'label' => 'Imagen','placeholder'=>'Imagen referencial del tipo'));

			echo $this->Form->input('image', array('type' => 'file', 'label' => 'Imagen', 'id' => 'image', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true' ));
					echo $this->Form->input('image_dir', array('type' => 'hidden'));
			echo $this->Form->input('image', array('type' => 'file', 'label' => 'Imagen', 'id' => 'image', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
			echo $this->Form->input('image_dir', array('type' => 'hidden'));
			?>
			<br>
			<div align="right">
			<?php echo $this->Form->end(array('label' => 'Actualizar', 'class' =>'btn btn-success')); ?>
			</div>
		</div>		
	</div>		
</div>		
	