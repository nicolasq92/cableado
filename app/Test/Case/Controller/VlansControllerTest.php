<?php
App::uses('VlansController', 'Controller');

/**
 * VlansController Test Case
 *
 */
class VlansControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vlan',
		'app.interfaz',
		'app.patchpanel',
		'app.rack',
		'app.tgb',
		'app.tmgb',
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
		'app.rack_tgb',
		'app.registro_horizontal',
		'app.patchpanel_rack',
		'app.patchpanel_rack_tgb',
		'app.estacion',
		'app.registro_vertical',
		'app.switch'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
