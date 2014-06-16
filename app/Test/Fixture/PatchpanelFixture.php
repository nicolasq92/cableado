<?php
/**
 * PatchpanelFixture
 *
 */
class PatchpanelFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'patchpanel';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modelo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'numero_puertos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo_cable' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'rack_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'rack_tgb_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'rack_id', 'rack_tgb_id'), 'unique' => 1),
			'fk_patchpanel_rack1' => array('column' => array('rack_id', 'rack_tgb_id'), 'unique' => 0)
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
			'modelo' => 'Lorem ipsum dolor sit amet',
			'numero_puertos' => 'Lorem ipsum dolor sit amet',
			'tipo_cable' => 'Lorem ipsum dolor sit amet',
			'rack_id' => 1,
			'rack_tgb_id' => 1
		),
	);

}
