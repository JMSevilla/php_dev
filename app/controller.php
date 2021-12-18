<?php
spl_autoload_register('route_database');
interface postController { 
    public function insertData($data);
}

class dataController extends DatabaseIntergration implements postController { 
    public function insertData($data){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($this->php_prepare("insert into `userinfo` values(default, :fname, :lname, current_timestamp)")){
                $this->php_data_handling(":fname", $data['fname']);
                $this->php_data_handling(":lname", $data['lname']);
                if($this->php_execution()){
                    $this->php_response_success(1);
                }
            }
        }
    }
}

function route_database(){
    include_once "db.php";
}