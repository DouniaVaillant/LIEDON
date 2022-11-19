<?php include(VIEWS . '_partials/header.php'); ?>
<?php $user = User::findById(['id' => $story['id_user']]);?>


<div class="btn text-light" style="background: grey;"><?= $story['target_reader']; ?></div>
<div class="btn bg-lightBrown"><?= $story['status']; ?></div>
<h2><?= $story['title']; ?></h2> 
<img src="<?= BASE . 'upload/story/' . $story['photo']; ?>" alt="Couverture de <?= $story['title']; ?>" height="400">

<p><strong>Synopsis: <br></strong><?= $story['synopsis']; ?></p>
<p><strong>Langue: </strong><?= $story['language']; ?></p>
<p><strong>Publié le: </strong><?= $story['date_created']; ?></p>


<div class="" style="height: 10vh; overflow: hidden; width: 10vh; border-radius:150px;">
    <img src="<?= BASE . 'upload/photos/profile/' . $user['photo_profile']; ?>" style="height: 10vh;" alt="Photo de profil">
</div>
<?= $user['pseudo']; ?>




<?php include(VIEWS . '_partials/footer.php'); ?>