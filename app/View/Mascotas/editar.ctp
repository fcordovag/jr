<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<h2>Nueva Mascota </h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
		<?php
			echo $this->Form->create('Mascota',array('type'=>'file','novalidate'=>'novalidate'));
			echo $this->Form->input('name', array('class' => 'form-control', 'label' => 'Nombre', 'placeholder'=>'Nombre de la mascota'));
			echo $this->Form->input('description', array('class' => 'form-control', 'label' => 'Descripcion','placeholder'=>'Descripcion de la mascota'));
			
			echo $this->Form->input('image', array('type' => 'file', 'label' => 'Imagen', 'id' => 'image', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
			echo $this->Form->input('image_dir', array('type' => 'hidden'));

			//echo $this->Form->input('image', array('class' => 'form-control', 'label' => 'Imagen', 'placeholder'=>'url de la imagen'));
			//var_dump($tipomascotas);
			//var_dump($personas);
			echo $this->Form->input('persona_id', array('class' => 'form-control', 'label' => 'Dueño', 'placeholder'=>'Id de la personas')); 
			//echo $this->Form->input('tipo_mascota_id', array('class' => 'form-control', 'label' => 'Tipo mascota', 'placeholder'=>'Tipo de la mascota')); 
			//echo $this->Form->input('tipomascotas', array('class' => 'form-control', 'label' => 'Tipo mascota', 'placeholder'=>'Tipo de la mascota'));
			echo $this->Form->input('tipo_mascota_id', array('options' => $tipomascotas,'class' => 'form-control', 'label' => 'Tipo mascota', 'placeholder'=>'Tipo de la mascota'));
			?>
			<br>
			<div align="right">
			<?php echo $this->Form->end(array('label' => 'Crear mascota', 'class' =>'btn btn-success')); ?>
			</div>
		</div>		
	</div>		
</div>		