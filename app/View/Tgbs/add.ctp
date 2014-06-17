<div class="tgbs form">
<?php echo $this->Form->create('Tgb'); ?>
	<fieldset>
		<legend><?php echo __('Add Tgb'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('localizacion');
		echo $this->Form->input('localizacion_resultados_pruebas');
		echo $this->Form->input('tmgb_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tgbs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tmgbs'), array('controller' => 'tmgbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tmgb'), array('controller' => 'tmgbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Racks'), array('controller' => 'racks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rack'), array('controller' => 'racks', 'action' => 'add')); ?> </li>
	</ul>
</div>
