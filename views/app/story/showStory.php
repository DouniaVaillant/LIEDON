<?php include(VIEWS . '_partials/header.php'); ?>
<?php $user = User::findById(['id' => $story['id_user']]); ?>

<?php if (isset($user)) : ?>
    <!-- <img src="<?= BASE . 'upload/photos/profile/' . $user['photo_profile']; ?>" class="roundProfile" alt="Photo de profil"> -->
    <h1><?= $user['pseudo']; ?> vous propose de découvrir:</h1>
<?php else : ?>
    <p><i>Utilisateur supprimé</i></p>
<?php endif; ?>

<h2><?= $story['title']; ?></h2>
<img src="<?= BASE . 'upload/story/' . $story['photo']; ?>" alt="Couverture de <?= $story['title']; ?>">

<p><strong>Synopsis: <br></strong><?= $story['synopsis']; ?></p>

<form action="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>" method="post">
    <button type="submit" class="btn" name="likes">
        <?php if ($likeFound && ($likeFound['likes'] == 1)) : ?>
            <i class="fa-solid fa-heart text-danger"></i>
        <?php else : ?>
            <i class="fa-regular fa-heart text-danger"></i>
        <?php endif; ?>
    </button>
</form>

<?= $story['status']; ?>
<p><strong>Publié le: </strong><?= $story['date_created']; ?></p>
<p><strong>Dernière modification: </strong><?= $story['date_created']; ?></p>

<!-- <?php if (!empty($chapters)) : ?>
    <?php foreach ($chapters as $chapter) : ?>
        <a href="<?= BASE_PATH . 'story/chapter/show?id=' . $chapter['id']; ?>" class="list-group-item list-group-item-warning text-center rounded-2 py-2 my-2">
            <?= $chapter['title']; ?>
        </a>
    <?php endforeach; ?>
<?php else : ?>
    <p><i>Aucun chapitre</i></p>
<?php endif; ?> -->

<a href="#">Lire</a>
<a href="#"><i class="fas fa-plus"></i></a>

<?= $story['target_reader']; ?>

<h3>Decouvrez</h3>
<?php foreach ($discoverStories as $story) : ?>
    <?= $story['title']; ?>
    <img src="<?= BASE . 'upload/story/' . $story['photo']; ?>" alt="">
<?php endforeach; ?>



<?php include(VIEWS . '_partials/footer.php'); ?>