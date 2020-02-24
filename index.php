<?php

require 'autoloader.php';
Autoloader::register();

//use controller , puis j appelle toutes mes classes managers et controller dbmanager puis je fais un $billet



use controller\billetController;

use controller\commentaireController;
use controller\utilisateurController;

$billetController = new BilletController();
$billetController->listBillets();

?>
