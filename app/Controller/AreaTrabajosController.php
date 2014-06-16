<?php
App::uses('AppController', 'Controller');
/**
 * AreaTrabajos Controller
 *
 * @property AreaTrabajo $AreaTrabajo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AreaTrabajosController extends AppController {

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
		$this->AreaTrabajo->recursive = 0;
		$this->set('areaTrabajos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AreaTrabajo->exists($id)) {
			throw new NotFoundException(__('Invalid area trabajo'));
		}
		$options = array('conditions' => array('AreaTrabajo.' . $this->AreaTrabajo->primaryKey => $id));
		$this->set('areaTrabajo', $this->AreaTrabajo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AreaTrabajo->create();
			if ($this->AreaTrabajo->save($this->request->data)) {
				$this->Session->setFlash(__('The area trabajo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The area trabajo could not be saved. Please, try again.'));
			}
		}
		$salas = $this->AreaTrabajo->Sala->find('list');
		$this->set(compact('salas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AreaTrabajo->exists($id)) {
			throw new NotFoundException(__('Invalid area trabajo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AreaTrabajo->save($this->request->data)) {
				$this->Session->setFlash(__('The area trabajo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The area trabajo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AreaTrabajo.' . $this->AreaTrabajo->primaryKey => $id));
			$this->request->data = $this->AreaTrabajo->find('first', $options);
		}
		$salas = $this->AreaTrabajo->Sala->find('list');
		$this->set(compact('salas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AreaTrabajo->id = $id;
		if (!$this->AreaTrabajo->exists()) {
			throw new NotFoundException(__('Invalid area trabajo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AreaTrabajo->delete()) {
			$this->Session->setFlash(__('The area trabajo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The area trabajo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
