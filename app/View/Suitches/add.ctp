<div class="suitches form">
<?php echo $this->Form->create('Suitch'); ?>
	<fieldset>
		<legend><?php echo __('Add Suitch'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('modelo');
		echo $this->Form->input('cantidad_puertos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Suitches'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Interfazs'), array('controller' => 'interfazs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interfaz'), array('controller' => 'interfazs', 'action' => 'add')); ?> </li>
	</ul>
</div>
