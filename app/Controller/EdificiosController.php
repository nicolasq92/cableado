<?php
App::uses('AppController', 'Controller');
/**
 * Edificios Controller
 *
 * @property Edificio $Edificio
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EdificiosController extends AppController {

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
		$this->Edificio->recursive = 0;
		$this->set('edificios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Edificio->exists($id)) {
			throw new NotFoundException(__('Invalid edificio'));
		}
		$options = array('conditions' => array('Edificio.' . $this->Edificio->primaryKey => $id));
		$this->set('edificio', $this->Edificio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Edificio->create();
			if ($this->Edificio->save($this->request->data)) {
				$this->Session->setFlash(__('The edificio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The edificio could not be saved. Please, try again.'));
			}
		}
		$campuses = $this->Edificio->Campus->find('list');
		$this->set(compact('campuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Edificio->exists($id)) {
			throw new NotFoundException(__('Invalid edificio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Edificio->save($this->request->data)) {
				$this->Session->setFlash(__('The edificio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The edificio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Edificio.' . $this->Edificio->primaryKey => $id));
			$this->request->data = $this->Edificio->find('first', $options);
		}
		$campuses = $this->Edificio->Campus->find('list');
		$this->set(compact('campuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Edificio->id = $id;
		if (!$this->Edificio->exists()) {
			throw new NotFoundException(__('Invalid edificio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Edificio->delete()) {
			$this->Session->setFlash(__('The edificio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The edificio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
