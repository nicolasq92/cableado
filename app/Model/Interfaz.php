<?php
App::uses('AppModel', 'Model');
/**
 * Interfaz Model
 *
 * @property Patchpanel $Patchpanel
 * @property Vlan $Vlan
 * @property Suitch $Suitch
 */
class Interfaz extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'interfaz';

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
		),
		'Vlan' => array(
			'className' => 'Vlan',
			'foreignKey' => 'vlan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Suitch' => array(
			'className' => 'Suitch',
			'foreignKey' => 'suitch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
