<?php
App::uses('AppController', 'Controller');
/**
 * Personals Controller
 *
 * @property Personal $Personal
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PersonalsController extends AppController {

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
		$this->Personal->recursive = 0;
		$this->set('personals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Personal->exists($id)) {
			throw new NotFoundException(__('Invalid personal'));
		}
		$options = array('conditions' => array('Personal.' . $this->Personal->primaryKey => $id));
		$this->set('personal', $this->Personal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Personal->create();
			if ($this->Personal->save($this->request->data)) {
				$this->Session->setFlash(__('The personal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal could not be saved. Please, try again.'));
			}
		}
		$edificios = $this->Personal->Edificio->find('list');
		$this->set(compact('edificios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Personal->exists($id)) {
			throw new NotFoundException(__('Invalid personal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Personal->save($this->request->data)) {
				$this->Session->setFlash(__('The personal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Personal.' . $this->Personal->primaryKey => $id));
			$this->request->data = $this->Personal->find('first', $options);
		}
		$edificios = $this->Personal->Edificio->find('list');
		$this->set(compact('edificios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Personal->id = $id;
		if (!$this->Personal->exists()) {
			throw new NotFoundException(__('Invalid personal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Personal->delete()) {
			$this->Session->setFlash(__('The personal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The personal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
