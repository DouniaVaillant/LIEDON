<?php include(VIEWS . '_partials/header.php'); ?>



<h1>@<?= $user['pseudo']; ?></h1>
<p><?= $user['lastname']; ?></p>
<p><?= $user['firstname']; ?></p>
<p><?= $user['roles']; ?></p>
<p><?= $user['email']; ?></p>
<p><?php echo $user['way']." ".$user['address']." ".$user['city']; ?></p>
<p><?= $user['birthday']; ?></p>
<p><?= $user['gender']; ?></p>
<p><?= $user['date_registration']; ?></p>

<a href="<?= BASE_PATH . "user/profil/edit"; ?>" class="btn btn-success">Modifier mes informations</a>



























<?php include(VIEWS . '_partials/footer.php'); ?>