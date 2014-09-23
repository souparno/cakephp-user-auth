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
    public function index() {
        $this->Product->recursive = 0;
        $this->paginate = array(
            'limit' => 10,
        );
        $this->set('products', $this->Paginator->paginate());
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

    public function upload_image1($foldername, $imagename, $imagetemp) {

        $folder_url = WWW_ROOT . "img/images/".$foldername."/pic";
        if (!is_dir($folder_url)) {
            mkdir($folder_url);
        }

        $filename = $folder_url . "/" . $imagename;

        if (move_uploaded_file($imagetemp, $filename)) {
            $this->Session->setFlash('File uploaded successfuly');
        } else {
            $this->Session->setFlash('There was a problem uploading file. Please try again.');
        }
    }

    public function upload_image1_small( $imagename, $imagetemp) {
        
        $folder_url = WWW_ROOT . "img/images";
        
        $filename = $folder_url . "/" . $imagename;
        echo $filename;
        
         if (move_uploaded_file($imagetemp, $filename)) {
            $this->Session->setFlash('File uploaded successfuly');
        } else {
            $this->Session->setFlash('There was a problem uploading file. Please try again.');
        }
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {

            echo "<pre>";
            var_dump($this->data);
            echo "</pre>";



            $menu = $this->Product->Subcategory->find("all", array(
                'fields' => array('Menu.title'),
                'conditions' => array('Subcategory.id' => $this->data['Product']['subcategory_id']),
                'joins' => array(
                    array('table' => 'menus',
                        'alias' => 'Menu',
                        'type' => 'inner',
                        'conditions' => array(
                            'Category.menu_id = Menu.id'
                        )
                    )
                )
            ));

            $this->upload_image1($menu[0]['Menu']['title'], $this->data['Product']['image1']['name'], $this->data['Product']['image1']['tmp_name']);
            $this->upload_image1_small($this->data['Product']['image1_small']['name'], $this->data['Product']['image1_small']['tmp_name']);
            
            $this->Product->create();
             
              $this->data['Product']['image1']=$this->data['Product']['image1']['name'];
              $this->data['Product']['image1_small']=$this->data['Product']['image1_small']['name'];
            
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
