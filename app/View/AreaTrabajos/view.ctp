<div class="areaTrabajos view">
<h2><?php echo __('Area Trabajo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($areaTrabajo['AreaTrabajo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($areaTrabajo['AreaTrabajo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion Ip'); ?></dt>
		<dd>
			<?php echo h($areaTrabajo['AreaTrabajo']['direccion_ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sala'); ?></dt>
		<dd>
			<?php echo $this->Html->link($areaTrabajo['Sala']['nombre'], array('controller' => 'salas', 'action' => 'view', $areaTrabajo['Sala']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sala Piso Id'); ?></dt>
		<dd>
			<?php echo h($areaTrabajo['AreaTrabajo']['sala_piso_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sala Piso Edificio Id'); ?></dt>
		<dd>
			<?php echo h($areaTrabajo['AreaTrabajo']['sala_piso_edificio_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sala Piso Edificio Campus Id'); ?></dt>
		<dd>
			<?php echo h($areaTrabajo['AreaTrabajo']['sala_piso_edificio_campus_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Area Trabajo'), array('action' => 'edit', $areaTrabajo['AreaTrabajo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Area Trabajo'), array('action' => 'delete', $areaTrabajo['AreaTrabajo']['id']), array(), __('Are you sure you want to delete # %s?', $areaTrabajo['AreaTrabajo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Area Trabajos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Trabajo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Salas'), array('controller' => 'salas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sala'), array('controller' => 'salas', 'action' => 'add')); ?> </li>
	</ul>
</div>
