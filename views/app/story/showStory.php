<?php include(VIEWS . '_partials/header.php'); ?>
<?php $user = User::findById(['id' => $story['id_user']]); ?>


<div class="btn text-light" style="background: grey;"><?= $story['target_reader']; ?></div>
<div class="btn bg-lightBrown"><?= $story['status']; ?></div>
<h2><?= $story['title']; ?></h2>
<img src="<?= BASE . 'upload/story/' . $story['photo']; ?>" alt="Couverture de <?= $story['title']; ?>" height="400">

<p><strong>Synopsis: <br></strong><?= $story['synopsis']; ?></p>
<p><strong>Langue: </strong><?= $story['language']; ?></p>
<p><strong>Publié le: </strong><?= $story['date_created']; ?></p>


<div class="">
    <?php if (isset($user)) : ?>
        <img src="<?= BASE . 'upload/photos/profile/' . $user['photo_profile']; ?>" class="roundProfile" alt="Photo de profil">
        <?= $user['pseudo']; ?>
    <?php else : ?>
        <p><i>Utilisateur supprimé</i></p>
    <?php endif; ?>
</div>

<div class="col-3">
    <?php if (!empty($chapters)) : ?>
        <?php foreach ($chapters as $chapter) : ?>
            <a href="<?= BASE_PATH . 'story/chapter/show?id=' . $chapter['id']; ?>" class="list-group-item list-group-item-warning text-center rounded-2 py-2 my-2">
                <?= $chapter['title']; ?>
            </a>
        <?php endforeach; ?>
    <?php else : ?>
        <p><i>Aucun chapitre</i></p>
    <?php endif; ?>
</div>


<?php include(VIEWS . '_partials/footer.php'); ?>