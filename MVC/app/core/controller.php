<?php

class Controller {

    

    public function view($viewName){

        //$this->view = new view;
        //require '../app/views/'.$viewName.'.php';
        require '../app/views/'.$viewName.'.php';
        $this->view = new $viewName();

    }

    public function model($modelName){
        //require '../app/models/'.$modelName.'.php';
        require '../app/models/'.$modelName.'.php';
        $this->model = new $modelName();
    }
}