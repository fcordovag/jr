<div class="container">
	<div class="page-header">
		<h2>Listado de Usuarios</h2>
	</div>
	<div class="col-md-12">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Fecha creacion</th>
					<th>Sexo</th>
					<th><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($personas as $persona) { ?>
					<tr>
						<td><?php echo $persona['Persona']['id']; ?></td>
						<td><?php echo $persona['Persona']['name']; ?></td>
						<td><?php echo $persona['Persona']['last_name']; ?></td>
						<td><?php echo $persona['Persona']['email']; ?></td>
						<td><?php echo $persona['Persona']['created']; ?></td>
						<td><?php echo $persona['Persona']['sex']; ?></td>
						<td class="actions"><?php echo $this->Html->link('Mascotas', array('controller' => 'personas','action' => 'detalle',$persona['Persona']['id']), array('class' => 'btn btn-sm btn-warning')	); ?>
						<?php echo $this->Html->link('Editar', array('controller' => 'personas','action' => 'editar',$persona['Persona']['id']), array('class' => 'btn btn-sm btn-info')); ?>
						<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $persona['Persona']['id']), array('class' => 'btn btn-sm btn-danger'), __('Seguro deseas eliminar el usuario # %s?', $persona['Persona']['id'])); ?>
						</td>
					</tr>
				<?php } ?>
				<?php if(empty($persona['Persona'])){ ?>
					<tr>
						<td colspan="7">
							<div class="alert alert-danger text-center" role="alert">
								<span class="sr-only">Error:</span>
							 	<b>Aun no existen usuarios creadas... vaya a <?php echo $this->Html->link('Nuevo usuario', array('controller' => 'personas','action' => 'nuevo'),array('class' => 'btn btn-sm btn-info')); ?> para crear un nuevo tipo.</b>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</div>
