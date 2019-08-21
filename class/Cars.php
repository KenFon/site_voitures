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

    /*
     *  @param array
     *  Ajoute une voiture.
     */
    public function add_cars(array $parametre)
    {
        $prepare = $this->connect();
        $add = $prepare->prepare('INSERT INTO voitures VALUE(NULL, :marque, :model, :prix, :description, :garantie, :nbchevaux, :km, :couleur, :type, :carburant, :annee, :slug, :photo');
       
       $add->bindValue('marque', $parametre[0], PDO::PARAM_STR_CHAR);
       $add->bindValue('model', $parametre[1], PDO::PARAM_STR_CHAR);
       $add->bindValue('prix', $parametre[2], PDO::PARAM_INT);
       $add->bindValue('description', $parametre[3], PDO::PARAM_STR_CHAR);
       $add->bindValue('garantie', $parametre[4], PDO::PARAM_INT);
       $add->bindValue('nbchevaux', $parametre[5], PDO::PARAM_INT);
       $add->bindValue('km', $parametre[6], PDO::PARAM_INT);
       $add->bindValue('couleur', $parametre[7], PDO::PARAM_STR_CHAR);
       $add->bindValue('type', $parametre[8], PDO::PARAM_STR_CHAR);
       $add->bindValue('carburant', $parametre[9], PDO::PARAM_INT);
       $add->bindValue('annee', $parametre[10], PDO::PARAM_INT);
       $add->bindValue('slug', $parametre[11], PDO::PARAM_STR_CHAR);
       $add->bindValue('photo', $parametre[12], PDO::PARAM_STR_CHAR);

       
       $message = $this->is_ok($add);
       
       return $message;
    }
    
    public function remove_cars($id)
    {
       $prepare = $this->connect();
       $remove = $prepare->prepare('DELETE FROM voitures WHERE id=:id');
       $remove->execute(array(':id' => $id));
    }
    
    public function update_cars(array $parametre)
    {
        
    }
    
    public function show_cars(array $paremetre=[])
    {
        
    }
}
