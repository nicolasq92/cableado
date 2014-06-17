<div class="racks index">
	<h2><?php echo __('Racks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('tgb_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sala_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sala_piso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sala_piso_edificio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sala_piso_edificio_campus_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($racks as $rack): ?>
	<tr>
		<td><?php echo h($rack['Rack']['id']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rack['Tgb']['localizacion'], array('controller' => 'tgbs', 'action' => 'view', $rack['Tgb']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($rack['Sala']['nombre'], array('controller' => 'salas', 'action' => 'view', $rack['Sala']['id'])); ?>
		</td>
		<td><?php echo h($rack['Rack']['sala_piso_id']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['sala_piso_edificio_id']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['sala_piso_edificio_campus_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rack['Rack']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rack['Rack']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rack['Rack']['id']), array(), __('Are you sure you want to delete # %s?', $rack['Rack']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rack'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tgbs'), array('controller' => 'tgbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tgb'), array('controller' => 'tgbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('controller' => 'patchpanels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
	</ul>
</div>
