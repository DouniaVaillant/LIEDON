<?php include(VIEWS . '_partials/header.php'); ?>

<h1>Livres papiers</h1>

<?php foreach ($stories as $story) : ?>
    <a href="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>">
        <img src="<?= BASE . 'upload/story/' . $story['photo']; ?>" alt="Image de couverture" style="height: 400px;">
        <h3><?= $story['title']; ?></h3>
        <p><?= $story['status']; ?></p>
        <p><?= $story['synopsis']; ?></p>
    </a>
<?php endforeach; ?>



<?php include(VIEWS . '_partials/footer.php'); ?>