<?php

/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('home');
        $this->Auth->allow('search');
        $this->Auth->allow('productdetails');
    }

    /**
     * Controller name
     *
     * @var string
     */
    public $name = 'Pages';

    /**
     * This controller does not use a model
     *
     * @var array
     */
    public $uses = array('Menu', 'Category', 'Subcategory', 'Imageslider', 'Product');

    /**
     * Layout name
     *
     * @var array
     */
    public $layout = 'attirezone';

    public function home() {

        $this->set("menus", $this->Menu->find('all'));
        $this->set("categories", $this->Category->find("all"));
        $this->set("subcategories", $this->Subcategory->find("all"));
        $this->set("imagesliders", $this->Imageslider->find("all"));
    }

    public function search($param = NULL) {
        $this->set("products", $this->Product->find("all"));
        $this->set("menus", $this->Menu->find('all'));
        $this->set("categories", $this->Category->find("all"));
        $this->set("subcategories", $this->Subcategory->find("all"));
        $this->set("param", $param);


        $subcategories = array();

        $menuname = "";

        if ($param) {
            $search = split("-", $param);
            switch ($search[0]) {
                case "menu":

                    $menuname = $this->Menu->find("all", array(
                        'fields' => array('Menu.title'),
                        'conditions' => array(
                            'Menu.id' => array($search[1])
                        )
                    ));

                    $menuname = $menuname[0]['Menu']['title'];


                    $categories = $this->Category->find("list", array(
                        'fields' => array('Category.id'),
                        'conditions' => array('Category.menu_id' => $search[1])
                    ));

                    $subcategories = $this->Subcategory->find("list", array(
                        'fields' => array('Subcategory.id'),
                        'conditions' => array('Subcategory.category_id' => $categories)
                    ));


                    $this->paginate = array(
                        'limit' => 9,
                        'conditions' => array('Product.subcategory_id' => $subcategories),
                        'order' => array('product.id' => 'asc')
                    );


                    break;
                case "category":

                    $menuname = $this->Category->find("all", array(
                        'fields' => array('Category.title'),
                        'conditions' => array(
                            'Category.id' => $search[1]
                        )
                    ));

                    $menuname = $menuname[0]['Category']['title'];

                    $subcategories = $this->Subcategory->find("list", array(
                        'fields' => array('Subcategory.id'),
                        'conditions' => array('Subcategory.category_id' => $search[1])
                    ));


                    $this->paginate = array(
                        'limit' => 9,
                        'conditions' => array('Product.subcategory_id' => $subcategories),
                        'order' => array('product.id' => 'asc')
                    );


                    break;
                case "subcategory":


                    $menuname = $this->Subcategory->find("all", array(
                        'fields' => array('Subcategory.title'),
                        'conditions' => array('Subcategory.id' => $search[1])
                    ));

                    $menuname = $menuname[0]['Subcategory']['title'];

                    $subcategories = $search[1];

                    $this->paginate = array(
                        'limit' => 9,
                        'conditions' => array('Product.subcategory_id' => $subcategories),
                        'order' => array('product.id' => 'asc')
                    );

                    break;
            }
        }


        if ($this->request->data) {
            $price1 = split("-", $this->request->data['price'][0]);
            $price2 = split("-", $this->request->data['price'][count($this->request->data['price']) - 1]);
            $min_price = $price1[0];
            $max_price = $price2[1];


            $this->paginate = array(
                'limit' => 9,
                'conditions' => array(
                    'Product.subcategory_id' => $subcategories,
                    'AND' => array(
                        'Product.inrprice >=' => $min_price,
                        'AND' => array(
                            'Product.inrprice <=' => $max_price,
                        )
                    )
                ),
                'order' => array('product.id' => 'asc')
            );
        }

        $this->set('products', $this->paginate('Product'));
        $this->set('menuname', $menuname);
    }

    public function productdetails($productID = NULL) {
        $this->set("menus", $this->Menu->find('all'));
        $this->set("categories", $this->Category->find("all"));
        $this->set("subcategories", $this->Subcategory->find("all"));

        $product = $this->Product->find("all", array(
            'conditions' => array(
                'OR' => array(
                    'Product.id' => $productID,
                    'Product.code' => $productID
                )
            )
        ));

        $this->set('product', $product);


        if ($this->request->data("Buy")) {

            if ($this->Session->check('Auth.User')) :
                $this->buyproduct($this->Auth->user('id'), $productID);
            else :
                $this->redirect("/users/login/".$productID);
            endif;
        }
    }
    
    public function buyproduct($user_id,$productId){
        //$this->Session->setFlash($user_id."bought ".$productId);
        $this->redirect("/");       
    }

}
