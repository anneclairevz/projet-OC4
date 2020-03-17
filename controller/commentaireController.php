<?php

// Chargement des classes
namespace Controller;


use model\billetManager; // use remplace require_once grace à l'autoloader
use model\commentaireManager;
//require_once('model/CommentaireManager.php');


class CommentaireController{


function listPosts()
{
    $billetManager = new BilletManager(); // Création d'un objet
    $posts = $billetManager->getPosts(); // Appel d'une fonction de cet objet

    require('view/frontend/listPostsView.php'); //pas encore créé!
}

function post()
{
    $billetManager = new BilletManager();
    $commentaireManager = new CommentaireManager();

    $billet = $postManager->getPost($_GET['id']);
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
