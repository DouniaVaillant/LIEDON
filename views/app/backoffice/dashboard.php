<?php include(VIEWS . '_partials/header.php'); ?>



<h1 id="dashboard-h1">Tableau de bord</h1>
<div class="pageDashboard">
    <h4>Gestion :</h4>

    <ul>
        <li>
            <a href="<?= BASE_PATH . "admin/user/list"; ?>">Utilisateurs</a>
        </li>
        <li>
            <a href="<?= BASE_PATH . 'admin/story/list'; ?>">Histoires numériques</a>
        </li>
        <li>
            <a href="<?= BASE_PATH . 'admin/book/list'; ?>">Livres papiers</a>
        </li>
        <li>
            <a href="<?= BASE_PATH . 'admin/report/list'; ?>">Signalements</a>
        </li>
        <li>
            <a href="#">Emprunts</a>
        </li>

        <?php if ($_SESSION['user']['roles'] == 'ROLE_ADMIN') : ?>
            <li>
                <a href="<?= BASE_PATH . 'admin/category/list'; ?>">Catégories</a>
            </li>
            <li>
                <a href="<?= BASE_PATH . 'admin/target-reader/list'; ?>">Cibles (lectorat)</a>
            </li>
            <h4>Historique :</h4>
            <li>
                <a href="<?= BASE_PATH . 'admin/notifications'; ?>">Notifs</a>
            </li>
        <?php endif; ?>
    </ul>

</div>






<?php include(VIEWS . '_partials/footer.php'); ?>