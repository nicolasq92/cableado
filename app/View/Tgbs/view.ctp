<div class="tgbs view">
<h2><?php echo __('Tgb'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tgb['Tgb']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tgb['Tgb']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localizacion'); ?></dt>
		<dd>
			<?php echo h($tgb['Tgb']['localizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localizacion Resultados Pruebas'); ?></dt>
		<dd>
			<?php echo h($tgb['Tgb']['localizacion_resultados_pruebas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tmgb'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tgb['Tmgb']['nombre'], array('controller' => 'tmgbs', 'action' => 'view', $tgb['Tmgb']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tgb'), array('action' => 'edit', $tgb['Tgb']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tgb'), array('action' => 'delete', $tgb['Tgb']['id']), array(), __('Are you sure you want to delete # %s?', $tgb['Tgb']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tgbs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tgb'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tmgbs'), array('controller' => 'tmgbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tmgb'), array('controller' => 'tmgbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Racks'), array('controller' => 'racks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rack'), array('controller' => 'racks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Racks'); ?></h3>
	<?php if (!empty($tgb['Rack'])): ?>
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
	<?php foreach ($tgb['Rack'] as $rack): ?>
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
