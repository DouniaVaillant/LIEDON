<?php include(VIEWS . '_partials/header.php'); ?>

<h1>Histoires numériques</h1>

<div class="pageStory">
    <?php foreach ($stories as $story) : ?>
        <div class="stories">
            <a href="<?= BASE_PATH . 'library?id=' . $story['id']; ?>"><i class="fa-solid fa-bookmark bookmarkStory"></i></a>
            <a href="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>">
            <div class="cardStory">
                <img class="coverStory" src="<?= BASE . 'upload/story/' . $story['photo']; ?>" alt="Image de couverture">
                <h3 class=""><?= $story['title']; ?></h3>
                <div class="synopsisInfos">
                    <p class=""><?= $story['status']; ?></p>
                    <p class="synopsisStories"><?= $story['synopsis']; ?></p>
                </div>
            </div>
            </a>
        </div>
    <?php endforeach; ?>

</div>


<?php include(VIEWS . '_partials/footer.php'); ?>