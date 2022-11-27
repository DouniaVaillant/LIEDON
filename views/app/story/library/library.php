<?php include(VIEWS . '_partials/header.php'); ?>

<h1>Bibliothèque</h1>


<?php foreach ($library as $data) : ?>

<img src="<?= BASE . 'upload/story/' . $data['photo']; ?>" style="height: 100px;" alt="Couverture - <?= $data['title']; ?>">
<?= $data['id_story']; ?>






<?php endforeach; ?>



















<?php include(VIEWS . '_partials/footer.php'); ?>