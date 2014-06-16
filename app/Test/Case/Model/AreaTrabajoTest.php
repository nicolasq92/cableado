<?php
App::uses('AreaTrabajo', 'Model');

/**
 * AreaTrabajo Test Case
 *
 */
class AreaTrabajoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.area_trabajo',
		'app.sala',
		'app.sala_piso',
		'app.sala_piso_edificio',
		'app.sala_piso_edificio_campus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AreaTrabajo = ClassRegistry::init('AreaTrabajo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AreaTrabajo);

		parent::tearDown();
	}

}
