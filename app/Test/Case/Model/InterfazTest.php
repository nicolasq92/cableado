<?php
App::uses('Interfaz', 'Model');

/**
 * Interfaz Test Case
 *
 */
class InterfazTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.interfaz',
		'app.patchpanel',
		'app.vlan',
		'app.suitch'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Interfaz = ClassRegistry::init('Interfaz');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Interfaz);

		parent::tearDown();
	}

}
