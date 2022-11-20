<?php include(VIEWS . '_partials/header.php'); ?>
<?php $user = User::findById(['id' => $book['id_user']]); ?>


<div class="btn text-light" style="background: grey;"><?= $book['target_reader']; ?></div>
<div class="btn bg-lightBrown"><?= $book['status']; ?></div>
<h2><?= $book['title']; ?></h2>
<img src="<?= BASE . 'upload/book/' . $book['photo']; ?>" alt="Couverture de <?= $book['title']; ?>" height="400">

<p><strong>Synopsis: <br></strong><?= $book['synopsis']; ?></p>
<p><strong>Auteur: </strong><?= $book['author']; ?></p>
<p><strong>Editeur: </strong><?= $book['editor']; ?></p>
<p><strong>Publié en: </strong><?= $book['date_publication']; ?></p>


<div class="" style="overflow: hidden; width: 10vh; border-radius:150px; background-position: center/cover;">
    <a href="<?= BASE_PATH . 'user/profile?id=' . $book['id_user']; ?>">
        <img src="<?= BASE . 'upload/photos/profile/' . $user['photo_profile']; ?>" style="height: 10vh; overflow: hidden;  border-radius:150px;" alt="Photo de profil">
    </a>
</div>
<?= $user['pseudo']; ?>






















<?php include(VIEWS . '_partials/footer.php'); ?>