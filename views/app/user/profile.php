<?php include(VIEWS . '_partials/header.php'); ?>

<div class="" style="height: 20vh; overflow: hidden;">
    <img src="<?= BASE . 'upload/photos/banner/' . $user['photo_banner']; ?>" alt="" style="width: 100vw;">
</div>

<h1>@<?= $user['pseudo']; ?></h1>

<div class="" style="height: 100px; width: 100px; overflow: hidden; border-radius: 150px;">
    <img src="<?= BASE . 'upload/photos/profile/' . $user['photo_profile']; ?>" alt="" style="width: 200%;">
</div>

<p><?= $user['lastname']; ?></p>
<p><?= $user['firstname']; ?></p>
<p><?= $user['roles']; ?></p>
<p><?= $user['email']; ?></p>
<p><?= $user['way'] . " " . $user['address'] . " " . $user['city']; ?></p>
<p><?= $user['birthday']; ?></p>
<p><?= $user['gender']; ?></p>
<p><?= $user['date_registration']; ?></p>

<a href="<?= BASE_PATH . "user/profile/edit?id=" . $user['id']; ?>" class="btn btn-success">Modifier mes informations</a>



























<?php include(VIEWS . '_partials/footer.php'); ?>