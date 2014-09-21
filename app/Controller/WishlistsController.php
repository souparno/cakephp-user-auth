<?php

App::uses('AppController', 'Controller');

/**
 * Wishlists Controller
 *
 * @property Wishlist $Wishlist
 * @property PaginatorComponent $Paginator
 */
class WishlistsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $uses = array('Menu', 'Category', 'Subcategory','Product','Wishlist');

    /**
     * Layout name
     *
     * @var array
     */
    public $layout = 'attirezone';

    /**
     * index method
     *
     * @return void
     */
    public function index() {


        $this->set("menus", $this->Menu->find('all'));
        $this->set("categories", $this->Category->find("all"));
        $this->set("subcategories", $this->Subcategory->find("all"));


        if ($this->Session->check('Auth.User')) {
            $auth = $this->Session->read('Auth');
            $userID = $auth['User']['id'];
        }


        $productIDs = $this->Wishlist->find('list', array(
            'fields'=>array('Wishlist.product_id'),
            'conditions' => array(
                'Wishlist.user_id' => $userID
            )
           )
        );

        $this->paginate = array('limit' => 9,
        'conditions' => array(
        'Product.id' => $productIDs
        )
        );
        $this->set('products', $this->paginate('Product'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Wishlist->exists($id)) {
            throw new NotFoundException(__('Invalid wishlist'));
        }
        $options = array('conditions' => array('Wishlist.' . $this->Wishlist->primaryKey => $id));
        $this->set('wishlist', $this->Wishlist->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($productID = NULL) {


        if ($this->Session->check('Auth.User')) {
            $auth = $this->Session->read('Auth');
            $userID = $auth['User']['id'];
        }

        if ($productID != NULL) {
            $this->Wishlist->create();
            if ($this->Wishlist->save(array(
                        'user_id' => $userID,
                        'product_id' => $productID
                    ))) {
                $this->Session->setFlash(__('The wishlist has been saved.'));
            } else {
                $this->Session->setFlash(__('The wishlist could not be saved. Please, try again.'));
            }
        }

        $this->redirect(array('action' => 'index'));

        //$users = $this->Wishlist->User->find('list');
        //$products = $this->Wishlist->Product->find('list');
        //$this->set(compact('users', 'products'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Wishlist->exists($id)) {
            throw new NotFoundException(__('Invalid wishlist'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Wishlist->save($this->request->data)) {
                $this->Session->setFlash(__('The wishlist has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The wishlist could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Wishlist.' . $this->Wishlist->primaryKey => $id));
            $this->request->data = $this->Wishlist->find('first', $options);
        }
        $users = $this->Wishlist->User->find('list');
        $products = $this->Wishlist->Product->find('list');
        $this->set(compact('users', 'products'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Wishlist->id = $id;
        if (!$this->Wishlist->exists()) {
            throw new NotFoundException(__('Invalid wishlist'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Wishlist->delete()) {
            $this->Session->setFlash(__('The wishlist has been deleted.'));
        } else {
            $this->Session->setFlash(__('The wishlist could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
