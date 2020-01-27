<?php

class Billet{
    
    private $_id;
    private $_titre;
    private $_date;
    private $_texte;
    
    
    //getters
    
    public function id()
    {
        return $this->_id;
    }
    
    public function titre()
    {
        return $this->_titre;
    }
    
    public function date() 
    {
        return $this->_date;
    }
    
    public function texte()
    {
        return $this->_texte;
    }
    
    
    //setters
    
    public function setId($id)
    {
        
    $id = (int) $id;
        
        if ($id > 0)
        
        {
           $this->$_id = $id; 
        }
    }
    
    public function setTitre($titre)
    {
      
        if (is_string($titre))
        
        {
           $this->$_titre = $titre; 
        }
    }
    
    
    public function setDate($date)
    {
           $this->$_date = $date; 
        
    }
        
    
}
    
    
    
    
    
    
    
    //fonctions a bouger ds manager
    
        public function getTitre(){
        
    }

        public function getDate () {
         
     }
    
        public function creerBillet(){
        
    }
    
        public function publierBillet(){
        
    }
    
        public function editerBillet(){
        
    }
    
    
        public function effacerBillet (){
        
    }
        
        
   

?>
