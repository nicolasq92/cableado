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
		'app.interfaz',
		'app.vlan',
		'app.suitch',
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
