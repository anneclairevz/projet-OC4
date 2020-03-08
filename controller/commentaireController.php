<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mon livre</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <h1>Mon super blog !</h1>
    <p><a href="index.php">Retour à la liste des billets</a></p>

    <div class="news">
        <h3>
            <?= htmlspecialchars($post['title']) ?>
            <em>le <?= $post['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($post['content'])) ?>
        </p>
    </div>

    <h2>Commentaires</h2>

    <?php
        while ($commentaire = $commentaires->fetch())
        {
        ?>
    <p><strong><?= htmlspecialchars($commentaire['auteur']) ?></strong> le <?= $commentaire['commentaire_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($commentaire['commentaire'])) ?></p>
    <?php
        }
        ?>
</body>

</html>
