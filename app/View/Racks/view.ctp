<div class="racks view">
<h2><?php echo __('Rack'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tgb'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rack['Tgb']['localizacion'], array('controller' => 'tgbs', 'action' => 'view', $rack['Tgb']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sala'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rack['Sala']['nombre'], array('controller' => 'salas', 'action' => 'view', $rack['Sala']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sala Piso Id'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['sala_piso_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sala Piso Edificio Id'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['sala_piso_edificio_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sala Piso Edificio Campus Id'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['sala_piso_edificio_campus_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rack'), array('action' => 'edit', $rack['Rack']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rack'), array('action' => 'delete', $rack['Rack']['id']), array(), __('Are you sure you want to delete # %s?', $rack['Rack']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Racks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rack'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tgbs'), array('controller' => 'tgbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tgb'), array('controller' => 'tgbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('controller' => 'patchpanels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Patchpanels'); ?></h3>
	<?php if (!empty($rack['Patchpanel'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Modelo'); ?></th>
		<th><?php echo __('Numero Puertos'); ?></th>
		<th><?php echo __('Tipo Cable'); ?></th>
		<th><?php echo __('Rack Id'); ?></th>
		<th><?php echo __('Rack Tgb Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rack['Patchpanel'] as $patchpanel): ?>
		<tr>
			<td><?php echo $patchpanel['id']; ?></td>
			<td><?php echo $patchpanel['nombre']; ?></td>
			<td><?php echo $patchpanel['modelo']; ?></td>
			<td><?php echo $patchpanel['numero_puertos']; ?></td>
			<td><?php echo $patchpanel['tipo_cable']; ?></td>
			<td><?php echo $patchpanel['rack_id']; ?></td>
			<td><?php echo $patchpanel['rack_tgb_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'patchpanels', 'action' => 'view', $patchpanel['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'patchpanels', 'action' => 'edit', $patchpanel['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'patchpanels', 'action' => 'delete', $patchpanel['id']), array(), __('Are you sure you want to delete # %s?', $patchpanel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
