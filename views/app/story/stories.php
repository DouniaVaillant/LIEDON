<?php include(VIEWS . '_partials/header.php'); ?>

<h1>Livres papiers</h1>

<?php foreach ($stories as $story) : ?>
    <a href="<?= BASE_PATH . 'library?id=' . $story['id']; ?>"><i class="fa-solid fa-bookmark darkGreen" style="font-size: 2rem; text-shadow: 1px 1px 2px var(--lightBrown);"></i></a>
    <a href="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>">
        <div class="right">
            <img src="<?= BASE . 'upload/story/' . $story['photo']; ?>" alt="Image de couverture" style="height: 400px;">
            <h3><?= $story['title']; ?></h3>
        </div>
        <div class="left">
            <p><?= $story['status']; ?></p>
            <p class="synopsis"><?= $story['synopsis']; ?></p>
        </div>
    </a>
<?php endforeach; ?>



<?php include(VIEWS . '_partials/footer.php'); ?>