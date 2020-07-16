<?php

class Model{
    private $host = "127.0.0.1";
    private $dbname = "poly-mvc";
    private $dbUsername = "root";
    private $dbPassWord = "";
    public function __construct() {
        

        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", 
        $this->dbUsername, $this->dbPassWord);

        
    }
    static function all(){
        $model = new static();
        $query = "select * from $model->table";
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS,get_class($model));
        return $result;
    }

    public static function find($id){
        $model = new static();
        $query = "select * from $model->table where id = $id";
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS,get_class($model));
        if(count($result)>0){
            return $result[0];
        }
        return null;
    }

    public static function where($col,$condition,$value){
        $model = new static();
        $query = "select * from $model->table where $col $condition $value";
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS,get_class($model));
        return $result;
    }

    public static function delete($id){
        $model = new static();
        $query = "delete from $model->table where id = $id";
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        return;
    }
}

?>