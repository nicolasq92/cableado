<?php
App::uses('AppController', 'Controller');
/**
 * Salas Controller
 *
 * @property Sala $Sala
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SalasController extends AppController {

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
		$this->Sala->recursive = 0;
		$this->set('salas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sala->exists($id)) {
			throw new NotFoundException(__('Invalid sala'));
		}
		$options = array('conditions' => array('Sala.' . $this->Sala->primaryKey => $id));
		$this->set('sala', $this->Sala->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sala->create();
			if ($this->Sala->save($this->request->data)) {
				$this->Session->setFlash(__('The sala has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sala could not be saved. Please, try again.'));
			}
		}
		$pisos = $this->Sala->Piso->find('list');
		$personals = $this->Sala->Personal->find('list');
		$this->set(compact('pisos', 'personals'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sala->exists($id)) {
			throw new NotFoundException(__('Invalid sala'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sala->save($this->request->data)) {
				$this->Session->setFlash(__('The sala has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sala could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sala.' . $this->Sala->primaryKey => $id));
			$this->request->data = $this->Sala->find('first', $options);
		}
		$pisos = $this->Sala->Piso->find('list');
		$personals = $this->Sala->Personal->find('list');
		$this->set(compact('pisos', 'personals'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sala->id = $id;
		if (!$this->Sala->exists()) {
			throw new NotFoundException(__('Invalid sala'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sala->delete()) {
			$this->Session->setFlash(__('The sala has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sala could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
