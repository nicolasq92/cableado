<?php
/**
 * InterfazFixture
 *
 */
class InterfazFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'interfaz';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'patchpanel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'patchpanel_rack_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'patchpanel_rack_tgb_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'vlan_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'suitch_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'patchpanel_id', 'patchpanel_rack_id', 'patchpanel_rack_tgb_id', 'suitch_id'), 'unique' => 1),
			'fk_interfaz_patchpanel1' => array('column' => array('patchpanel_id', 'patchpanel_rack_id', 'patchpanel_rack_tgb_id'), 'unique' => 0),
			'fk_interfaz_vlan1' => array('column' => 'vlan_id', 'unique' => 0),
			'fk_interfaz_switch1' => array('column' => 'suitch_id', 'unique' => 0)
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
			'patchpanel_id' => 1,
			'patchpanel_rack_id' => 1,
			'patchpanel_rack_tgb_id' => 1,
			'vlan_id' => 1,
			'suitch_id' => 1
		),
	);

}
