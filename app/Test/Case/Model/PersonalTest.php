<?php
App::uses('Personal', 'Model');

/**
 * Personal Test Case
 *
 */
class PersonalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.personal',
		'app.edificio',
		'app.campus',
		'app.piso',
		'app.sala'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Personal = ClassRegistry::init('Personal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Personal);

		parent::tearDown();
	}

}
