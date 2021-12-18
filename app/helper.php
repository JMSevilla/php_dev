<?php
//Receiving data from Javascript or Frontend 
spl_autoload_register('route_into_model');
if(isset($_POST['validateTrigger']) == false){
    $data = [
        "fname" => $_POST['txtfirstname'],
        "lname" => $_POST['txtlastname']
    ];
   $callback = new DataModel();
   $callback->postData($data);
}

function route_into_model(){
    include_once "model.php";
}