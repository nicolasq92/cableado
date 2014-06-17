<?php
/**
 * SalaFixture
 *
 */
class SalaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sala';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 160, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'hora_acceso' => array('type' => 'time', 'null' => false, 'default' => null),
		'piso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'piso_edificio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'piso_edificio_campus_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'personal_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'personal_edificio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'personal_edificio_campus_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'piso_id', 'piso_edificio_id', 'piso_edificio_campus_id'), 'unique' => 1),
			'fk_sala_piso1' => array('column' => array('piso_id', 'piso_edificio_id', 'piso_edificio_campus_id'), 'unique' => 0),
			'fk_sala_personal1' => array('column' => array('personal_id', 'personal_edificio_id', 'personal_edificio_campus_id'), 'unique' => 0)
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
			'tipo' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'hora_acceso' => '15:09:55',
			'piso_id' => 1,
			'piso_edificio_id' => 1,
			'piso_edificio_campus_id' => 1,
			'personal_id' => 1,
			'personal_edificio_id' => 1,
			'personal_edificio_campus_id' => 1
		),
	);

}
