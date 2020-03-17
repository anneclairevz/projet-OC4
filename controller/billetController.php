<?php

namespace Controller;


use model\billetManager; // use remplace require_once grace à l'autoloader
use model\commentaireManager;
//require_once('model/CommentaireManager.php');


class BilletController{


function listBillets()
{
    $billetManager = new BilletManager(); // Création d'un objet
    $billets = $billetManager->getPosts(); // Appel d'une fonction de cet objet
    //var_dump($posts);
    
    require('view/frontend/listPostsView.php'); //pas encore créé!
}

function post()
{
    $billetManager = new BilletManager();
    $commentaireManager = new CommentaireManager();

    $billet = $billetManager->getPost($_GET['id']);
    $commentaires = $commentaireManager->getComments($_GET['id']);
    require('view/frontend/postView.php');
}

function addComment($billetId, $commentaire)
{
    $commentaireManager = new CommentaireManager();

    $affectedLines = $commentaireManager->postComment($billetId, $commentaire);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $billetId);
    }
}
    
    }

?>
