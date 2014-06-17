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
		'app.patchpanel',
		'app.interfaz',
		'app.vlan',
		'app.suitch',
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
