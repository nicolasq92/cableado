<?php
/**
 * PersonalFixture
 *
 */
class PersonalFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'personal';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cedula' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'telefono' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'edificio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'edificio_campus_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'edificio_id', 'edificio_campus_id'), 'unique' => 1),
			'fk_personal_edificio1' => array('column' => array('edificio_id', 'edificio_campus_id'), 'unique' => 0)
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
			'cedula' => 1,
			'telefono' => 'Lorem ips',
			'edificio_id' => 1,
			'edificio_campus_id' => 1
		),
	);

}
