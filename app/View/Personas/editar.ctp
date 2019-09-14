<div class="container">
<?php echo $this->Form->create('Persona'); ?>
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<h2>Editar Usuario [Dueño de mascota] </h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
		<?php
			echo $this->Form->create('Persona');
			echo $this->Form->input('name', array('class' => 'form-control', 'label' => 'Nombre'));
			echo $this->Form->input('last_name', array('class' => 'form-control', 'label' => 'Apellido'));
			echo $this->Form->input('email', array('class' => 'form-control', 'label' => 'Correo electronico'));
			//echo $this->Form->input('sex', array('class' => 'form-control', 'label' => 'Sexo'));
			echo $this->Form->input('sex', array('options' => array('F'=>'Femenino', 'M'=>'Masculino'),'class' => 'form-control', 'label' => 'Sexo','placeholder'=>'M-F')); ?>
			<br>
			<div align="right">
			<?php echo $this->Form->end(array('label' => 'Editar usuario', 'class' =>'btn btn-success')); ?>
			</div>
		</div>		
	</div>		
</div>		