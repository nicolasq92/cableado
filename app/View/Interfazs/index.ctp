<div class="interfazs index">
	<h2><?php echo __('Interfazs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_rack_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_rack_tgb_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vlan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('suitch_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($interfazs as $interfaz): ?>
	<tr>
		<td><?php echo h($interfaz['Interfaz']['id']); ?>&nbsp;</td>
		<td><?php echo h($interfaz['Interfaz']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($interfaz['Patchpanel']['nombre'], array('controller' => 'patchpanels', 'action' => 'view', $interfaz['Patchpanel']['id'])); ?>
		</td>
		<td><?php echo h($interfaz['Interfaz']['patchpanel_rack_id']); ?>&nbsp;</td>
		<td><?php echo h($interfaz['Interfaz']['patchpanel_rack_tgb_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($interfaz['Vlan']['nombre'], array('controller' => 'vlans', 'action' => 'view', $interfaz['Vlan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($interfaz['Suitch']['nombre'], array('controller' => 'suitches', 'action' => 'view', $interfaz['Suitch']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $interfaz['Interfaz']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $interfaz['Interfaz']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $interfaz['Interfaz']['id']), array(), __('Are you sure you want to delete # %s?', $interfaz['Interfaz']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Interfaz'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('controller' => 'patchpanels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vlans'), array('controller' => 'vlans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vlan'), array('controller' => 'vlans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suitches'), array('controller' => 'suitches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suitch'), array('controller' => 'suitches', 'action' => 'add')); ?> </li>
	</ul>
</div>
