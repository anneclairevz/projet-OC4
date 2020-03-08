<?php



echo $billet->titre();
echo $billet->texte();
    
foreach ($commentaires as $commentaire){
    echo $commentaire->texte();
}

/*$content = ob
//require template.php
echo $content*/
