<div class="vlans form">
<?php echo $this->Form->create('Vlan'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vlan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vlan.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Vlan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vlans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Interfazs'), array('controller' => 'interfazs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interfaz'), array('controller' => 'interfazs', 'action' => 'add')); ?> </li>
	</ul>
</div>
