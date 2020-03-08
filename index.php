<?php

require 'autoloader.php';
Autoloader::register();

//use controller , puis j appelle toutes mes classes managers et controller dbmanager puis je fais un $billet

use controller\billetController;

use controller\commentaireController;
use controller\utilisateurController;


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listBillets') {
        $billetController = new BilletController();
        $billetController->listBillets();
    }
    else if ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
           $billetController = new BilletController(); 
            $billetController->post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
}
else {
    $billetController = new BilletController();
    $billetController->listBillets();
}


require('view/frontend/template.php');



?>
