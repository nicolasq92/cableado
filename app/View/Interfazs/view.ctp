<div class="interfazs view">
<h2><?php echo __('Interfaz'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($interfaz['Interfaz']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($interfaz['Interfaz']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interfaz['Patchpanel']['nombre'], array('controller' => 'patchpanels', 'action' => 'view', $interfaz['Patchpanel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel Rack Id'); ?></dt>
		<dd>
			<?php echo h($interfaz['Interfaz']['patchpanel_rack_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel Rack Tgb Id'); ?></dt>
		<dd>
			<?php echo h($interfaz['Interfaz']['patchpanel_rack_tgb_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vlan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interfaz['Vlan']['nombre'], array('controller' => 'vlans', 'action' => 'view', $interfaz['Vlan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suitch'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interfaz['Suitch']['nombre'], array('controller' => 'suitches', 'action' => 'view', $interfaz['Suitch']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Interfaz'), array('action' => 'edit', $interfaz['Interfaz']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Interfaz'), array('action' => 'delete', $interfaz['Interfaz']['id']), array(), __('Are you sure you want to delete # %s?', $interfaz['Interfaz']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Interfazs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interfaz'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('controller' => 'patchpanels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vlans'), array('controller' => 'vlans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vlan'), array('controller' => 'vlans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suitches'), array('controller' => 'suitches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suitch'), array('controller' => 'suitches', 'action' => 'add')); ?> </li>
	</ul>
</div>
