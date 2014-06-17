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
		'app.area_trabajo',
		'app.registro_horizontal',
		'app.estacion',
		'app.registro_vertical',
		'app.suitch'
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
