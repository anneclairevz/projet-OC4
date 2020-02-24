<?php

class Commentaire { // extends Entity
    
    private $_id;
    private $_idBillet;
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
        return $this->_idBillet;
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
    
    public function setIdBillet($idBillet)
    {
      if ($idBillet > 0)
        
        {
           $this->_idbillet = $idBillet;
      }
    }
    
    
    public function setDate($date)
    {
           $this->_date = $date; 
        
    }
        
        
        
    
}

?>
