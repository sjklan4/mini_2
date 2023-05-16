<?php

//DB에서 회원 정보를 불러오는 부분의 class 구문이다. 
namespace application\model;

use PDO;
USE Exception;

class Model{
    protected $conn;

    public function __construct(){
        $dns = "mysql:host="._DB_HOST.";dbname="._DB_NAME.";charset="._DB_CHARSET;
        $option = 
        [
            PDO::ATTR_EMULATE_PREPARES      => false
            ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION
            ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
        ];

        try{
            $this->conn = new PDO($dns, _DB_USER, _DB_PASSWORD, $option);
        }catch(Exception $e){
            echo "DB Connect Error : ".$e->getMessage();
            exit();
        }
    }

    //DB Connect 파기
    protected function closeConn(){
        $this->conn = null;
    }
}

?>