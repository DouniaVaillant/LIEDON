<?php include(VIEWS . '_partials/header.php'); ?>

<h1>Mes Histoires</h1>

<a href="<?= BASE_PATH . 'story/add'; ?>" class="btn bg-lightBrown">Créer une histoire</a>

<div class="pageUserStory">


    <?php foreach ($stories as $story) : ?>

        <div class="userStory">

            <a class="userStory-show" href="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>">
                <h3 class="titleUserStories"><?= $story['title']; ?></h3>

                <div class="userStory-card">
                    <img class="userStory-cover" src="<?php if ($story['photo'] == 'Pas de couverture') { echo BASE . 'assets/images/coverDefault.png'; } else { echo BASE . 'upload/story/' . $story['photo']; } ?>" alt="Image de couverture">
                </div>
                <div class="userStory-synopsis">
                    <p class=""><?= $story['synopsis']; ?></p>
                </div>

            </a>
            <div class="userStory-actions">
                <a href="<?= BASE_PATH . 'user/story/edit?id=' . $story['id']; ?>" class="btn bg-soil text-light"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Etes-vous sûr de vouloir supprimer cette histoire ?')" href="<?= BASE_PATH . 'story/delete?id=' . $story['id']; ?>" class="btn bg-soil text-light"><i class="fas fa-trash"></i></a>
                <a href="<?= BASE_PATH . 'story/chapter/add?story=' . $story['id']; ?>" class="btn bg-soil text-light"><i class="fas fa-plus"></i></a>
            </div>
        </div>

    <?php endforeach; ?>


</div>











<?php include(VIEWS . '_partials/footer.php'); ?>