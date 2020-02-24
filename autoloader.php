<?php

class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    public static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    public static function autoload($class){ 
        var_dump($class);
        if (file_exists($class . '.php')) {
            require $class . '.php';
        }
    }

}

?>
