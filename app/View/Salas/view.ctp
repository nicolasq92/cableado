<div class="salas view">
<h2><?php echo __('Sala'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Acceso'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['hora_acceso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Piso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sala['Piso']['nombre'], array('controller' => 'pisos', 'action' => 'view', $sala['Piso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Piso Edificio Id'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['piso_edificio_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Piso Edificio Campus Id'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['piso_edificio_campus_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personal'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sala['Personal']['nombre'], array('controller' => 'personals', 'action' => 'view', $sala['Personal']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personal Edificio Id'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['personal_edificio_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personal Edificio Campus Id'); ?></dt>
		<dd>
			<?php echo h($sala['Sala']['personal_edificio_campus_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sala'), array('action' => 'edit', $sala['Sala']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sala'), array('action' => 'delete', $sala['Sala']['id']), array(), __('Are you sure you want to delete # %s?', $sala['Sala']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Area Trabajos'); ?></h3>
	<?php if (!empty($sala['AreaTrabajo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Direccion Ip'); ?></th>
		<th><?php echo __('Sala Id'); ?></th>
		<th><?php echo __('Sala Piso Id'); ?></th>
		<th><?php echo __('Sala Piso Edificio Id'); ?></th>
		<th><?php echo __('Sala Piso Edificio Campus Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sala['AreaTrabajo'] as $areaTrabajo): ?>
		<tr>
			<td><?php echo $areaTrabajo['id']; ?></td>
			<td><?php echo $areaTrabajo['nombre']; ?></td>
			<td><?php echo $areaTrabajo['direccion_ip']; ?></td>
			<td><?php echo $areaTrabajo['sala_id']; ?></td>
			<td><?php echo $areaTrabajo['sala_piso_id']; ?></td>
			<td><?php echo $areaTrabajo['sala_piso_edificio_id']; ?></td>
			<td><?php echo $areaTrabajo['sala_piso_edificio_campus_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'area_trabajos', 'action' => 'view', $areaTrabajo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'area_trabajos', 'action' => 'edit', $areaTrabajo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'area_trabajos', 'action' => 'delete', $areaTrabajo['id']), array(), __('Are you sure you want to delete # %s?', $areaTrabajo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Area Trabajo'), array('controller' => 'area_trabajos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Racks'); ?></h3>
	<?php if (!empty($sala['Rack'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Tgb Id'); ?></th>
		<th><?php echo __('Sala Id'); ?></th>
		<th><?php echo __('Sala Piso Id'); ?></th>
		<th><?php echo __('Sala Piso Edificio Id'); ?></th>
		<th><?php echo __('Sala Piso Edificio Campus Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sala['Rack'] as $rack): ?>
		<tr>
			<td><?php echo $rack['id']; ?></td>
			<td><?php echo $rack['nombre']; ?></td>
			<td><?php echo $rack['descripcion']; ?></td>
			<td><?php echo $rack['tgb_id']; ?></td>
			<td><?php echo $rack['sala_id']; ?></td>
			<td><?php echo $rack['sala_piso_id']; ?></td>
			<td><?php echo $rack['sala_piso_edificio_id']; ?></td>
			<td><?php echo $rack['sala_piso_edificio_campus_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'racks', 'action' => 'view', $rack['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'racks', 'action' => 'edit', $rack['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'racks', 'action' => 'delete', $rack['id']), array(), __('Are you sure you want to delete # %s?', $rack['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rack'), array('controller' => 'racks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
