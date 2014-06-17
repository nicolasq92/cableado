<?php
App::uses('AppController', 'Controller');
/**
 * Tgbs Controller
 *
 * @property Tgb $Tgb
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TgbsController extends AppController {

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
		$this->Tgb->recursive = 0;
		$this->set('tgbs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tgb->exists($id)) {
			throw new NotFoundException(__('Invalid tgb'));
		}
		$options = array('conditions' => array('Tgb.' . $this->Tgb->primaryKey => $id));
		$this->set('tgb', $this->Tgb->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tgb->create();
			if ($this->Tgb->save($this->request->data)) {
				$this->Session->setFlash(__('The tgb has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tgb could not be saved. Please, try again.'));
			}
		}
		$tmgbs = $this->Tgb->Tmgb->find('list');
		$this->set(compact('tmgbs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tgb->exists($id)) {
			throw new NotFoundException(__('Invalid tgb'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tgb->save($this->request->data)) {
				$this->Session->setFlash(__('The tgb has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tgb could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tgb.' . $this->Tgb->primaryKey => $id));
			$this->request->data = $this->Tgb->find('first', $options);
		}
		$tmgbs = $this->Tgb->Tmgb->find('list');
		$this->set(compact('tmgbs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tgb->id = $id;
		if (!$this->Tgb->exists()) {
			throw new NotFoundException(__('Invalid tgb'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tgb->delete()) {
			$this->Session->setFlash(__('The tgb has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tgb could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
