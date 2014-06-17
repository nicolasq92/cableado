<div class="areaTrabajos form">
<?php echo $this->Form->create('AreaTrabajo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Area Trabajo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('direccion_ip');
		echo $this->Form->input('sala_id');
		echo $this->Form->input('sala_piso_id');
		echo $this->Form->input('sala_piso_edificio_id');
		echo $this->Form->input('sala_piso_edificio_campus_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AreaTrabajo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('AreaTrabajo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Area Trabajos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
	</ul>
</div>
