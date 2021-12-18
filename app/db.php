<?php
//OOP
class DatabaseIntergration { 
    private $host = "localhost";
    private $username = "root";
    private $pwd = "";
    private $db = "dbtraining";
    private $statement;
    private $helper;

    private function connect() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db;
            $this->helper = new PDO($dsn ,$this->username, $this->pwd);
            $this->helper->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->helper;
        } catch (PDOException $th) {
            die("Could not connect to the database" . $th->getMessage());
        }
    }

    public function php_prepare($sql) { 
        return $this->statement = $this->connect()->prepare($sql);
    }

    public function php_data_handling($val, $param, $type = null) {
        if(is_null($type)) { 
            switch(true) { 
                case $type == 1:
                    $type = PDO::PARAM_INT;
                    break;
                case $type == 2:
                    $type = PDO::PARAM_BOOL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                break;
            }
        } 
        return $this->statement->bindParam($val, $param, $type);
    }

    public function php_execution(){
        return $this->statement->execute();
    }
    public function php_response_success($num){
        if($num == 1) {
            echo json_encode(array(
                "success" => 200
            ));
        } else if($num == 2) {
            echo json_encode(array(
                "error" => 404
            ));
        }
    }
} 
