<?php
App::uses('AppModel', 'Model');
/**
 * Rack Model
 *
 * @property Tgb $Tgb
 * @property Sala $Sala
 * @property Patchpanel $Patchpanel
 */
class Rack extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'rack';

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
		'Tgb' => array(
			'className' => 'Tgb',
			'foreignKey' => 'tgb_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sala' => array(
			'className' => 'Sala',
			'foreignKey' => 'sala_id',
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
		'Patchpanel' => array(
			'className' => 'Patchpanel',
			'foreignKey' => 'rack_id',
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
