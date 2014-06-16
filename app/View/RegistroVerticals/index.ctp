<div class="registroVerticals index">
	<h2><?php echo __('Registro Verticals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_cable'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_conexion_a'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_conexion_b'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_rack_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_rack_tgb_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_id1'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_rack_id1'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_rack_tgb_id1'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($registroVerticals as $registroVertical): ?>
	<tr>
		<td><?php echo h($registroVertical['RegistroVertical']['id']); ?>&nbsp;</td>
		<td><?php echo h($registroVertical['RegistroVertical']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($registroVertical['RegistroVertical']['tipo_cable']); ?>&nbsp;</td>
		<td><?php echo h($registroVertical['RegistroVertical']['tipo_conexion_a']); ?>&nbsp;</td>
		<td><?php echo h($registroVertical['RegistroVertical']['tipo_conexion_b']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($registroVertical['Patchpanel']['nombre'], array('controller' => 'patchpanels', 'action' => 'view', $registroVertical['Patchpanel']['id'])); ?>
		</td>
		<td><?php echo h($registroVertical['RegistroVertical']['patchpanel_rack_id']); ?>&nbsp;</td>
		<td><?php echo h($registroVertical['RegistroVertical']['patchpanel_rack_tgb_id']); ?>&nbsp;</td>
		<td><?php echo h($registroVertical['RegistroVertical']['patchpanel_id1']); ?>&nbsp;</td>
		<td><?php echo h($registroVertical['RegistroVertical']['patchpanel_rack_id1']); ?>&nbsp;</td>
		<td><?php echo h($registroVertical['RegistroVertical']['patchpanel_rack_tgb_id1']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $registroVertical['RegistroVertical']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $registroVertical['RegistroVertical']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $registroVertical['RegistroVertical']['id']), array(), __('Are you sure you want to delete # %s?', $registroVertical['RegistroVertical']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Registro Vertical'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('controller' => 'patchpanels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
	</ul>
</div>
