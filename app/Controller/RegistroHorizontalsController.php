<?php
App::uses('AppController', 'Controller');
/**
 * RegistroHorizontals Controller
 *
 * @property RegistroHorizontal $RegistroHorizontal
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RegistroHorizontalsController extends AppController {

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
		$this->RegistroHorizontal->recursive = 0;
		$this->set('registroHorizontals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RegistroHorizontal->exists($id)) {
			throw new NotFoundException(__('Invalid registro horizontal'));
		}
		$options = array('conditions' => array('RegistroHorizontal.' . $this->RegistroHorizontal->primaryKey => $id));
		$this->set('registroHorizontal', $this->RegistroHorizontal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RegistroHorizontal->create();
			if ($this->RegistroHorizontal->save($this->request->data)) {
				$this->Session->setFlash(__('The registro horizontal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registro horizontal could not be saved. Please, try again.'));
			}
		}
		$patchpanels = $this->RegistroHorizontal->Patchpanel->find('list');
		$estacions = $this->RegistroHorizontal->Estacion->find('list');
		$this->set(compact('patchpanels', 'estacions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RegistroHorizontal->exists($id)) {
			throw new NotFoundException(__('Invalid registro horizontal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RegistroHorizontal->save($this->request->data)) {
				$this->Session->setFlash(__('The registro horizontal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registro horizontal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RegistroHorizontal.' . $this->RegistroHorizontal->primaryKey => $id));
			$this->request->data = $this->RegistroHorizontal->find('first', $options);
		}
		$patchpanels = $this->RegistroHorizontal->Patchpanel->find('list');
		$estacions = $this->RegistroHorizontal->Estacion->find('list');
		$this->set(compact('patchpanels', 'estacions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RegistroHorizontal->id = $id;
		if (!$this->RegistroHorizontal->exists()) {
			throw new NotFoundException(__('Invalid registro horizontal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RegistroHorizontal->delete()) {
			$this->Session->setFlash(__('The registro horizontal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The registro horizontal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
