<?php
/**
 * TgbFixture
 *
 */
class TgbFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tgb';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'localizacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 160, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'localizacion_resultados_pruebas' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 160, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tmgb_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'tmgb_id'), 'unique' => 1),
			'fk_tgb_tmgb1' => array('column' => 'tmgb_id', 'unique' => 0)
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
			'localizacion' => 'Lorem ipsum dolor sit amet',
			'localizacion_resultados_pruebas' => 'Lorem ipsum dolor sit amet',
			'tmgb_id' => 1
		),
	);

}
