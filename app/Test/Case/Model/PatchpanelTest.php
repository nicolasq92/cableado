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
