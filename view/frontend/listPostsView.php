<?php require('header.php') ?>

<div class='billets liste'>
    <?php foreach ($billets as $billet) { ?>
    <article class='billet'>
        <h2><?= $billet->titre() ?> </h2>
        <div class='content'><?php substr($billet->texte(), 0, 50) ?>...</div>
    </article>";
    <a href='http://localhost/projet4/index.php?action=post&id=<?= $billet->id() ?>' class='billet lien'>Lire la suite</a>

    <?php } ?>
</div>


<?php require('footer.php') ?>
