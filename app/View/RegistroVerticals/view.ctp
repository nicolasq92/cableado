<div class="registroVerticals view">
<h2><?php echo __('Registro Vertical'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($registroVertical['RegistroVertical']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($registroVertical['RegistroVertical']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Cable'); ?></dt>
		<dd>
			<?php echo h($registroVertical['RegistroVertical']['tipo_cable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Conexion A'); ?></dt>
		<dd>
			<?php echo h($registroVertical['RegistroVertical']['tipo_conexion_a']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Conexion B'); ?></dt>
		<dd>
			<?php echo h($registroVertical['RegistroVertical']['tipo_conexion_b']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registroVertical['Patchpanel']['nombre'], array('controller' => 'patchpanels', 'action' => 'view', $registroVertical['Patchpanel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel Rack Id'); ?></dt>
		<dd>
			<?php echo h($registroVertical['RegistroVertical']['patchpanel_rack_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel Rack Tgb Id'); ?></dt>
		<dd>
			<?php echo h($registroVertical['RegistroVertical']['patchpanel_rack_tgb_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel Id1'); ?></dt>
		<dd>
			<?php echo h($registroVertical['RegistroVertical']['patchpanel_id1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel Rack Id1'); ?></dt>
		<dd>
			<?php echo h($registroVertical['RegistroVertical']['patchpanel_rack_id1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel Rack Tgb Id1'); ?></dt>
		<dd>
			<?php echo h($registroVertical['RegistroVertical']['patchpanel_rack_tgb_id1']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Registro Vertical'), array('action' => 'edit', $registroVertical['RegistroVertical']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Registro Vertical'), array('action' => 'delete', $registroVertical['RegistroVertical']['id']), array(), __('Are you sure you want to delete # %s?', $registroVertical['RegistroVertical']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Registro Verticals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro Vertical'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('controller' => 'patchpanels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
	</ul>
</div>
