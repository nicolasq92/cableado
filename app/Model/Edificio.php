<?php
App::uses('AppModel', 'Model');
/**
 * Edificio Model
 *
 * @property Campus $Campus
 * @property Personal $Personal
 * @property Piso $Piso
 */
class Edificio extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'edificio';

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
		'Campus' => array(
			'className' => 'Campus',
			'foreignKey' => 'campus_id',
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
		'Personal' => array(
			'className' => 'Personal',
			'foreignKey' => 'edificio_id',
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
		'Piso' => array(
			'className' => 'Piso',
			'foreignKey' => 'edificio_id',
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
