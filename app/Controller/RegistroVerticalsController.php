<?php
App::uses('AppController', 'Controller');
/**
 * RegistroVerticals Controller
 *
 * @property RegistroVertical $RegistroVertical
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RegistroVerticalsController extends AppController {

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
		$this->RegistroVertical->recursive = 0;
		$this->set('registroVerticals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RegistroVertical->exists($id)) {
			throw new NotFoundException(__('Invalid registro vertical'));
		}
		$options = array('conditions' => array('RegistroVertical.' . $this->RegistroVertical->primaryKey => $id));
		$this->set('registroVertical', $this->RegistroVertical->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RegistroVertical->create();
			if ($this->RegistroVertical->save($this->request->data)) {
				$this->Session->setFlash(__('The registro vertical has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registro vertical could not be saved. Please, try again.'));
			}
		}
		$patchpanels = $this->RegistroVertical->Patchpanel->find('list');
		$this->set(compact('patchpanels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RegistroVertical->exists($id)) {
			throw new NotFoundException(__('Invalid registro vertical'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RegistroVertical->save($this->request->data)) {
				$this->Session->setFlash(__('The registro vertical has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registro vertical could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RegistroVertical.' . $this->RegistroVertical->primaryKey => $id));
			$this->request->data = $this->RegistroVertical->find('first', $options);
		}
		$patchpanels = $this->RegistroVertical->Patchpanel->find('list');
		$this->set(compact('patchpanels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RegistroVertical->id = $id;
		if (!$this->RegistroVertical->exists()) {
			throw new NotFoundException(__('Invalid registro vertical'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RegistroVertical->delete()) {
			$this->Session->setFlash(__('The registro vertical has been deleted.'));
		} else {
			$this->Session->setFlash(__('The registro vertical could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
