<?php
App::uses('AppModel', 'Model');
/**
 * Sala Model
 *
 * @property Piso $Piso
 * @property PisoEdificio $PisoEdificio
 * @property PisoEdificioCampus $PisoEdificioCampus
 * @property Personal $Personal
 * @property PersonalEdificio $PersonalEdificio
 * @property PersonalEdificioCampus $PersonalEdificioCampus
 * @property AreaTrabajo $AreaTrabajo
 * @property Rack $Rack
 */
class Sala extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'sala';

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
		'Piso' => array(
			'className' => 'Piso',
			'foreignKey' => 'piso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Personal' => array(
			'className' => 'Personal',
			'foreignKey' => 'personal_id',
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
		'AreaTrabajo' => array(
			'className' => 'AreaTrabajo',
			'foreignKey' => 'sala_id',
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
		'Rack' => array(
			'className' => 'Rack',
			'foreignKey' => 'sala_id',
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
