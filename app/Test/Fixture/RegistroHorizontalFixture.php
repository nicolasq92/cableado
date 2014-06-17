<?php
/**
 * RegistroHorizontalFixture
 *
 */
class RegistroHorizontalFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'registro_horizontal';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo_cable' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'area_trabajo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo_conector' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'longitud_cable' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		'tipo_hardware' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'observacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_creacion' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'patchpanel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'patchpanel_rack_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'patchpanel_rack_tgb_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'estacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'patchpanel_id', 'patchpanel_rack_id', 'patchpanel_rack_tgb_id', 'estacion_id'), 'unique' => 1),
			'fk_registro_horizontal_patchpanel1' => array('column' => array('patchpanel_id', 'patchpanel_rack_id', 'patchpanel_rack_tgb_id'), 'unique' => 0),
			'fk_registro_horizontal_estacion1' => array('column' => 'estacion_id', 'unique' => 0)
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
			'area_trabajo' => 'Lorem ipsum dolor sit amet',
			'tipo_conector' => 'Lorem ipsum dolor sit amet',
			'longitud_cable' => 1,
			'tipo_hardware' => 'Lorem ipsum dolor sit amet',
			'observacion' => 'Lorem ipsum dolor sit amet',
			'fecha_creacion' => '2014-06-17 15:30:37',
			'patchpanel_id' => 1,
			'patchpanel_rack_id' => 1,
			'patchpanel_rack_tgb_id' => 1,
			'estacion_id' => 1
		),
	);

}
