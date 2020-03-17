<?php require('view/frontend/header.php') ?>



<section id="three" class="wrapper style1">
    <div class="container">
        <header class="major special">
            <h2>Billet simple pour l'Alaska</h2>
            <p>Découvrez chapitre après chapitre l'intégralité de mon dernier roman.</p>
        </header>
        <div class="feature-grid">

            <?php foreach ($billets as $billet) { ?>

            <div class="feature">
                <div class="image rounded"><img src="images/pic04.jpg" alt="" /></div>
                <div class="content">
                    <header>
                        <h4><?= $billet->titre() ?></h4>
                    </header>
                    <p>"<?php echo substr($billet->texte(), 0, 50) ?>..." <a href='http://localhost/projet4/index.php?action=post&id=<?= $billet->id() ?>' class='billet lien'>Lire la suite</a></p>
                </div>
            </div>

            <?php } ?>


        </div>
</section>




<?php require('view/frontend/footer.php') ?>
