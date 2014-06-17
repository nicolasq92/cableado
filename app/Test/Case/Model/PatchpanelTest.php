<?php
App::uses('Patchpanel', 'Model');

/**
 * Patchpanel Test Case
 *
 */
class PatchpanelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.patchpanel',
		'app.rack',
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
		$this->Patchpanel = ClassRegistry::init('Patchpanel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Patchpanel);

		parent::tearDown();
	}

}
