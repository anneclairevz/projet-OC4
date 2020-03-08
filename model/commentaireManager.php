<?php

namespace Model;

use PDO;

use Model\commentaire; 
use Model\Manager;

class CommentaireManager extends Manager
{
    public function getComments($billetId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, texte, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date FROM commentaires WHERE id_billet = ? ORDER BY date DESC');
        $comments->execute(array($billetId));
        var_dump ($comments);
        while($data = $comments->fetch()) {
            $commentaires[] = new Commentaire($data);
        }
    
    
        return $commentaires;
    }

    public function postComment($billetId, $auteur, $commentaire)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(id_billet, status, texte, date) VALUES( :status :texte :date NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

}
