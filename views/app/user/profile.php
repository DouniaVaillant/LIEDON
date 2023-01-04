<?php include(VIEWS . '_partials/header.php');

if (!isset($_SESSION['user'])) {
    header('location:../');
    exit();
}

?>

<div class="bgPageProfile"></div>
<div class="pageProfile">

    <div class="banner">

        <img class="photoBanner" src="<?= BASE . 'upload/photos/banner/' . $user['photo_banner']; ?>" alt="Image de bannière">

        <div class="profile-info">
            <img class="profile-photoProfile" src="<?= BASE . 'upload/photos/profile/' . $user['photo_profile']; ?>" alt="Photo de profil">
            <h1>@<?= $user['pseudo']; ?></h1>
        </div>

    </div>

    <div class="profile-redirect">

        <a href="<?= BASE_PATH . 'notifications'; ?>" class="">
            <div class="profile-btn">
                Notifications
            </div>
        </a>

        <a href="<?= BASE_PATH . 'user/books'; ?>" class="">
            <div class="profile-btn">
                Mes Livres
            </div>
        </a>

        <a href="<?= BASE_PATH . 'user/stories'; ?>" class="">
            <div class="profile-btn">
                Mes Histoires
            </div>
        </a>

        <a href="#popup" class="button">
            <div class="profile-box profile-btn">
                Mes Informations
            </div>
        </a>

        <div class="profile-overlay" id="popup">
            <div class="profile-popup">
                <h2>Mes informations</h2>
                <a href="#" class="profile-cross">&times;</a>
                <h4>Email:</h4>
                <p><?= $user['email']; ?></p>
                <h4>Nom, prénom et pseudo:</h4>
                <p><?= $user['lastname']; ?> <?= $user['firstname']; ?> @<?= $user['pseudo']; ?></p>
                <h4>Date de naissance:</h4>
                <p><?= $user['birthday']; ?></p>
                <h4>Adresse:</h4>
                <p><?= $user['way']; ?> <?= $user['address']; ?> <?= $user['city']; ?> <?= $user['postal_code']; ?> <?= $user['country']; ?></p>
            </div>
        </div>

    </div>

    <div class="profile-btns-session mt-4">
        <a href="<?= BASE_PATH . "user/profile/edit?id=" . $user['id']; ?>" class="profile-btn-session">Modifier mes informations</a>
        <a href="<?= BASE_PATH . "user/logOut"; ?>" class="profile-btn-session">Me déconnecter</a>
    </div>


</div>
<?php include(VIEWS . '_partials/footer.php'); ?>