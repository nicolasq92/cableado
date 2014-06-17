<?php
App::uses('Vlan', 'Model');

/**
 * Vlan Test Case
 *
 */
class VlanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vlan',
		'app.interfaz',
		'app.patchpanel',
		'app.rack',
		'app.tgb',
		'app.tmgb',
		'app.sala',
		'app.piso',
		'app.edificio',
		'app.campus',
		'app.personal',
		'app.edificio_campus',
		'app.piso_edificio',
		'app.piso_edificio_campus',
		'app.personal_edificio',
		'app.personal_edificio_campus',
		'app.area_trabajo',
		'app.sala_piso',
		'app.sala_piso_edificio',
		'app.sala_piso_edificio_campus',
		'app.rack_tgb',
		'app.registro_horizontal',
		'app.patchpanel_rack',
		'app.patchpanel_rack_tgb',
		'app.estacion',
		'app.registro_vertical',
		'app.switch'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vlan = ClassRegistry::init('Vlan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vlan);

		parent::tearDown();
	}

}
