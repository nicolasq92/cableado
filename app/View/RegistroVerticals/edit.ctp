<div class="registroVerticals form">
<?php echo $this->Form->create('RegistroVertical'); ?>
	<fieldset>
		<legend><?php echo __('Edit Registro Vertical'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('tipo_cable');
		echo $this->Form->input('tipo_conexion_a');
		echo $this->Form->input('tipo_conexion_b');
		echo $this->Form->input('patchpanel_id');
		echo $this->Form->input('patchpanel_rack_id');
		echo $this->Form->input('patchpanel_rack_tgb_id');
		echo $this->Form->input('patchpanel_id1');
		echo $this->Form->input('patchpanel_rack_id1');
		echo $this->Form->input('patchpanel_rack_tgb_id1');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RegistroVertical.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('RegistroVertical.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Registro Verticals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('controller' => 'patchpanels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
	</ul>
</div>
