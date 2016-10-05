<?php
/**
    @CLS_NAME: Database
    @AUTHOR: nady shalaby
    @DATE: 8/22/2015
    @DESC:
*/

class Database{
    const ASSOC = 0;
    const NUM    = 1;
    const BOTH   = 2;
    const ClS  = 3;
    const OBJ     = 4;
    private $host;
    private $username;
    private $password;
    private $db;
    private $query;
    private $conn = null;
    private $result = null;

    function __construct($host , $db  , $username , $password ){
        $this->host = $host;
        $this->db = $db;
        $this->username = $username;
        $this->password = $password;

        try{
            $this->conn = new PDO("mysql:host=$host;dbname=$db" , $username , $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        }catch(PDOExecption $ex){
            $ex->getMessage();
            die("SQL CONNECTION ERROR");
        }
    }

    function setQuery($query , $vals = array()){
        if(!empty($query)){
            if(empty($vals)){
                $this->result = $this->conn->query($query);
                return true;
            }else{
                $this->result = $this->conn->prepare($query);
                $this->result->execute($vals);
                return true;
            }
        }

        return false;
    }
    function setMode($mode = 0 , $class = ""){
         switch($mode){
            case 0 :
            $this->result->setFetchMode(PDO::FETCH_ASSOC);
            break;

             case 1 :
            $this->result->setFetchMode(PDO::FETCH_NUM);
            break;

             case 2 :
            $this->result->setFetchMode(PDO::FETCH_BOTH);
            break;

             case 3 :
            $this->result->setFetchMode(PDO::FETCH_CLASS , $class);
            break;

             case 4 :
            $this->result->setFetchMode(PDO::FETCH_OBJ);
            break;
             default:
             $this->result->setFetchMode(PDO::FETCH_ASSOC);
        }
    }

    function getRow($num = 0){
        if($num > 0){
            for($i = 0 ; $i < $num ; $i++){
                $row = $this->result->fetch();
            }
            return $row;
        }
        return $this->result->fetch();
    }

    function getAll(){
         return $this->result->fetchAll();
    }

    function countOfRows(){
        return $this->result->rowCount();
    }

    function getLastId(){
        return $this->conn->lastInsertId();
    }

}
