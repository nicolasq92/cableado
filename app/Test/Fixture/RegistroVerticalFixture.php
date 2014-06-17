<?php
/**
 * RegistroVerticalFixture
 *
 */
class RegistroVerticalFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'registro_vertical';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo_cable' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo_conexion_a' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo_conexion_b' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'patchpanel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'patchpanel_rack_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'patchpanel_rack_tgb_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'patchpanel_id1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'patchpanel_rack_id1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'patchpanel_rack_tgb_id1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'patchpanel_id', 'patchpanel_rack_id', 'patchpanel_rack_tgb_id', 'patchpanel_id1', 'patchpanel_rack_id1', 'patchpanel_rack_tgb_id1'), 'unique' => 1),
			'fk_registro_vertical_patchpanel1' => array('column' => array('patchpanel_id', 'patchpanel_rack_id', 'patchpanel_rack_tgb_id'), 'unique' => 0),
			'fk_registro_vertical_patchpanel2' => array('column' => array('patchpanel_id1', 'patchpanel_rack_id1', 'patchpanel_rack_tgb_id1'), 'unique' => 0)
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
			'tipo_cable' => 'Lorem ipsum dolor sit amet',
			'tipo_conexion_a' => 'Lorem ipsum dolor sit amet',
			'tipo_conexion_b' => 'Lorem ipsum dolor sit amet',
			'patchpanel_id' => 1,
			'patchpanel_rack_id' => 1,
			'patchpanel_rack_tgb_id' => 1,
			'patchpanel_id1' => 1,
			'patchpanel_rack_id1' => 1,
			'patchpanel_rack_tgb_id1' => 1
		),
	);

}
