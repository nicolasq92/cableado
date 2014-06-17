<?php
/**
 * CampusFixture
 *
 */
class CampusFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'campus';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'direccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 160, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hora_entrada' => array('type' => 'time', 'null' => false, 'default' => null),
		'hora_salida' => array('type' => 'time', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'direccion' => 'Lorem ipsum dolor sit amet',
			'hora_entrada' => '15:19:02',
			'hora_salida' => '15:19:02'
		),
	);

}
