<?php

class Sql extends PDO {

private $conn;

 public function __construct (){


    $this->conn = new PDO ("msql:host=localhost;dbname=dbphp7", "root", "");

}


private function setParams($statment, $parameteres = array()){

    foreach ($statment as $key => $value) {
        
        $this->setParam();
    }
}

private function setParam($statment, $key, $value){

    $statment->bindParam($key, $value);

}


public function query($rawquery, $params = array()){

    $stmt = $this->conn->prepare($rawquery);

    $this->setParams($stmt, $params);

    $stmt->execute();

    return $stmt;

}

public function select($rawquery, $params=array()):array 
{

    $stmt = $this->query($rawquery, $params);

    return $stmt->fetchAll(PDO::FECTH_ASSOC);


}

}


?>