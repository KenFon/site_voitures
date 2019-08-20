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
    
    private $dbname='dbvoitures';
    private $dbuser;
    private $dbhost='127.0.0.1';
    private $dbpassword;
    
    public function __construct(string $dbname, string $dbuser, string $dbhost, string $dbpassword) 
    {
       $this->dbname=$dbname; 
       $this->dbhost=$dbhost;
       $this->dbuser=$dbuser;
       $this->dbpassword=$dbpassword;
    }
    
    protected function connect()
    {
        $pdo = new PDO("'mysql:host=$this->dbhost;dbname=$this->dbname','$this->dbuser', '$this->dbpassword'");
        return $pdo;
    }
    
    
    protected function is_ok($request)
    {
        $insertIsOk = $request->execute();
        if($insertIsOk){
            $message="c'est ok";
        }else{
            $message="c'est pas ok";
        }
        return $message;        
    }
    

}
    

