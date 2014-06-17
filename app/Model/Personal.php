<?php
App::uses('AppModel', 'Model');
/**
 * Personal Model
 *
 * @property Edificio $Edificio
 * @property Sala $Sala
 */
class Personal extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'personal';

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
			'foreignKey' => 'personal_id',
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
