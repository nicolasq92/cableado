<?php
App::uses('Sala', 'Model');

/**
 * Sala Test Case
 *
 */
class SalaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sala',
		'app.piso',
		'app.edificio',
		'app.campus',
		'app.personal',
		'app.area_trabajo',
		'app.rack',
		'app.tgb',
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
		$this->Sala = ClassRegistry::init('Sala');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sala);

		parent::tearDown();
	}

}
