<?php
App::uses('AppModel', 'Model');
/**
 * Tgb Model
 *
 * @property Tmgb $Tmgb
 * @property Rack $Rack
 */
class Tgb extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tgb';

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
		'Tmgb' => array(
			'className' => 'Tmgb',
			'foreignKey' => 'tmgb_id',
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
		'Rack' => array(
			'className' => 'Rack',
			'foreignKey' => 'tgb_id',
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
