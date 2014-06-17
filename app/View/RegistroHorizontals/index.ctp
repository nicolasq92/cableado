<div class="registroHorizontals index">
	<h2><?php echo __('Registro Horizontals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_cable'); ?></th>
			<th><?php echo $this->Paginator->sort('area_trabajo'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_conector'); ?></th>
			<th><?php echo $this->Paginator->sort('longitud_cable'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_hardware'); ?></th>
			<th><?php echo $this->Paginator->sort('observacion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_rack_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patchpanel_rack_tgb_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estacion_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($registroHorizontals as $registroHorizontal): ?>
	<tr>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['id']); ?>&nbsp;</td>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['tipo_cable']); ?>&nbsp;</td>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['area_trabajo']); ?>&nbsp;</td>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['tipo_conector']); ?>&nbsp;</td>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['longitud_cable']); ?>&nbsp;</td>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['tipo_hardware']); ?>&nbsp;</td>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['observacion']); ?>&nbsp;</td>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['fecha_creacion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($registroHorizontal['Patchpanel']['nombre'], array('controller' => 'patchpanels', 'action' => 'view', $registroHorizontal['Patchpanel']['id'])); ?>
		</td>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['patchpanel_rack_id']); ?>&nbsp;</td>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['patchpanel_rack_tgb_id']); ?>&nbsp;</td>
		<td><?php echo h($registroHorizontal['RegistroHorizontal']['estacion_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $registroHorizontal['RegistroHorizontal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $registroHorizontal['RegistroHorizontal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $registroHorizontal['RegistroHorizontal']['id']), array(), __('Are you sure you want to delete # %s?', $registroHorizontal['RegistroHorizontal']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Registro Horizontal'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('controller' => 'patchpanels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
	</ul>
</div>
