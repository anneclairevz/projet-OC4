<?php 

namespace Model; // l'autoloader va enregistrer ce fichier comme appartenant à l'espace de nom "Model" (atention ce n'est pas le "dossier systeme model")
use PDO;

use Model\billet; // grâce aux espaces de noms enregistrés, j'appelle directement l'espace dont j'ai besoin et la ou les classes qui sont dedans
use Model\Manager;
//require('Manager.php');

class BilletManager extends Manager {
    
    public function getPosts() {
        
         $db = $this->dbConnect();
        
        $req = $db->prepare('SELECT ID, titre, texte, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date FROM billet ORDER BY date DESC LIMIT 0, 5');
        $req->execute();
        while($data = $req->fetch()) {
            $posts[] = new Billet($data);
        }
        return $posts;
    }
    
     public function getPost($billetId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, titre, texte, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date FROM billet WHERE id = ?');
        $req->execute(array($billetId));
        $post = $req->fetch(); // contient un tableau avec des paires clé/valeur donc j'accède aux données en faisant $post['titre']
        
        $myPost  = new Billet($post); // contient un objet hydraté grâce au tableau $post, donc j'accède aux données via les méthodes : $myPost->titre()

        return $myPost;
    }

    
    
    
}

?>
