<?php
/**
 * EdificioFixture
 *
 */
class EdificioFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'edificio';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 160, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'direccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 160, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hora_entrada' => array('type' => 'time', 'null' => false, 'default' => null),
		'hora_salida' => array('type' => 'time', 'null' => false, 'default' => null),
		'campus_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'campus_id'), 'unique' => 1),
			'fk_edificio_campus' => array('column' => 'campus_id', 'unique' => 0)
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
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'hora_entrada' => '15:19:18',
			'hora_salida' => '15:19:18',
			'campus_id' => 1
		),
	);

}
