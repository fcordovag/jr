<!-- <pre><?php print_r($mascotas); ?></pre> -->
<div class="container">
	<h2>Todas las mascotas registradas !</h2>
	<div class="row">
	<?php foreach ($mascotas as $mascota): ?>
	 	<div class="col-xs-6 col-md-3">
		    <div class="thumbnail">
		    <?php echo $this->Html->image('../files/mascota/image/'.$mascota['Mascota']['image_dir'].'/'.$mascota['Mascota']['image']); ?>
		      <div class="caption">
		        <h3>Nombre: <?php echo $mascota['Mascota']['name']; ?></h3>
		        <h4>Tipo: <?php echo $mascota['TipoMascota']['name']; ?></h4>
		        <p>Descripcion: <?php echo $mascota['Mascota']['description']; ?></p>
		        <p align="right">
		        	<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $mascota['Mascota']['id']), array('class' => 'btn btn-sm btn-danger'), __('Seguro deseas eliminar la mascota # %s?', $mascota['Mascota']['id'])); ?>
		        	<?php echo $this->Html->link('Editar', array('controller' => 'mascotas','action' => 'editar',$mascota['Mascota']['id']), array('class' => 'btn btn-sm btn-warning')); ?>
		        	<?php echo $this->Html->link('Dueño', array('controller' => 'personas','action' => 'detalle',$mascota['Persona']['id']), array('class' => 'btn btn-sm btn-success')); ?>
		        </p>   
		      </div>
		    </div>
	  	</div>
	  	<?php endforeach; ?>
	</div>
	<?php if(empty($mascotas)){ ?>
		<tr>
			<td colspan="7">
				<div class="alert alert-danger text-center" role="alert">
					<span class="sr-only">Error:</span>
				 	<b>Aun no existen mascotas creadas... vaya a <?php echo $this->Html->link('Nueva Mascotas', array('controller' => 'mascotas','action' => 'nuevo'),array('class' => 'btn btn-sm btn-info')); ?> para crear una mascota</b>
				</div>
			</td>
		</tr>
	<?php } ?>
</div>