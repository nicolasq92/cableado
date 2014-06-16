<?php
App::uses('RegistroVertical', 'Model');

/**
 * RegistroVertical Test Case
 *
 */
class RegistroVerticalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.registro_vertical',
		'app.patchpanel',
		'app.rack',
		'app.tgb',
		'app.sala',
		'app.sala_piso',
		'app.sala_piso_edificio',
		'app.sala_piso_edificio_campus',
		'app.rack_tgb',
		'app.interfaz',
		'app.patchpanel_rack',
		'app.patchpanel_rack_tgb',
		'app.vlan',
		'app.switch',
		'app.registro_horizontal',
		'app.estacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RegistroVertical = ClassRegistry::init('RegistroVertical');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RegistroVertical);

		parent::tearDown();
	}

}
