<?php
App::uses('AppController', 'Controller');
/**
 * Tmgbs Controller
 *
 * @property Tmgb $Tmgb
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TmgbsController extends AppController {

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
		$this->Tmgb->recursive = 0;
		$this->set('tmgbs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tmgb->exists($id)) {
			throw new NotFoundException(__('Invalid tmgb'));
		}
		$options = array('conditions' => array('Tmgb.' . $this->Tmgb->primaryKey => $id));
		$this->set('tmgb', $this->Tmgb->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tmgb->create();
			if ($this->Tmgb->save($this->request->data)) {
				$this->Session->setFlash(__('The tmgb has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tmgb could not be saved. Please, try again.'));
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
		if (!$this->Tmgb->exists($id)) {
			throw new NotFoundException(__('Invalid tmgb'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tmgb->save($this->request->data)) {
				$this->Session->setFlash(__('The tmgb has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tmgb could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tmgb.' . $this->Tmgb->primaryKey => $id));
			$this->request->data = $this->Tmgb->find('first', $options);
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
		$this->Tmgb->id = $id;
		if (!$this->Tmgb->exists()) {
			throw new NotFoundException(__('Invalid tmgb'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tmgb->delete()) {
			$this->Session->setFlash(__('The tmgb has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tmgb could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
