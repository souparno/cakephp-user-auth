<?php
App::uses('AppController', 'Controller');
/**
 * Transactiondetails Controller
 *
 * @property Transactiondetail $Transactiondetail
 * @property PaginatorComponent $Paginator
 */
class TransactiondetailsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Transactiondetail->recursive = 0;
                
		$this->set('transactiondetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Transactiondetail->exists($id)) {
			throw new NotFoundException(__('Invalid transactiondetail'));
		}
		$options = array('conditions' => array('Transactiondetail.' . $this->Transactiondetail->primaryKey => $id));
		$this->set('transactiondetail', $this->Transactiondetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Transactiondetail->create();
			if ($this->Transactiondetail->save($this->request->data)) {
				$this->Session->setFlash(__('The transactiondetail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transactiondetail could not be saved. Please, try again.'));
			}
		}
		$transactions = $this->Transactiondetail->Transaction->find('list');
		$products = $this->Transactiondetail->Product->find('list');
		$this->set(compact('transactions', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Transactiondetail->exists($id)) {
			throw new NotFoundException(__('Invalid transactiondetail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Transactiondetail->save($this->request->data)) {
				$this->Session->setFlash(__('The transactiondetail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transactiondetail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Transactiondetail.' . $this->Transactiondetail->primaryKey => $id));
			$this->request->data = $this->Transactiondetail->find('first', $options);
		}
		$transactions = $this->Transactiondetail->Transaction->find('list');
		$products = $this->Transactiondetail->Product->find('list');
		$this->set(compact('transactions', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Transactiondetail->id = $id;
		if (!$this->Transactiondetail->exists()) {
			throw new NotFoundException(__('Invalid transactiondetail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Transactiondetail->delete()) {
			$this->Session->setFlash(__('The transactiondetail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The transactiondetail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
