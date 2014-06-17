<?php
App::uses('Tgb', 'Model');

/**
 * Tgb Test Case
 *
 */
class TgbTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tgb',
		'app.tmgb',
		'app.rack',
		'app.sala',
		'app.piso',
		'app.edificio',
		'app.campus',
		'app.personal',
		'app.area_trabajo',
		'app.patchpanel',
		'app.interfaz',
		'app.vlan',
		'app.suitch',
		'app.registro_horizontal',
		'app.estacion',
		'app.registro_vertical'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tgb = ClassRegistry::init('Tgb');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tgb);

		parent::tearDown();
	}

}
