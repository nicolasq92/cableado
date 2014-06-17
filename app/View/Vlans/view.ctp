<div class="vlans view">
<h2><?php echo __('Vlan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vlan['Vlan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($vlan['Vlan']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vlan'), array('action' => 'edit', $vlan['Vlan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vlan'), array('action' => 'delete', $vlan['Vlan']['id']), array(), __('Are you sure you want to delete # %s?', $vlan['Vlan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vlans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vlan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interfazs'), array('controller' => 'interfazs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interfaz'), array('controller' => 'interfazs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Interfazs'); ?></h3>
	<?php if (!empty($vlan['Interfaz'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Patchpanel Id'); ?></th>
		<th><?php echo __('Patchpanel Rack Id'); ?></th>
		<th><?php echo __('Patchpanel Rack Tgb Id'); ?></th>
		<th><?php echo __('Vlan Id'); ?></th>
		<th><?php echo __('Suitch Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($vlan['Interfaz'] as $interfaz): ?>
		<tr>
			<td><?php echo $interfaz['id']; ?></td>
			<td><?php echo $interfaz['nombre']; ?></td>
			<td><?php echo $interfaz['patchpanel_id']; ?></td>
			<td><?php echo $interfaz['patchpanel_rack_id']; ?></td>
			<td><?php echo $interfaz['patchpanel_rack_tgb_id']; ?></td>
			<td><?php echo $interfaz['vlan_id']; ?></td>
			<td><?php echo $interfaz['suitch_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interfazs', 'action' => 'view', $interfaz['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interfazs', 'action' => 'edit', $interfaz['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interfazs', 'action' => 'delete', $interfaz['id']), array(), __('Are you sure you want to delete # %s?', $interfaz['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Interfaz'), array('controller' => 'interfazs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
