<?php

require_once("/config.php");

class Core{

    private $pdo;
    private $getQuery;
    private $queryResult;
    public $lastInsertId;

    public function __construct(){

        $this->pdo = new PDO('mysql:host='. DB_HOST . ';dbname='. DB ,DB_USER,DB_PASS);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
    }


    public function execQuery($query){
       return  $this->pdo->query($query);
    }

    // Query Execute and return lastInsertedId() which is method of PDO

    public function Query($query){
        $this->pdo->query($query);
        $this->lastInsertId = $this->pdo->lastInsertedId();
        
     }


    public function fetch($query){
        $this->getQuery =  $this->execQuery($query);
       while( $this->queryResult = $this->getQuery->fetch(PDO::FETCH_ASSOC)){
           return $this->queryResult;
       }

    }


    public function fetchAll($query){
        $this->getQuery =  $this->execQuery($query);
       while( $this->queryResult = $this->getQuery->fetchAll(PDO::FETCH_ASSOC)){
           return $this->queryResult;
       }

    }




    
} 


?>