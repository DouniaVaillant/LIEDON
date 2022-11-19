<?php include(VIEWS . '_partials/header.php'); ?>


<h1>BACKOFFICE</h1>

<ul class="list-group w-50 text-center">
    <li class=" list-style-none">
        <a href="<?= BASE_PATH . "admin/user/list"; ?>" class="list-group-item list-group-item-success rounded-2">Gestion des utilisateurs</a>
    </li>
    <li>
        <a href="<?= BASE_PATH . 'admin/story/list'; ?>" class="list-group-item list-group-item-success rounded-2 mt-2">Gestion des Histoires numériques</a>
    </li>
    <li>
        <a href="<?= BASE_PATH . 'admin/book/list'; ?>" class="list-group-item list-group-item-success rounded-2 mt-2">Gestion des Livres papiers</a>
    </li>
    <li>
        <a href="#" class="list-group-item list-group-item-success rounded-2 mt-2">Gestion des emprunts</a>
    </li>
    <li>
        <a href="<?= BASE_PATH . 'admin/category/list'; ?>" class="list-group-item list-group-item-warning rounded-2 mt-2">Gestion des catégories</a>
    </li>
    <li>
        <a href="<?= BASE_PATH . 'admin/target-reader/list'; ?>" class="list-group-item list-group-item-warning rounded-2 mt-2">Gestion des cibles (lectorat)</a>
    </li>
</ul>

























<?php include(VIEWS . '_partials/footer.php'); ?>