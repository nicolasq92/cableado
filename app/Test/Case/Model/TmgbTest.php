<?php
App::uses('Tmgb', 'Model');

/**
 * Tmgb Test Case
 *
 */
class TmgbTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tmgb',
		'app.tgb',
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
		$this->Tmgb = ClassRegistry::init('Tmgb');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tmgb);

		parent::tearDown();
	}

}
