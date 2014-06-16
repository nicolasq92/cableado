<?php
App::uses('AppController', 'Controller');
/**
 * Interfazs Controller
 *
 * @property Interfaz $Interfaz
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InterfazsController extends AppController {

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
		$this->Interfaz->recursive = 0;
		$this->set('interfazs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Interfaz->exists($id)) {
			throw new NotFoundException(__('Invalid interfaz'));
		}
		$options = array('conditions' => array('Interfaz.' . $this->Interfaz->primaryKey => $id));
		$this->set('interfaz', $this->Interfaz->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Interfaz->create();
			if ($this->Interfaz->save($this->request->data)) {
				$this->Session->setFlash(__('The interfaz has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interfaz could not be saved. Please, try again.'));
			}
		}
		$patchpanels = $this->Interfaz->Patchpanel->find('list');
		$vlans = $this->Interfaz->Vlan->find('list');
		$switches = $this->Interfaz->Switch->find('list');
		$this->set(compact('patchpanels', 'vlans', 'switches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Interfaz->exists($id)) {
			throw new NotFoundException(__('Invalid interfaz'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Interfaz->save($this->request->data)) {
				$this->Session->setFlash(__('The interfaz has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interfaz could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Interfaz.' . $this->Interfaz->primaryKey => $id));
			$this->request->data = $this->Interfaz->find('first', $options);
		}
		$patchpanels = $this->Interfaz->Patchpanel->find('list');
		$vlans = $this->Interfaz->Vlan->find('list');
		$switches = $this->Interfaz->Switch->find('list');
		$this->set(compact('patchpanels', 'vlans', 'switches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Interfaz->id = $id;
		if (!$this->Interfaz->exists()) {
			throw new NotFoundException(__('Invalid interfaz'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Interfaz->delete()) {
			$this->Session->setFlash(__('The interfaz has been deleted.'));
		} else {
			$this->Session->setFlash(__('The interfaz could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
