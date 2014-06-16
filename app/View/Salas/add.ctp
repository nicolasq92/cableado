<div class="salas form">
<?php echo $this->Form->create('Sala'); ?>
	<fieldset>
		<legend><?php echo __('Add Sala'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('tipo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('hora_acceso');
		echo $this->Form->input('piso_id');
		echo $this->Form->input('piso_edificio_id');
		echo $this->Form->input('piso_edificio_campus_id');
		echo $this->Form->input('personal_id');
		echo $this->Form->input('personal_edificio_id');
		echo $this->Form->input('personal_edificio_campus_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Salas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pisos'), array('controller' => 'pisos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piso'), array('controller' => 'pisos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Area Trabajos'), array('controller' => 'area_trabajos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Trabajo'), array('controller' => 'area_trabajos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Racks'), array('controller' => 'racks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rack'), array('controller' => 'racks', 'action' => 'add')); ?> </li>
	</ul>
</div>
