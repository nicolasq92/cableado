<div class="salas index">
	<h2><?php echo __('Salas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_acceso'); ?></th>
			<th><?php echo $this->Paginator->sort('piso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('piso_edificio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('piso_edificio_campus_id'); ?></th>
			<th><?php echo $this->Paginator->sort('personal_id'); ?></th>
			<th><?php echo $this->Paginator->sort('personal_edificio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('personal_edificio_campus_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($salas as $sala): ?>
	<tr>
		<td><?php echo h($sala['Sala']['id']); ?>&nbsp;</td>
		<td><?php echo h($sala['Sala']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($sala['Sala']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($sala['Sala']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($sala['Sala']['hora_acceso']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sala['Piso']['nombre'], array('controller' => 'pisos', 'action' => 'view', $sala['Piso']['id'])); ?>
		</td>
		<td><?php echo h($sala['Sala']['piso_edificio_id']); ?>&nbsp;</td>
		<td><?php echo h($sala['Sala']['piso_edificio_campus_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sala['Personal']['nombre'], array('controller' => 'personals', 'action' => 'view', $sala['Personal']['id'])); ?>
		</td>
		<td><?php echo h($sala['Sala']['personal_edificio_id']); ?>&nbsp;</td>
		<td><?php echo h($sala['Sala']['personal_edificio_campus_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sala['Sala']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sala['Sala']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sala['Sala']['id']), array(), __('Are you sure you want to delete # %s?', $sala['Sala']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sala'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pisos'), array('controller' => 'pisos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piso'), array('controller' => 'pisos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Area Trabajos'), array('controller' => 'area_trabajos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Trabajo'), array('controller' => 'area_trabajos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Racks'), array('controller' => 'racks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rack'), array('controller' => 'racks', 'action' => 'add')); ?> </li>
	</ul>
</div>
