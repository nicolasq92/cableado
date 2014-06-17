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
		'app.interfaz',
		'app.vlan',
		'app.suitch',
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
