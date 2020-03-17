<?php require('view/frontend/header.php') ?>

<?= $billet->titre() ?>
<?= $billet->texte() ?>

<?php
foreach ($commentaires as $commentaire){ ?>
<h4><?= $commentaire->texte() ?></h4>

<?php } ?>


<?php require('view/frontend/footer.php') ?>
