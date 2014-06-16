<div class="patchpanels index">
	<h2><?php echo __('Patchpanels'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('modelo'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_puertos'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_cable'); ?></th>
			<th><?php echo $this->Paginator->sort('rack_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rack_tgb_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($patchpanels as $patchpanel): ?>
	<tr>
		<td><?php echo h($patchpanel['Patchpanel']['id']); ?>&nbsp;</td>
		<td><?php echo h($patchpanel['Patchpanel']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($patchpanel['Patchpanel']['modelo']); ?>&nbsp;</td>
		<td><?php echo h($patchpanel['Patchpanel']['numero_puertos']); ?>&nbsp;</td>
		<td><?php echo h($patchpanel['Patchpanel']['tipo_cable']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patchpanel['Rack']['nombre'], array('controller' => 'racks', 'action' => 'view', $patchpanel['Rack']['id'])); ?>
		</td>
		<td><?php echo h($patchpanel['Patchpanel']['rack_tgb_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $patchpanel['Patchpanel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patchpanel['Patchpanel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $patchpanel['Patchpanel']['id']), array(), __('Are you sure you want to delete # %s?', $patchpanel['Patchpanel']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Racks'), array('controller' => 'racks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rack'), array('controller' => 'racks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interfazs'), array('controller' => 'interfazs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interfaz'), array('controller' => 'interfazs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registro Horizontals'), array('controller' => 'registro_horizontals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro Horizontal'), array('controller' => 'registro_horizontals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registro Verticals'), array('controller' => 'registro_verticals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro Vertical'), array('controller' => 'registro_verticals', 'action' => 'add')); ?> </li>
	</ul>
</div>
