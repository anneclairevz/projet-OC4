<?php

namespace Model;
use Model\Entity;

class Commentaire extends Entity { 
    
    private $_id;
    private $_id_billet;
    private $_date;
    private $_texte;
    private $_statut;

    
  
    //getters
    
    public function id()
    {
        return $this->_id;
    }
    
    public function id_billet()
    {
        return $this->_id_billet;
    }
    
    public function date() 
    {
        return $this->_date;
    }
    
    public function texte()
    {
        return $this->_texte;
    }
    
    public function statut()
    {
        return $this->_statut;
    }
    
    
    //setters
    
    public function setId($id)
    {
        
    $id = (int) $id;
        
        if ($id > 0)
        
        {
           $this->_id = $id; //$this = MaClass donc la propriete _id de ma classe contiendra la valeur $id
        }
    }
    
    public function setId_billet($id_billet)
    {
      if ($id_billet > 0)
        
        {
           $this->_id_billet = $id_billet;
      }
    }
    
    
    public function setDate($date)
    {
           $this->_date = $date; 
        
    }
        
    public function setTexte($texte)
    {
        $this->_texte = $texte;
    }
    public function setStatut($statut)
    {
        $this->_statut = $statut;
    }
    
        
    
}

?>
