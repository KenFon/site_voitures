<?php

/**
 * Description of Database
 * 
 * Gere les requétes de la base de donnée 
 * 
 * @author ken
 * 
 */

class Database {
    
    private $dbname;
    private $dbuser;
    private $dbhost;
    private $dbpassword;
    
    public function __construct(string $dbname, string $dbuser, string $dbhost, string $dbpassword) 
    {
       $this->dbname=$dbname; 
       $this->dbhost=$dbhost;
       $this->dbuser=$dbuser;
       $this->dbpassword=$dbpassword;
    }
    
    private function connect()
    {
        $pdo = new PDO("'mysql:host=$this->dbhost;dbname=$this->dbname','$this->dbname', '$this->dbpassword'");
        return $pdo;
    }
    
    private function prepare()
    {
        $prepare = $this->connect();
        $prepare->prepare('INSERT INTO PRODUCT VALUE(NULL, :nom, :description ect ect');
        return $prepare;
    }
    
    private function is_ok($add)
    {
        $insertIsOk = $products->execute();
        if($insertIsOk){
            $message="c'est ok";
        }else{
            $message="c'est pas ok";
        }
    }
    
    public function add($parametre,$parametre)
    {
       $add = $this->prepare();
       $add->binValue('nom', $parametre1, PDO::PARAM_STR_CHAR);
       
       $message = $this->is_ok($add);
       
       return $message;
    }
}
    

