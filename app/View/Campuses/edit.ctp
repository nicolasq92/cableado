<div class="campuses form">
<?php echo $this->Form->create('Campus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Campus'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Campus.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Campus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Edificios'), array('controller' => 'edificios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edificio'), array('controller' => 'edificios', 'action' => 'add')); ?> </li>
	</ul>
</div>
