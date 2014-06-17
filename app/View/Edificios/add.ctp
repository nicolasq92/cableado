<div class="edificios form">
<?php echo $this->Form->create('Edificio'); ?>
	<fieldset>
		<legend><?php echo __('Add Edificio'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('direccion');
		echo $this->Form->input('hora_entrada');
		echo $this->Form->input('hora_salida');
		echo $this->Form->input('campus_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Edificios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('controller' => 'campuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('controller' => 'campuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pisos'), array('controller' => 'pisos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piso'), array('controller' => 'pisos', 'action' => 'add')); ?> </li>
	</ul>
</div>
