<?php
App::uses('AppController', 'Controller');
/**
 * Vlans Controller
 *
 * @property Vlan $Vlan
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VlansController extends AppController {

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
		$this->Vlan->recursive = 0;
		$this->set('vlans', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vlan->exists($id)) {
			throw new NotFoundException(__('Invalid vlan'));
		}
		$options = array('conditions' => array('Vlan.' . $this->Vlan->primaryKey => $id));
		$this->set('vlan', $this->Vlan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vlan->create();
			if ($this->Vlan->save($this->request->data)) {
				$this->Session->setFlash(__('The vlan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vlan could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Vlan->exists($id)) {
			throw new NotFoundException(__('Invalid vlan'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Vlan->save($this->request->data)) {
				$this->Session->setFlash(__('The vlan has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vlan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vlan.' . $this->Vlan->primaryKey => $id));
			$this->request->data = $this->Vlan->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Vlan->id = $id;
		if (!$this->Vlan->exists()) {
			throw new NotFoundException(__('Invalid vlan'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Vlan->delete()) {
			$this->Session->setFlash(__('The vlan has been deleted.'));
		} else {
			$this->Session->setFlash(__('The vlan could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
