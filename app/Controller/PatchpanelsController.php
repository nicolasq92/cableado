<?php
App::uses('AppController', 'Controller');
/**
 * Patchpanels Controller
 *
 * @property Patchpanel $Patchpanel
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PatchpanelsController extends AppController {

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
		$this->Patchpanel->recursive = 0;
		$this->set('patchpanels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Patchpanel->exists($id)) {
			throw new NotFoundException(__('Invalid patchpanel'));
		}
		$options = array('conditions' => array('Patchpanel.' . $this->Patchpanel->primaryKey => $id));
		$this->set('patchpanel', $this->Patchpanel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Patchpanel->create();
			if ($this->Patchpanel->save($this->request->data)) {
				$this->Session->setFlash(__('The patchpanel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patchpanel could not be saved. Please, try again.'));
			}
		}
		$racks = $this->Patchpanel->Rack->find('list');
		$this->set(compact('racks'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Patchpanel->exists($id)) {
			throw new NotFoundException(__('Invalid patchpanel'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Patchpanel->save($this->request->data)) {
				$this->Session->setFlash(__('The patchpanel has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patchpanel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Patchpanel.' . $this->Patchpanel->primaryKey => $id));
			$this->request->data = $this->Patchpanel->find('first', $options);
		}
		$racks = $this->Patchpanel->Rack->find('list');
		$this->set(compact('racks'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Patchpanel->id = $id;
		if (!$this->Patchpanel->exists()) {
			throw new NotFoundException(__('Invalid patchpanel'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Patchpanel->delete()) {
			$this->Session->setFlash(__('The patchpanel has been deleted.'));
		} else {
			$this->Session->setFlash(__('The patchpanel could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
