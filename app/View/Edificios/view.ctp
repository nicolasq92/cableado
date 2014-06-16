<div class="edificios view">
<h2><?php echo __('Edificio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($edificio['Edificio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($edificio['Edificio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($edificio['Edificio']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($edificio['Edificio']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Entrada'); ?></dt>
		<dd>
			<?php echo h($edificio['Edificio']['hora_entrada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Salida'); ?></dt>
		<dd>
			<?php echo h($edificio['Edificio']['hora_salida']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($edificio['Campus']['nombre'], array('controller' => 'campuses', 'action' => 'view', $edificio['Campus']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Edificio'), array('action' => 'edit', $edificio['Edificio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Edificio'), array('action' => 'delete', $edificio['Edificio']['id']), array(), __('Are you sure you want to delete # %s?', $edificio['Edificio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Edificios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edificio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('controller' => 'campuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('controller' => 'campuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pisos'), array('controller' => 'pisos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Piso'), array('controller' => 'pisos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Personals'); ?></h3>
	<?php if (!empty($edificio['Personal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Cedula'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Edificio Id'); ?></th>
		<th><?php echo __('Edificio Campus Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($edificio['Personal'] as $personal): ?>
		<tr>
			<td><?php echo $personal['id']; ?></td>
			<td><?php echo $personal['nombre']; ?></td>
			<td><?php echo $personal['cedula']; ?></td>
			<td><?php echo $personal['telefono']; ?></td>
			<td><?php echo $personal['edificio_id']; ?></td>
			<td><?php echo $personal['edificio_campus_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personals', 'action' => 'view', $personal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personals', 'action' => 'edit', $personal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personals', 'action' => 'delete', $personal['id']), array(), __('Are you sure you want to delete # %s?', $personal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pisos'); ?></h3>
	<?php if (!empty($edificio['Piso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Edificio Id'); ?></th>
		<th><?php echo __('Edificio Campus Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($edificio['Piso'] as $piso): ?>
		<tr>
			<td><?php echo $piso['id']; ?></td>
			<td><?php echo $piso['nombre']; ?></td>
			<td><?php echo $piso['descripcion']; ?></td>
			<td><?php echo $piso['edificio_id']; ?></td>
			<td><?php echo $piso['edificio_campus_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pisos', 'action' => 'view', $piso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pisos', 'action' => 'edit', $piso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pisos', 'action' => 'delete', $piso['id']), array(), __('Are you sure you want to delete # %s?', $piso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Piso'), array('controller' => 'pisos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
