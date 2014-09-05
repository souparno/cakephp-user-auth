<?php
App::uses('AppController', 'Controller');
/**
 * Imagesliders Controller
 *
 * @property Imageslider $Imageslider
 * @property PaginatorComponent $Paginator
 */
class ImageslidersController extends AppController {

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
		$this->Imageslider->recursive = 0;
		$this->set('imagesliders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Imageslider->exists($id)) {
			throw new NotFoundException(__('Invalid imageslider'));
		}
		$options = array('conditions' => array('Imageslider.' . $this->Imageslider->primaryKey => $id));
		$this->set('imageslider', $this->Imageslider->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Imageslider->create();
			if ($this->Imageslider->save($this->request->data)) {
				$this->Session->setFlash(__('The imageslider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imageslider could not be saved. Please, try again.'));
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
		if (!$this->Imageslider->exists($id)) {
			throw new NotFoundException(__('Invalid imageslider'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Imageslider->save($this->request->data)) {
				$this->Session->setFlash(__('The imageslider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imageslider could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Imageslider.' . $this->Imageslider->primaryKey => $id));
			$this->request->data = $this->Imageslider->find('first', $options);
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
		$this->Imageslider->id = $id;
		if (!$this->Imageslider->exists()) {
			throw new NotFoundException(__('Invalid imageslider'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Imageslider->delete()) {
			$this->Session->setFlash(__('The imageslider has been deleted.'));
		} else {
			$this->Session->setFlash(__('The imageslider could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
