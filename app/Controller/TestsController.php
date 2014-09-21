<?php


class TestsController extends AppController{
    
    
    public $layout = 'test';
    
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }




    public function index(){
        
    }
    
    
}

