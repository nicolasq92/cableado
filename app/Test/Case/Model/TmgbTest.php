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
		'app.edificio_campus',
		'app.piso_edificio',
		'app.piso_edificio_campus',
		'app.personal_edificio',
		'app.personal_edificio_campus',
		'app.area_trabajo',
		'app.sala_piso',
		'app.sala_piso_edificio',
		'app.sala_piso_edificio_campus',
		'app.patchpanel',
		'app.rack_tgb',
		'app.interfaz',
		'app.patchpanel_rack',
		'app.patchpanel_rack_tgb',
		'app.vlan',
		'app.switch',
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