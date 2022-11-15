<?php include(VIEWS . '_partials/header.php'); ?>



<h1>@<?= $user['pseudo']; ?></h1>

<div class="" style="height: 100px; width: 100px; overflow: hidden; border-radius: 150px;">

    <img src="<?= BASE . 'upload/photos/profil/' . $user['photo_profil']; ?>" alt="" style="width: 200%;">
</div>

<p><?= $user['lastname']; ?></p>
<p><?= $user['firstname']; ?></p>
<p><?= $user['roles']; ?></p>
<p><?= $user['email']; ?></p>
<p><?php echo $user['way']." ".$user['address']." ".$user['city']; ?></p>
<p><?= $user['birthday']; ?></p>
<p><?= $user['gender']; ?></p>
<p><?= $user['date_registration']; ?></p>

<a href="<?= BASE_PATH . "user/profil/edit?id=" . $user['id']; ?>" class="btn btn-success">Modifier mes informations</a>



























<?php include(VIEWS . '_partials/footer.php'); ?>