<div class="pisos view">
<h2><?php echo __('Piso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($piso['Piso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($piso['Piso']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($piso['Piso']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edificio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($piso['Edificio']['nombre'], array('controller' => 'edificios', 'action' => 'view', $piso['Edificio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edificio Campus Id'); ?></dt>
		<dd>
			<?php echo h($piso['Piso']['edificio_campus_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Piso'), array('action' => 'edit', $piso['Piso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Piso'), array('action' => 'delete', $piso['Piso']['id']), array(), __('Are you sure you want to delete # %s?', $piso['Piso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pisos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Edificios'), array('controller' => 'edificios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edificio'), array('controller' => 'edificios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Salas'); ?></h3>
	<?php if (!empty($piso['Sala'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Hora Acceso'); ?></th>
		<th><?php echo __('Piso Id'); ?></th>
		<th><?php echo __('Piso Edificio Id'); ?></th>
		<th><?php echo __('Piso Edificio Campus Id'); ?></th>
		<th><?php echo __('Personal Id'); ?></th>
		<th><?php echo __('Personal Edificio Id'); ?></th>
		<th><?php echo __('Personal Edificio Campus Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($piso['Sala'] as $sala): ?>
		<tr>
			<td><?php echo $sala['id']; ?></td>
			<td><?php echo $sala['nombre']; ?></td>
			<td><?php echo $sala['tipo']; ?></td>
			<td><?php echo $sala['descripcion']; ?></td>
			<td><?php echo $sala['hora_acceso']; ?></td>
			<td><?php echo $sala['piso_id']; ?></td>
			<td><?php echo $sala['piso_edificio_id']; ?></td>
			<td><?php echo $sala['piso_edificio_campus_id']; ?></td>
			<td><?php echo $sala['personal_id']; ?></td>
			<td><?php echo $sala['personal_edificio_id']; ?></td>
			<td><?php echo $sala['personal_edificio_campus_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'salas', 'action' => 'view', $sala['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'salas', 'action' => 'edit', $sala['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'salas', 'action' => 'delete', $sala['id']), array(), __('Are you sure you want to delete # %s?', $sala['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
