<div class="areaTrabajos index">
	<h2><?php echo __('Area Trabajos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_ip'); ?></th>
			<th><?php echo $this->Paginator->sort('sala_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sala_piso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sala_piso_edificio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sala_piso_edificio_campus_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($areaTrabajos as $areaTrabajo): ?>
	<tr>
		<td><?php echo h($areaTrabajo['AreaTrabajo']['id']); ?>&nbsp;</td>
		<td><?php echo h($areaTrabajo['AreaTrabajo']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($areaTrabajo['AreaTrabajo']['direccion_ip']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($areaTrabajo['Sala']['nombre'], array('controller' => 'salas', 'action' => 'view', $areaTrabajo['Sala']['id'])); ?>
		</td>
		<td><?php echo h($areaTrabajo['AreaTrabajo']['sala_piso_id']); ?>&nbsp;</td>
		<td><?php echo h($areaTrabajo['AreaTrabajo']['sala_piso_edificio_id']); ?>&nbsp;</td>
		<td><?php echo h($areaTrabajo['AreaTrabajo']['sala_piso_edificio_campus_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $areaTrabajo['AreaTrabajo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $areaTrabajo['AreaTrabajo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $areaTrabajo['AreaTrabajo']['id']), array(), __('Are you sure you want to delete # %s?', $areaTrabajo['AreaTrabajo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Area Trabajo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
	</ul>
</div>
