<?php include(VIEWS . '_partials/header.php'); ?>

<h1>Accueil</h1>

<!-- RECHERCHE -->
<form action="<?= BASE_PATH; ?>" method="get">
    <input type="text" name="searchUser" id="">
    <input type="submit" value="Rechercher">
</form>

<?php if (isset($_GET['searchUser'])) : ?>

    <ul>

        <?php foreach ($users as $user) : ?>
            <a href="<?= BASE_PATH . 'user/profile?id=' . $user['id']; ?>">
                <?= $user['pseudo']; ?>
            </a>
        <?php endforeach; ?>

    </ul>







<?php endif; ?>

<?php include(VIEWS . '_partials/footer.php'); ?>