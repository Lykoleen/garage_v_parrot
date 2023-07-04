<h1>Nos articles</h1>

<?php foreach ($cars as $car) : ?>
    <h2><?= $car['title']?></h2>
    <small>Publier le <?= $car['publication_date']?></small>
    <p><?= $car['description']?></p>
    <a href="show_html.php?id<?= $car['id'] ?>">Lire la suite"</a>
    <a href="delete_announcement.php?id<?= $car['id'] ?>" onclick="return window.confirm('Etes-vous sûr de vouloir supprimer cette annonce ?')">Supprimer</a>
<?php endforeach ?>
