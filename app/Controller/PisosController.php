<?php
App::uses('AppController', 'Controller');
/**
 * Pisos Controller
 *
 * @property Piso $Piso
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PisosController extends AppController {

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
		$this->Piso->recursive = 0;
		$this->set('pisos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Piso->exists($id)) {
			throw new NotFoundException(__('Invalid piso'));
		}
		$options = array('conditions' => array('Piso.' . $this->Piso->primaryKey => $id));
		$this->set('piso', $this->Piso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Piso->create();
			if ($this->Piso->save($this->request->data)) {
				$this->Session->setFlash(__('The piso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The piso could not be saved. Please, try again.'));
			}
		}
		$edificios = $this->Piso->Edificio->find('list');
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
		if (!$this->Piso->exists($id)) {
			throw new NotFoundException(__('Invalid piso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Piso->save($this->request->data)) {
				$this->Session->setFlash(__('The piso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The piso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Piso.' . $this->Piso->primaryKey => $id));
			$this->request->data = $this->Piso->find('first', $options);
		}
		$edificios = $this->Piso->Edificio->find('list');
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
		$this->Piso->id = $id;
		if (!$this->Piso->exists()) {
			throw new NotFoundException(__('Invalid piso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Piso->delete()) {
			$this->Session->setFlash(__('The piso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The piso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
