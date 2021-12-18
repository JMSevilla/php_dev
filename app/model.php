<?php

spl_autoload_register('route_controller');

interface IPost { 
    public function postData($data);
}

class DataModel extends dataController implements IPost {
    public function postData($data){
       $callback = $this->insertData($data);
    }
}

function route_controller() {
    include_once "controller.php";
}