<div class="tmgbs view">
<h2><?php echo __('Tmgb'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tmgb['Tmgb']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tmgb['Tmgb']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localizacion'); ?></dt>
		<dd>
			<?php echo h($tmgb['Tmgb']['localizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localizacion Union Tierra'); ?></dt>
		<dd>
			<?php echo h($tmgb['Tmgb']['localizacion_union_tierra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localizacion Pruebas Realizadas'); ?></dt>
		<dd>
			<?php echo h($tmgb['Tmgb']['localizacion_pruebas_realizadas']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tmgb'), array('action' => 'edit', $tmgb['Tmgb']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tmgb'), array('action' => 'delete', $tmgb['Tmgb']['id']), array(), __('Are you sure you want to delete # %s?', $tmgb['Tmgb']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tmgbs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tmgb'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tgbs'), array('controller' => 'tgbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tgb'), array('controller' => 'tgbs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tgbs'); ?></h3>
	<?php if (!empty($tmgb['Tgb'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Localizacion'); ?></th>
		<th><?php echo __('Localizacion Resultados Pruebas'); ?></th>
		<th><?php echo __('Tmgb Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tmgb['Tgb'] as $tgb): ?>
		<tr>
			<td><?php echo $tgb['id']; ?></td>
			<td><?php echo $tgb['nombre']; ?></td>
			<td><?php echo $tgb['localizacion']; ?></td>
			<td><?php echo $tgb['localizacion_resultados_pruebas']; ?></td>
			<td><?php echo $tgb['tmgb_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tgbs', 'action' => 'view', $tgb['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tgbs', 'action' => 'edit', $tgb['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tgbs', 'action' => 'delete', $tgb['id']), array(), __('Are you sure you want to delete # %s?', $tgb['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tgb'), array('controller' => 'tgbs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
