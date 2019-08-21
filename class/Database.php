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
    private $dbuser='root';
    private $dbhost='127.0.0.1';
    private $dbpassword='azer';
    
    public function __construct() 
    {
        
    }
    
    protected function connect()
    {
        $pdo = new PDO("'mysql:host=$this->dbhost;dbname=$this->dbname','$this->dbuser', '$this->dbpassword'");
        return $pdo;
    }
    
    /*
     *  @param string
     * Envoie la requete et la confirme
     */

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
    

