<?php
App::uses('Piso', 'Model');

/**
 * Piso Test Case
 *
 */
class PisoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.piso',
		'app.edificio',
		'app.campus',
		'app.personal',
		'app.edificio_campus',
		'app.sala'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Piso = ClassRegistry::init('Piso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Piso);

		parent::tearDown();
	}

}
