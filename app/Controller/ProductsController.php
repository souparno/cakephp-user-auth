<?php

App::uses('AppController', 'Controller');

/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

    /**
     * Layout name
     *
     * @var array
     */
    public $layout = 'admin';

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
    public function index($param = NULL) {


        $this->set("menus", $this->Product->Subcategory->Category->Menu->find('all'));
        $this->set("categories", $this->Product->Subcategory->Category->find("all"));
        $this->set("subcategories", $this->Product->Subcategory->find("all"));


        $subcategories = array();

        if ($param) {
            $search = split("-", $param);
            switch ($search[0]) {
                case "menu":


                    $categories = $this->Product->Subcategory->Category->find("list", array(
                        'fields' => array('Category.id'),
                        'conditions' => array('Category.menu_id' => $search[1])
                    ));

                    $subcategories = $this->Product->Subcategory->find("list", array(
                        'fields' => array('Subcategory.id'),
                        'conditions' => array('Subcategory.category_id' => $categories)
                    ));


                    break;
                case "category":
                    echo "category";
                    break;
                case "subcategory":
                    echo "subcategory";
                    break;
            }
        }

        $this->paginate = array(
            'limit' => 4,
            'conditions' => array('Product.subcategory_id' => $subcategories),
            'order' => array('product.id' => 'asc')
        );

        $this->set('products', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        $this->set('product', $this->Product->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Product->create();
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('The product has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be saved. Please, try again.'));
            }
        }
        $subcategories = $this->Product->Subcategory->find('list');
        $this->set(compact('subcategories'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('The product has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
            $this->request->data = $this->Product->find('first', $options);
        }
        $subcategories = $this->Product->Subcategory->find('list');
        $this->set(compact('subcategories'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Product->delete()) {
            $this->Session->setFlash(__('The product has been deleted.'));
        } else {
            $this->Session->setFlash(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
