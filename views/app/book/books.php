<?php include(VIEWS . '_partials/header.php'); ?>

<h1>Livres papiers</h1>

<?php foreach ($books as $book) : ?>
    <div class="card-book">
        <a href="<?= BASE_PATH . 'book/show?id=' . $book['id']; ?>">
            <div class="coverAndTitle">
                <img src="<?= BASE . 'upload/book/' . $book['photo']; ?>" alt="Image de couverture" id="coverBook" style="height: 400px;">
                <h3><?= $book['title']; ?></h3>
            </div>
            <p><?= $book['status']; ?></p>
            <p><?= $book['synopsis']; ?></p>
        </a>
    </div>
<?php endforeach; ?>



<?php include(VIEWS . '_partials/footer.php'); ?>