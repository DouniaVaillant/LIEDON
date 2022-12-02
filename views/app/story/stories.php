<?php include(VIEWS . '_partials/header.php'); ?>

<h1>Histoires numériques</h1>

<div class="pageStory">
    <?php foreach ($stories as $story) : ?>
        <div class="stories">

            <!-- <?php if (empty($inLibrary)) : ?>
                <a href="<?= BASE_PATH . 'library?id=' . $story['id']; ?>"><i class="fa-solid fa-bookmark bookmarkStory"></i></a>

                <?php elseif (!empty($inLibrary)) : ?>
                    <?php if ($inLibrary['id_story'] == $story['id']) : ?>
                        <a href="<?= BASE_PATH . 'library?id=' . $story['id']; ?>"><i class="fa-solid fa-bookmark beige bookmarkStory"></i></a>
                        <?php endif; ?>
                        <?php endif ?> -->

            <a href="<?= BASE_PATH . 'library?id=' . $story['id']; ?>"><i class="fa-solid fa-bookmark <?php if (isset($inLibrary['id_story']) == $story['id']) : ?> bookmarkStoryInLibrary <?php else : ?> bookmarkStory <?php endif; ?>"></i></a>
            <h3 class="titleStories"><?= $story['title']; ?></h3>
            <a href="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>">
                <div class="cardStory">
                    <img class="coverStory" src="<?= BASE . 'upload/story/' . $story['photo']; ?>" alt="Image de couverture">
                </div>
            </a>
        </div>
    <?php endforeach; ?>

</div>


<?php include(VIEWS . '_partials/footer.php'); ?>