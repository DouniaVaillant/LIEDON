<?php include(VIEWS . '_partials/header.php'); ?>
<?php $user = User::findById(['id' => $story['id_user']]); ?>


<div class="btn text-light" style="background: grey;"><?= $story['target_reader']; ?></div>
<div class="btn bg-lightBrown"><?= $story['status']; ?></div>
<h2><?= $story['title']; ?></h2>
<img src="<?= BASE . 'upload/story/' . $story['photo']; ?>" alt="Couverture de <?= $story['title']; ?>" height="400">

<p><strong>Synopsis: <br></strong><?= $story['synopsis']; ?></p>
<p><strong>Langue: </strong><?= $story['language']; ?></p>
<p><strong>Publié le: </strong><?= $story['date_created']; ?></p>


<div class="" style="height: 10vh; overflow: hidden; width: 10vh; border-radius:150px;">
    <img src="<?= BASE . 'upload/photos/profile/' . $user['photo_profile']; ?>" style="height: 10vh;" alt="Photo de profil">
    <?= $user['pseudo']; ?>
</div>

<div class="col-3">
    <?php foreach ($chapters as $chapter) : ?>
        <a href="<?= BASE_PATH . 'story/chapter/show?id=' . $chapter['id']; ?>" class="list-group-item list-group-item-warning text-center rounded-2 py-2 my-2">
            <?= $chapter['title']; ?>
        </a>
    <?php endforeach; ?>
</div>


<?php include(VIEWS . '_partials/footer.php'); ?>