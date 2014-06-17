<div class="campuses view">
<h2><?php echo __('Campus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($campus['Campus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($campus['Campus']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($campus['Campus']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Entrada'); ?></dt>
		<dd>
			<?php echo h($campus['Campus']['hora_entrada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Salida'); ?></dt>
		<dd>
			<?php echo h($campus['Campus']['hora_salida']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Campus'), array('action' => 'edit', $campus['Campus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Campus'), array('action' => 'delete', $campus['Campus']['id']), array(), __('Are you sure you want to delete # %s?', $campus['Campus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Edificios'), array('controller' => 'edificios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edificio'), array('controller' => 'edificios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Edificios'); ?></h3>
	<?php if (!empty($campus['Edificio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Hora Entrada'); ?></th>
		<th><?php echo __('Hora Salida'); ?></th>
		<th><?php echo __('Campus Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($campus['Edificio'] as $edificio): ?>
		<tr>
			<td><?php echo $edificio['id']; ?></td>
			<td><?php echo $edificio['nombre']; ?></td>
			<td><?php echo $edificio['descripcion']; ?></td>
			<td><?php echo $edificio['direccion']; ?></td>
			<td><?php echo $edificio['hora_entrada']; ?></td>
			<td><?php echo $edificio['hora_salida']; ?></td>
			<td><?php echo $edificio['campus_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'edificios', 'action' => 'view', $edificio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'edificios', 'action' => 'edit', $edificio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'edificios', 'action' => 'delete', $edificio['id']), array(), __('Are you sure you want to delete # %s?', $edificio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Edificio'), array('controller' => 'edificios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
