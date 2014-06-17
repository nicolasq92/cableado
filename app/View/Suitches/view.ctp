<div class="suitches view">
<h2><?php echo __('Suitch'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($suitch['Suitch']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($suitch['Suitch']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo h($suitch['Suitch']['modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Puertos'); ?></dt>
		<dd>
			<?php echo h($suitch['Suitch']['cantidad_puertos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Suitch'), array('action' => 'edit', $suitch['Suitch']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Suitch'), array('action' => 'delete', $suitch['Suitch']['id']), array(), __('Are you sure you want to delete # %s?', $suitch['Suitch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Suitches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suitch'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interfazs'), array('controller' => 'interfazs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interfaz'), array('controller' => 'interfazs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Interfazs'); ?></h3>
	<?php if (!empty($suitch['Interfaz'])): ?>
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
	<?php foreach ($suitch['Interfaz'] as $interfaz): ?>
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
