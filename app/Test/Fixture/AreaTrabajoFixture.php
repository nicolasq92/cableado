<?php
/**
 * AreaTrabajoFixture
 *
 */
class AreaTrabajoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'area_trabajo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'direccion_ip' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sala_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'sala_piso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'sala_piso_edificio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'sala_piso_edificio_campus_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'sala_id', 'sala_piso_id', 'sala_piso_edificio_id', 'sala_piso_edificio_campus_id'), 'unique' => 1),
			'fk_estacion_sala1' => array('column' => array('sala_id', 'sala_piso_id', 'sala_piso_edificio_id', 'sala_piso_edificio_campus_id'), 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'direccion_ip' => 'Lorem ipsum dolor sit amet',
			'sala_id' => 1,
			'sala_piso_id' => 1,
			'sala_piso_edificio_id' => 1,
			'sala_piso_edificio_campus_id' => 1
		),
	);

}
