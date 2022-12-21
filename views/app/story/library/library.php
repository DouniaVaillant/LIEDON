<?php include(VIEWS . '_partials/header.php'); ?>

<div class="pageLibrary">

    <h1>Bibliothèque</h1>

    <div class="library-1">

        <?php foreach ($library as $data) : ?>
            <div class="stories">

                <h3 class="titleStories"><?= $data['title']; ?></h3>

                <a href="<?= BASE_PATH . 'story/show?id=' . $data['id']; ?>">
                    <div class="cardStory">
                        <img class="coverStory" src="<?= BASE . 'upload/story/' . $data['photo']; ?>" alt="Image de couverture">
                    </div>
                </a>


                <div class="">

                    <button id="btn" class="btn-deco-none" onclick="document.getElementById('stories-moreOptions-<?= $data['id']; ?>').classList.toggle('hide');">
                        <i class="fa-solid fa-ellipsis-vertical stories-report"></i>
                    </button>

                    <div id="stories-moreOptions-<?= $data['id']; ?>" class="stories-moreOptions hide">
                        <ul>
                            <li><a href="<?= BASE_PATH . 'library?id=' . $data['id']; ?>">Retirer</a></li>
                            <li><a href="<?= BASE_PATH . 'user/profile?id=' . $data['id_user']; ?>">Voir l'auteur</a></li>
                            <li><a href="<?= BASE_PATH . 'report?s=' . $data['id']; ?>">Signaler</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        <?php endforeach; ?>

    </div>

</div>













<?php include(VIEWS . '_partials/footer.php'); ?>