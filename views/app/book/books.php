<?php include(VIEWS . '_partials/header.php'); ?>

<h1>Livres papiers</h1>

<?php foreach ($books as $book) : ?>
    <a href="<?= BASE_PATH . 'book/show?id=' . $book['id']; ?>">
        <img src="<?= BASE . 'upload/book/' . $book['photo']; ?>" alt="Image de couverture" style="height: 400px;">
        <h3><?= $book['title']; ?></h3>
        <p><?= $book['status']; ?></p>
        <p><?= $book['synopsis']; ?></p>
    </a>
<?php endforeach; ?>


























<?php include(VIEWS . '_partials/footer.php'); ?>