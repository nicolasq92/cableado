<div class="registroHorizontals view">
<h2><?php echo __('Registro Horizontal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Cable'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['tipo_cable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area Trabajo'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['area_trabajo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Conector'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['tipo_conector']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitud Cable'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['longitud_cable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Hardware'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['tipo_hardware']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['observacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Creacion'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['fecha_creacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registroHorizontal['Patchpanel']['nombre'], array('controller' => 'patchpanels', 'action' => 'view', $registroHorizontal['Patchpanel']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel Rack Id'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['patchpanel_rack_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patchpanel Rack Tgb Id'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['patchpanel_rack_tgb_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estacion Id'); ?></dt>
		<dd>
			<?php echo h($registroHorizontal['RegistroHorizontal']['estacion_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Registro Horizontal'), array('action' => 'edit', $registroHorizontal['RegistroHorizontal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Registro Horizontal'), array('action' => 'delete', $registroHorizontal['RegistroHorizontal']['id']), array(), __('Are you sure you want to delete # %s?', $registroHorizontal['RegistroHorizontal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Registro Horizontals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registro Horizontal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patchpanels'), array('controller' => 'patchpanels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patchpanel'), array('controller' => 'patchpanels', 'action' => 'add')); ?> </li>
	</ul>
</div>
