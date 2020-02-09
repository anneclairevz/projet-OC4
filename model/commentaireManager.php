<?php
class CommentaireManager
{
    public function getComments($billetId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, texte, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($billetId));

        return $commentaire;
    }

    public function postComment($billetId, $auteur, $commentaire)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, status, texte, date) VALUES( :status :texte :date NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    private function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', 'root');
        return $db;
    }
}
