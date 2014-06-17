<div class="pisos index">
	<h2><?php echo __('Pisos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('edificio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('edificio_campus_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pisos as $piso): ?>
	<tr>
		<td><?php echo h($piso['Piso']['id']); ?>&nbsp;</td>
		<td><?php echo h($piso['Piso']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($piso['Piso']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($piso['Edificio']['nombre'], array('controller' => 'edificios', 'action' => 'view', $piso['Edificio']['id'])); ?>
		</td>
		<td><?php echo h($piso['Piso']['edificio_campus_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $piso['Piso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $piso['Piso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $piso['Piso']['id']), array(), __('Are you sure you want to delete # %s?', $piso['Piso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Piso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Edificios'), array('controller' => 'edificios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edificio'), array('controller' => 'edificios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
	</ul>
</div>
