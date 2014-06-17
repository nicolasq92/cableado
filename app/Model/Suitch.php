<?php
App::uses('AppModel', 'Model');
/**
 * Suitch Model
 *
 * @property Interfaz $Interfaz
 */
class Suitch extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'suitch';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Interfaz' => array(
			'className' => 'Interfaz',
			'foreignKey' => 'suitch_id',
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
