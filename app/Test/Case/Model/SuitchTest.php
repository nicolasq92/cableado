<?php
App::uses('Suitch', 'Model');

/**
 * Suitch Test Case
 *
 */
class SuitchTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.suitch',
		'app.interfaz'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Suitch = ClassRegistry::init('Suitch');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Suitch);

		parent::tearDown();
	}

}
