<div class="patchpanels view">
<h2><?php echo __('Patchpanel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($patchpanel['Patchpanel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($patchpanel['Patchpanel']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo h($patchpanel['Patchpanel']['modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Puertos'); ?></dt>
		<dd>
			<?php echo h($patchpanel['Patchpanel']['numero_puertos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Cable'); ?></dt>
		<dd>
			<?php echo h($patchpanel['Patchpanel']['tipo_cable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rack'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patchpanel['Rack']['nombre'], array('controller' => 'racks', 'action' => 'view', $patchpanel['Rack']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rack Tgb Id'); ?></dt>
		<dd>
			<?php echo h($patchpanel['Patchpanel']['rack_tgb_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patchpanel'), array('action' => 'edit', $patchpanel['Patchpanel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Patchpanel'), array('action' => 'delete', $patchpanel['Patchpanel']['id']), array(), __('Are you sure you want to delete # %s?', $patchpanel['Patchpanel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Interfazs'); ?></h3>
	<?php if (!empty($patchpanel['Interfaz'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Patchpanel Id'); ?></th>
		<th><?php echo __('Patchpanel Rack Id'); ?></th>
		<th><?php echo __('Patchpanel Rack Tgb Id'); ?></th>
		<th><?php echo __('Vlan Id'); ?></th>
		<th><?php echo __('Switch Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($patchpanel['Interfaz'] as $interfaz): ?>
		<tr>
			<td><?php echo $interfaz['id']; ?></td>
			<td><?php echo $interfaz['nombre']; ?></td>
			<td><?php echo $interfaz['patchpanel_id']; ?></td>
			<td><?php echo $interfaz['patchpanel_rack_id']; ?></td>
			<td><?php echo $interfaz['patchpanel_rack_tgb_id']; ?></td>
			<td><?php echo $interfaz['vlan_id']; ?></td>
			<td><?php echo $interfaz['switch_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interfazs', 'action' => 'view', $interfaz['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interfazs', 'action' => 'edit', $interfaz['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interfazs', 'action' => 'delete', $interfaz['id']), array(), __('Are you sure you want to delete # %s?', $interfaz['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Interfaz'), array('controller' => 'interfazs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Registro Horizontals'); ?></h3>
	<?php if (!empty($patchpanel['RegistroHorizontal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Tipo Cable'); ?></th>
		<th><?php echo __('Area Trabajo'); ?></th>
		<th><?php echo __('Tipo Conector'); ?></th>
		<th><?php echo __('Longitud Cable'); ?></th>
		<th><?php echo __('Tipo Hardware'); ?></th>
		<th><?php echo __('Observacion'); ?></th>
		<th><?php echo __('Fecha Creacion'); ?></th>
		<th><?php echo __('Patchpanel Id'); ?></th>
		<th><?php echo __('Patchpanel Rack Id'); ?></th>
		<th><?php echo __('Patchpanel Rack Tgb Id'); ?></th>
		<th><?php echo __('Estacion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($patchpanel['RegistroHorizontal'] as $registroHorizontal): ?>
		<tr>
			<td><?php echo $registroHorizontal['id']; ?></td>
			<td><?php echo $registroHorizontal['nombre']; ?></td>
			<td><?php echo $registroHorizontal['tipo_cable']; ?></td>
			<td><?php echo $registroHorizontal['area_trabajo']; ?></td>
			<td><?php echo $registroHorizontal['tipo_conector']; ?></td>
			<td><?php echo $registroHorizontal['longitud_cable']; ?></td>
			<td><?php echo $registroHorizontal['tipo_hardware']; ?></td>
			<td><?php echo $registroHorizontal['observacion']; ?></td>
			<td><?php echo $registroHorizontal['fecha_creacion']; ?></td>
			<td><?php echo $registroHorizontal['patchpanel_id']; ?></td>
			<td><?php echo $registroHorizontal['patchpanel_rack_id']; ?></td>
			<td><?php echo $registroHorizontal['patchpanel_rack_tgb_id']; ?></td>
			<td><?php echo $registroHorizontal['estacion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'registro_horizontals', 'action' => 'view', $registroHorizontal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'registro_horizontals', 'action' => 'edit', $registroHorizontal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'registro_horizontals', 'action' => 'delete', $registroHorizontal['id']), array(), __('Are you sure you want to delete # %s?', $registroHorizontal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Registro Horizontal'), array('controller' => 'registro_horizontals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Registro Verticals'); ?></h3>
	<?php if (!empty($patchpanel['RegistroVertical'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Tipo Cable'); ?></th>
		<th><?php echo __('Tipo Conexion A'); ?></th>
		<th><?php echo __('Tipo Conexion B'); ?></th>
		<th><?php echo __('Patchpanel Id'); ?></th>
		<th><?php echo __('Patchpanel Rack Id'); ?></th>
		<th><?php echo __('Patchpanel Rack Tgb Id'); ?></th>
		<th><?php echo __('Patchpanel Id1'); ?></th>
		<th><?php echo __('Patchpanel Rack Id1'); ?></th>
		<th><?php echo __('Patchpanel Rack Tgb Id1'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($patchpanel['RegistroVertical'] as $registroVertical): ?>
		<tr>
			<td><?php echo $registroVertical['id']; ?></td>
			<td><?php echo $registroVertical['nombre']; ?></td>
			<td><?php echo $registroVertical['tipo_cable']; ?></td>
			<td><?php echo $registroVertical['tipo_conexion_a']; ?></td>
			<td><?php echo $registroVertical['tipo_conexion_b']; ?></td>
			<td><?php echo $registroVertical['patchpanel_id']; ?></td>
			<td><?php echo $registroVertical['patchpanel_rack_id']; ?></td>
			<td><?php echo $registroVertical['patchpanel_rack_tgb_id']; ?></td>
			<td><?php echo $registroVertical['patchpanel_id1']; ?></td>
			<td><?php echo $registroVertical['patchpanel_rack_id1']; ?></td>
			<td><?php echo $registroVertical['patchpanel_rack_tgb_id1']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'registro_verticals', 'action' => 'view', $registroVertical['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'registro_verticals', 'action' => 'edit', $registroVertical['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'registro_verticals', 'action' => 'delete', $registroVertical['id']), array(), __('Are you sure you want to delete # %s?', $registroVertical['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Registro Vertical'), array('controller' => 'registro_verticals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
