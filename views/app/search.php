<?php include(VIEWS . '_partials/header.php'); ?>

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a href="#montreUn">
            montre
        </a>
        <?php foreach ($users as $user) : ?>
            <a id="montreUn" aria-current="page" href="<?= BASE_PATH . 'user/profile?id=' . $user['id']; ?>">
                <?= $user['pseudo']; ?><br>
            </a>
        <?php endforeach; ?>
    </li>
    <li class="nav-item">
        <a href="#">
            montre
        </a>
        <?php foreach ($books as $book) : ?>
            <a href="<?= BASE_PATH . 'book/show?id=' . $book['id']; ?>">
                <?= $book['title']; ?><br>
            </a>
        <?php endforeach; ?>
    </li>
    <li class="nav-item">
        <a href="#">
            montre
        </a>
        <?php foreach ($stories as $story) : ?>
            <a href="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>">
                <?= $story['title']; ?><br>
            </a>
        <?php endforeach; ?>
    </li>
</ul>
















<?php include(VIEWS . '_partials/footer.php'); ?>