<div class="campuses form">
<?php echo $this->Form->create('Campus'); ?>
	<fieldset>
		<legend><?php echo __('Add Campus'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('direccion');
		echo $this->Form->input('hora_entrada');
		echo $this->Form->input('hora_salida');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Campuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Edificios'), array('controller' => 'edificios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edificio'), array('controller' => 'edificios', 'action' => 'add')); ?> </li>
	</ul>
</div>
