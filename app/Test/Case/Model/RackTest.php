<?php
App::uses('Rack', 'Model');

/**
 * Rack Test Case
 *
 */
class RackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rack',
		'app.tgb',
		'app.sala',
		'app.sala_piso',
		'app.sala_piso_edificio',
		'app.sala_piso_edificio_campus',
		'app.patchpanel',
		'app.rack_tgb',
		'app.interfaz',
		'app.patchpanel_rack',
		'app.patchpanel_rack_tgb',
		'app.vlan',
		'app.switch',
		'app.registro_horizontal',
		'app.registro_vertical'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Rack = ClassRegistry::init('Rack');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rack);

		parent::tearDown();
	}

}
