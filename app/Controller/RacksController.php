<?php
App::uses('AppController', 'Controller');
/**
 * Racks Controller
 *
 * @property Rack $Rack
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RacksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rack->recursive = 0;
		$this->set('racks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rack->exists($id)) {
			throw new NotFoundException(__('Invalid rack'));
		}
		$options = array('conditions' => array('Rack.' . $this->Rack->primaryKey => $id));
		$this->set('rack', $this->Rack->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rack->create();
			if ($this->Rack->save($this->request->data)) {
				$this->Session->setFlash(__('The rack has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rack could not be saved. Please, try again.'));
			}
		}
		$tgbs = $this->Rack->Tgb->find('list');
		$salas = $this->Rack->Sala->find('list');
		$this->set(compact('tgbs', 'salas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Rack->exists($id)) {
			throw new NotFoundException(__('Invalid rack'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rack->save($this->request->data)) {
				$this->Session->setFlash(__('The rack has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rack could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rack.' . $this->Rack->primaryKey => $id));
			$this->request->data = $this->Rack->find('first', $options);
		}
		$tgbs = $this->Rack->Tgb->find('list');
		$salas = $this->Rack->Sala->find('list');
		$this->set(compact('tgbs', 'salas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Rack->id = $id;
		if (!$this->Rack->exists()) {
			throw new NotFoundException(__('Invalid rack'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rack->delete()) {
			$this->Session->setFlash(__('The rack has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rack could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
