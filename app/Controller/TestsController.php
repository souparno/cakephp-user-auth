<?php

class TestsController extends AppController {

    
    public function index() {
        $this->layout = "default_attirezone";

        $this->loadModel("menu");
        $this->loadModel("category");
        $this->loadModel("subcategory");
        $this->loadModel("product");
       

        $this->set("menus", $this->menu->find("all"));
        $this->set("categories", $this->category->find("all"));
        $this->set("subcategories", $this->subcategory->find("all"));
        $this->set('products', $this->product->find("all"));
    }

}
