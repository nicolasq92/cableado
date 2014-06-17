<div class="tmgbs form">
<?php echo $this->Form->create('Tmgb'); ?>
	<fieldset>
		<legend><?php echo __('Add Tmgb'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('localizacion');
		echo $this->Form->input('localizacion_union_tierra');
		echo $this->Form->input('localizacion_pruebas_realizadas');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tmgbs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tgbs'), array('controller' => 'tgbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tgb'), array('controller' => 'tgbs', 'action' => 'add')); ?> </li>
	</ul>
</div>
