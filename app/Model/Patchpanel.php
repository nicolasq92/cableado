<?php
App::uses('AppModel', 'Model');
/**
 * Patchpanel Model
 *
 * @property Rack $Rack
 * @property Interfaz $Interfaz
 * @property RegistroHorizontal $RegistroHorizontal
 * @property RegistroVertical $RegistroVertical
 */
class Patchpanel extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'patchpanel';

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
		'Rack' => array(
			'className' => 'Rack',
			'foreignKey' => 'rack_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Interfaz' => array(
			'className' => 'Interfaz',
			'foreignKey' => 'patchpanel_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'RegistroHorizontal' => array(
			'className' => 'RegistroHorizontal',
			'foreignKey' => 'patchpanel_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'RegistroVertical' => array(
			'className' => 'RegistroVertical',
			'foreignKey' => 'patchpanel_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
