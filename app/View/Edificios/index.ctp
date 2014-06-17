<div class="edificios index">
	<h2><?php echo __('Edificios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_entrada'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_salida'); ?></th>
			<th><?php echo $this->Paginator->sort('campus_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($edificios as $edificio): ?>
	<tr>
		<td><?php echo h($edificio['Edificio']['id']); ?>&nbsp;</td>
		<td><?php echo h($edificio['Edificio']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($edificio['Edificio']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($edificio['Edificio']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($edificio['Edificio']['hora_entrada']); ?>&nbsp;</td>
		<td><?php echo h($edificio['Edificio']['hora_salida']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($edificio['Campus']['nombre'], array('controller' => 'campuses', 'action' => 'view', $edificio['Campus']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $edificio['Edificio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $edificio['Edificio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $edificio['Edificio']['id']), array(), __('Are you sure you want to delete # %s?', $edificio['Edificio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Edificio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('controller' => 'campuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('controller' => 'campuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pisos'), array('controller' => 'pisos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piso'), array('controller' => 'pisos', 'action' => 'add')); ?> </li>
	</ul>
</div>
