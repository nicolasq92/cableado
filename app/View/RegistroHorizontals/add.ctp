<div class="registroHorizontals form">
<?php echo $this->Form->create('RegistroHorizontal'); ?>
	<fieldset>
		<legend><?php echo __('Add Registro Horizontal'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('tipo_cable');
		echo $this->Form->input('area_trabajo');
		echo $this->Form->input('tipo_conector');
		echo $this->Form->input('longitud_cable');
		echo $this->Form->input('tipo_hardware');
		echo $this->Form->input('observacion');
		echo $this->Form->input('fecha_creacion');
		echo $this->Form->input('patchpanel_id');
		echo $this->Form->input('patchpanel_rack_id');
		echo $this->Form->input('patchpanel_rack_tgb_id');
		echo $this->Form->input('estacion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Registro Horizontals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('controller' => 'patchpanels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
	</ul>
</div>
