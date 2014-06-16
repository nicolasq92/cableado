<?php
App::uses('RegistroHorizontal', 'Model');

/**
 * RegistroHorizontal Test Case
 *
 */
class RegistroHorizontalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.registro_horizontal',
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
		'app.registro_vertical',
		'app.estacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RegistroHorizontal = ClassRegistry::init('RegistroHorizontal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RegistroHorizontal);

		parent::tearDown();
	}

}
