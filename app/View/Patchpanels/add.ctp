<div class="patchpanels form">
<?php echo $this->Form->create('Patchpanel'); ?>
	<fieldset>
		<legend><?php echo __('Add Patchpanel'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('modelo');
		echo $this->Form->input('numero_puertos');
		echo $this->Form->input('tipo_cable');
		echo $this->Form->input('rack_id');
		echo $this->Form->input('rack_tgb_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Patchpanels'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Racks'), array('controller' => 'racks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rack'), array('controller' => 'racks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interfazs'), array('controller' => 'interfazs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interfaz'), array('controller' => 'interfazs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registro Horizontals'), array('controller' => 'registro_horizontals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro Horizontal'), array('controller' => 'registro_horizontals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registro Verticals'), array('controller' => 'registro_verticals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro Vertical'), array('controller' => 'registro_verticals', 'action' => 'add')); ?> </li>
	</ul>
</div>
