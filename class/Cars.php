<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cars
 *
 * @author ken
 */
class Cars extends Database {
    
    
    private function insert_voiture()
    {
        $prepare = $this->connect();
        $request = $prepare->prepare('INSERT INTO PRODUCT VALUE(NULL, :nom, :description, :description, :description, :description, :description, :description
                :description, :description, :description, :description, :description');
        return $request;
    }
    
    public function add_cars(array $parametre)
    {
       $add = $this->insert_voiture();
       
       $add->binValue('nom', $parametre[0], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[0], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[1], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[2], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[3], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[4], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[5], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[6], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[7], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[8], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[9], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[10], PDO::PARAM_STR_CHAR);
       $add->binValue('nom', $parametre[11], PDO::PARAM_STR_CHAR);

       
       $message = $this->is_ok($add);
       
       return $message;
    }
    
    public function remove_cars($id)
    {
        
    }
    
    public function update_cars(array $parametre)
    {
        
    }
    
    public function show_cars(array $paremetre=[])
    {
        
    }
}
