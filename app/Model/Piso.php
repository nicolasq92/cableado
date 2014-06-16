<?php
App::uses('AppModel', 'Model');
/**
 * Piso Model
 *
 * @property Edificio $Edificio
 * @property EdificioCampus $EdificioCampus
 * @property Sala $Sala
 */
class Piso extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'piso';

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
		'Edificio' => array(
			'className' => 'Edificio',
			'foreignKey' => 'edificio_id',
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
		'Sala' => array(
			'className' => 'Sala',
			'foreignKey' => 'piso_id',
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
