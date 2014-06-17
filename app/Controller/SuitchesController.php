<?php
App::uses('AppController', 'Controller');
/**
 * Suitches Controller
 *
 * @property Suitch $Suitch
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SuitchesController extends AppController {

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
		$this->Suitch->recursive = 0;
		$this->set('suitches', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Suitch->exists($id)) {
			throw new NotFoundException(__('Invalid suitch'));
		}
		$options = array('conditions' => array('Suitch.' . $this->Suitch->primaryKey => $id));
		$this->set('suitch', $this->Suitch->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Suitch->create();
			if ($this->Suitch->save($this->request->data)) {
				$this->Session->setFlash(__('The suitch has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suitch could not be saved. Please, try again.'));
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
		if (!$this->Suitch->exists($id)) {
			throw new NotFoundException(__('Invalid suitch'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Suitch->save($this->request->data)) {
				$this->Session->setFlash(__('The suitch has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The suitch could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Suitch.' . $this->Suitch->primaryKey => $id));
			$this->request->data = $this->Suitch->find('first', $options);
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
		$this->Suitch->id = $id;
		if (!$this->Suitch->exists()) {
			throw new NotFoundException(__('Invalid suitch'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Suitch->delete()) {
			$this->Session->setFlash(__('The suitch has been deleted.'));
		} else {
			$this->Session->setFlash(__('The suitch could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
