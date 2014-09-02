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

        $this->layout = "default_attirezone";

        $this->loadModel("menu");
        $this->loadModel("category");
        $this->loadModel("subcategory");



        $this->set("menus", $this->menu->find("all"));
        $this->set("categories", $this->category->find("all"));
        $this->set("subcategories", $this->subcategory->find("all"));

        $options = array();

        if ($param) {
            $search = split("-", $param);
            switch ($search[0]) {
                case "menu":
                    $options=$this->subcategory->query("SELECT subcategories.id FROM subcategories WHERE category_id IN (SELECT id FROM categories WHERE menu_id='".$search[1]."')");
                    /*$options = $this->subcategory->find("all", array(
                        'fields'=>array('subcategory.id'),
                        'condition'=>array(
                            'subcategory.category_id'=>array(
                                $this->category->find("all",array(
                                    'fields'=>array('id'),
                                    'condition'=>array("category.menu_id",array(
                                        $this->menu->find("all",array(
                                            'fields'=>array('id'),
                                            'condition'=>array('menu.id'=>array($search[1]))
                                        ))
                                    ))
                                ))
                            )
                        )
                    ));*/
                    
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
            'order' => array('product.id' => 'asc')
        );
        

        $arr=array();
        foreach ($options as $v){
            $arr[]=$v["subcategories"]["id"];
        }
        $this->set('products', $this->Paginator->paginate(array("Product.id IN "=>$arr)));
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
