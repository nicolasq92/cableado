<div class="interfazs form">
<?php echo $this->Form->create('Interfaz'); ?>
	<fieldset>
		<legend><?php echo __('Add Interfaz'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('patchpanel_id');
		echo $this->Form->input('patchpanel_rack_id');
		echo $this->Form->input('patchpanel_rack_tgb_id');
		echo $this->Form->input('vlan_id');
		echo $this->Form->input('suitch_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Interfazs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('controller' => 'patchpanels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vlans'), array('controller' => 'vlans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vlan'), array('controller' => 'vlans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suitches'), array('controller' => 'suitches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suitch'), array('controller' => 'suitches', 'action' => 'add')); ?> </li>
	</ul>
</div>
