<div class="personals view">
<h2><?php echo __('Personal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edificio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personal['Edificio']['nombre'], array('controller' => 'edificios', 'action' => 'view', $personal['Edificio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edificio Campus Id'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['edificio_campus_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal'), array('action' => 'edit', $personal['Personal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personal'), array('action' => 'delete', $personal['Personal']['id']), array(), __('Are you sure you want to delete # %s?', $personal['Personal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Edificios'), array('controller' => 'edificios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edificio'), array('controller' => 'edificios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Salas'); ?></h3>
	<?php if (!empty($personal['Sala'])): ?>
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
	<?php foreach ($personal['Sala'] as $sala): ?>
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
