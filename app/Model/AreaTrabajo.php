<?php
App::uses('AppModel', 'Model');
/**
 * AreaTrabajo Model
 *
 * @property Sala $Sala
 * @property SalaPiso $SalaPiso
 * @property SalaPisoEdificio $SalaPisoEdificio
 * @property SalaPisoEdificioCampus $SalaPisoEdificioCampus
 */
class AreaTrabajo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'area_trabajo';

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
		'Sala' => array(
			'className' => 'Sala',
			'foreignKey' => 'sala_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
