<?php

namespace Model;

use PDO;

use Model\Commentaire; 
use Model\Manager;

class CommentaireManager extends Manager
{
    public function getComments($billetId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, id_billet, texte, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date, statut FROM commentaires WHERE id_billet = ? ORDER BY date DESC');
        $req->execute(array($billetId));
        $commentaires = [];
        $rows = $req->fetchall();
        foreach ($rows as $data) {
            $commentaires[] = new Commentaire($data);
        }
        return $commentaires;
       
    }

    public function postComment($billetId, $auteur, $commentaire)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO comments(id_billet, status, texte, date) VALUES( :status :texte :date NOW())');
        $affectedLines = $req->execute(array($postId, $comment));

        return $affectedLines;
    }

}
