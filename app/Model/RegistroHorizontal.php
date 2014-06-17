<?php
App::uses('AppModel', 'Model');
/**
 * RegistroHorizontal Model
 *
 * @property Patchpanel $Patchpanel
 * @property Estacion $Estacion
 */
class RegistroHorizontal extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'registro_horizontal';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Patchpanel' => array(
			'className' => 'Patchpanel',
			'foreignKey' => 'patchpanel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
