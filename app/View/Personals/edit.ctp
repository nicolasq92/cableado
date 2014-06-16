<div class="personals form">
<?php echo $this->Form->create('Personal'); ?>
	<fieldset>
		<legend><?php echo __('Edit Personal'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('cedula');
		echo $this->Form->input('telefono');
		echo $this->Form->input('edificio_id');
		echo $this->Form->input('edificio_campus_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Personal.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Personal.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Edificios'), array('controller' => 'edificios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edificio'), array('controller' => 'edificios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
	</ul>
</div>
