<!-- <pre><?php print_r($tipomascotas); ?></pre> -->
<div class="container">
<h1>Tipos clasificacion de mascotas</h1>	
	<?php foreach ($tipomascotas as $tpmascota): ?>
	 	<div class="col-xs-6 col-md-3">
		    <div class="thumbnail">
		    <?php echo $this->Html->image('../files/tipo_mascota/image/'.$tpmascota['TipoMascota']['image_dir'].'/'.$tpmascota['TipoMascota']['image']); ?>
		      
		      <div class="caption">
		        <h3><?php echo $tpmascota['TipoMascota']['name']; ?></h3>
		        <p><?php echo $tpmascota['TipoMascota']['description']; ?></p>
		        <p align="right">
		        	<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $tpmascota['TipoMascota']['id']), array('class' => 'btn btn-sm btn-danger'), __('Seguro deseas eliminar la mascota # %s?', $tpmascota['TipoMascota']['id'])); ?>
		        	<?php echo $this->Html->link('Editar', array('controller' => 'tipomascotas','action' => 'editar',$tpmascota['TipoMascota']['id']), array('class' => 'btn btn-sm btn-warning')); ?>
		        </p>  
		      </div>
		    </div>
	  	</div>
	<?php endforeach; ?>
	<?php if(empty($tipomascotas)){ ?>
		<tr>
			<td colspan="7">
				<div class="alert alert-danger text-center" role="alert">
					<span class="sr-only">Error:</span>
				 	<b>Aun no existen tipos de mascotas creadas... vaya a <?php echo $this->Html->link('Nuevo tipo Mascotas', array('controller' => 'tipomascotas','action' => 'nuevo'),array('class' => 'btn btn-sm btn-info')); ?> para crear un nuevo tipo.</b>
				</div>
			</td>
		</tr>
	<?php } ?>
</div>