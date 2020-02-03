<?php

class Utilisateur{
    
    private $_id;
    private $_login;
    private $_password;
     

//getters
    
public function id ()
{
    return $this->_id;
}

public function login()
{
    return $this->_login;   
}

public function password()
{
    return $this->_password;
}


//setters
    

 public function setId($id)   
 {
     $id = (int) $id;
     
     if ($id > 0)
         
     {
         $this->_id = $id;
     }
 }
    
    
        
    public function setLogin($login)   
    {
         $this->_login = $login;
     }

    
    public function setPassword($password)   
    
     {
         $this->$_password = $password;
 }


}
?>
