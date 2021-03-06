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
        $this->Auth->allow('about');
        $this->Auth->allow('contactus');
        $this->Auth->allow('termsandcondition');
        $this->Auth->allow('cart');
        $this->Auth->allow('checkout');
        $this->Auth->allow('removefromcart');
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
    public $uses = array('Menu', 'Category', 'Subcategory', 'Imageslider', 'Product', 'User', 'Transaction', 'Transactiondetail');

    /**
     * Layout name
     *
     * @var array
     */
    public $layout = 'attirezone';

    public function home() {

        $menus = $this->Menu->find('all');

        $this->set("menus", $menus);
        $this->set("categories", $this->Category->find("all"));
        $this->set("subcategories", $this->Subcategory->find("all"));
        $this->set("imagesliders", $this->Imageslider->find("all"));


        $newproducts = array();

        foreach ($menus as $menu) {

            $categories = $this->Category->find("list", array(
                'fields' => array('Category.id'),
                'conditions' => array('Category.menu_id' => $menu['Menu']['id'])
            ));

            $subcategories = $this->Subcategory->find("list", array(
                'fields' => array('Subcategory.id'),
                'conditions' => array('Subcategory.category_id' => $categories)
            ));

            $newproducts[$menu['Menu']['title']] = $this->Product->find("all", array(
                'conditions' => array(
                    'Product.subcategory_id' => $subcategories,
                    'AND' => array('newattraction' => '1')
                )
            ));
        }


        //var_dump($newproducts);


        $featuredproducts = $this->Product->find("all", array(
            'conditions' => array('Product.featured' => '1')
        ));

        $this->set("newproducts", $newproducts);
        $this->set("featuredproducts", $featuredproducts);
    }

    public function search($param = NULL) {
        //$this->set("products", $this->Product->find("all"));
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

        
        if (isset($this->request->data['price'])) {
           
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

        if (isset($this->request->data['s']) ){

           $subcategory_id = $this->Subcategory->find('list', array(

                 'fields'=>array('Subcategory.id'),
                 'conditions' => array(
                    
                    'Subcategory.title LIKE' => "%". $this->request->data['s'] ."%"
            )));



            $this->paginate = array(
                'limit' => 9,
                'conditions' => array('Product.subcategory_id' => $subcategory_id),
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

        $menu = $this->Menu->query("SELECT menus.title FROM products "
                . "JOIN subcategories ON subcategories.id=products.subcategory_id "
                . "JOIN categories ON categories.id=subcategories.category_id "
                . "JOIN menus ON menus.id=categories.menu_id "
                . "WHERE products.id='" . $productID . "' OR products.code='" . $productID . "'");

        $this->set('product', $product);
        $this->set('menu', $menu);

        if ($this->request->data("Buy")) {

            $cart = $this->Session->read("Cart");
            $cart[] = $productID;
            $this->Session->write("Cart", $cart);
            $this->redirect("/pages/cart");
        }
    }

    public function cart() {
        $this->set("menus", $this->Menu->find('all'));
        $this->set("categories", $this->Category->find("all"));
        $this->set("subcategories", $this->Subcategory->find("all"));
        $this->set("imagesliders", $this->Imageslider->find("all"));


        $products = $this->Product->find("all", array(
            'conditions' => array(
                'OR' => array(
                    'Product.id' => $this->Session->read("Cart"),
                    'Product.code' => $this->Session->read("Cart")
                )
            )
        ));


        $this->set("products", $products);
    }

    public function removefromcart($productId) {
        $cart = $this->Session->read("Cart");
        $cart = array_merge(array_diff($cart, array($productId)));
        $this->Session->write("Cart", $cart);
        $this->redirect("/pages/cart");
    }

    public function checkout() {
        $this->set("menus", $this->Menu->find('all'));
        $this->set("categories", $this->Category->find("all"));
        $this->set("subcategories", $this->Subcategory->find("all"));
        $this->set("imagesliders", $this->Imageslider->find("all"));

        $products = $this->Product->find("all", array(
            'conditions' => array(
                'OR' => array(
                    'Product.id' => $this->Session->read("Cart"),
                    'Product.code' => $this->Session->read("Cart")
                )
            )
        ));

        $roles = $this->User->Role->find('all', array(
            'fields' => array(
                'Role.id'
            ),
            'conditions' => array(
                'Role.title' => 'USER'
            )
        ));
        $countries = $this->User->Country->find('list');
        $this->set(compact('roles', 'countries'));


        $this->set("products", $products);


        if ($this->request->is('post')) {

            $this->request->data['User']['password'] = AuthComponent::password(1234);
            if ($this->User->save($this->request->data['User'])) {
                $this->Session->setFlash(__('The user has been saved.'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }



            $this->Transaction->create();
            $this->request->data['Transaction']['user_id'] = $this->User->getLastInsertID();
            if ($this->Transaction->save($this->request->data['Transaction'])) {
                $this->Session->setFlash(__('The transaction has been saved.'));
            } else {
                $this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
            }


            foreach ($products as $product) {

                $data = array(
                    'transaction_id' => $this->Transaction->getLastInsertID(),
                    'product_id' => $product['Product']['id'],
                    'quantity' => '1',
                    'price' => $product['Product']['inrprice']
                );

                $this->Transactiondetail->create();
                if ($this->Transactiondetail->save($data)) {
                    $this->Session->setFlash(__('Order has been placed, The products will be delivered to you shortly'));
                    $this->Session->delete('Cart');
                    return $this->redirect("/pages/checkout");
                } else {
                    $this->Session->setFlash(__('The transactiondetail could not be saved. Please, try again.'));
                    break;
                }
            }
        }
    }

    public function about() {
        $this->set("menus", $this->Menu->find('all'));
        $this->set("categories", $this->Category->find("all"));
        $this->set("subcategories", $this->Subcategory->find("all"));
        $this->set("imagesliders", $this->Imageslider->find("all"));
    }

    public function contactus() {
        $this->set("menus", $this->Menu->find('all'));
        $this->set("categories", $this->Category->find("all"));
        $this->set("subcategories", $this->Subcategory->find("all"));
        $this->set("imagesliders", $this->Imageslider->find("all"));
    }

    public function termsandcondition() {
        $this->set("menus", $this->Menu->find('all'));
        $this->set("categories", $this->Category->find("all"));
        $this->set("subcategories", $this->Subcategory->find("all"));
        $this->set("imagesliders", $this->Imageslider->find("all"));
    }

}
