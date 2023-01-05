<?php include(VIEWS . '_partials/header.php'); ?>

<!-- <h1>Accueil</h1>
<div class="">
    <?php if (isset($_SESSION['user'])) : ?>
        
        <form action="<?= BASE_PATH; ?>" method="get" class="col-3">
            <input class="form-control" type="text" name="searchUser" id="" placeholder="@pseudo">
            <input class="btn bg-beige" type="submit" value="Rechercher">
            <a href="<?= BASE_PATH; ?>" class="btn bg-transparent border-warning">Réinitialiser</a>
        </form>

        <?php if (isset($_GET['searchUser'])) : ?>
            <ul>
                <?php foreach ($users as $user) : ?>
                    <a href="<?= BASE_PATH . 'user/profile?id=' . $user['id']; ?>">
                        <?= $user['pseudo']; ?> <br>
                    </a>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    <?php endif; ?>
</div> -->

<div class="pageHome">



    <div class="home-2-1">


        <div class="home-3-1">
            <a href="<?= BASE_PATH . 'book/show?id=' . $bookDiscover['id']; ?>">
                <img src="<?= BASE . 'upload/book/' . $bookDiscover['photo']; ?>" alt="" class="home-coverBook">
            </a>
            <div class="home-infosDiscover">
                <h3><?= $bookDiscover['title']; ?></h3>
                <p><?= $bookDiscover['synopsis']; ?></p>
                <a href="<?= BASE_PATH . 'books'; ?>" class="btn border">Voir nos Livres</a>
            </div>
        </div>


        <div class="home-3-2">
            <h2>Documentations et avis de livres</h2>
            <div class="home-display">
                <?php foreach ($books as $book) : ?>
                    <?php $user = User::findById(['id' => $book['id_user']]); ?>
                    <a href="<?= BASE_PATH . 'book/show?id=' . $book['id']; ?>">
                        <div class="cardBook">
                            <div class="right">
                                <img src="<?= BASE . 'upload/book/' . $book['photo']; ?>" alt="Image de couverture" class="coverBook">
                                <h3 class="title"><?= $book['title']; ?></h3>
                            </div>
                            <div class="left">
                                <div class="tags">
                                    <p class="status"><?= $book['status']; ?></p>
                                    <p class="separator">∣</p>
                                </div>
                                <div class="bgSynopsis">
                                    <p class="synopsis"><?= $book['synopsis']; ?></p>
                                </div>
                                <div class="comment">
                                    <?php if (isset($user['id'])) : ?>
                                        <div class="user">
                                            <img class="photoProfile" src="<?= BASE . 'upload/photos/profile/' . $user['photo_profile']; ?>" alt="Photo de profil">
                                            <?= $user['pseudo']; ?>
                                        </div>
                                        <div class="bgCommentUser">
                                            <p class="commentUser"><?= $book['notice']; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>


    </div>


    <div class="home-separator"></div>



    <div class="home-2-2">


        <div class="home-3-1">
            <a href="<?= BASE_PATH . 'story/show?id=' . $storyDiscover['id']; ?>">
                <img src="<?= BASE . 'upload/story/' . $storyDiscover['photo']; ?>" alt="" class="home-coverBook">
            </a>
            <div class="home-infosDiscover">
                <h3><?= $storyDiscover['title']; ?></h3>
                <p><?= $storyDiscover['synopsis']; ?></p>
                <a href="<?= BASE_PATH . 'stories'; ?>" class="btn border">Voir nos Histoires</a>
            </div>
        </div>


        <div class="home-3-2">
            <h2>Les histoires de nos membres</h2>
            <div class="home-display">

                <?php foreach ($stories as $story) : ?>
                    <div class="stories">

                        <a href="<?= BASE_PATH . 'library?id=' . $story['id']; ?>"><i class="fa-solid fa-bookmark <?php if (isset($inLibrary['id_story']) == $story['id']) : ?> bookmarkStoryInLibrary <?php else : ?> bookmarkStory <?php endif; ?>"></i></a>

                        <h3 class="titleStories"><?= $story['title']; ?></h3>

                        <div class="stories-show cardStory">
                            <a href="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>">
                                <div class="">
                                    <img class="coverStory" src="<?php if ($story['photo'] == 'Pas de couverture') {
                                                                        echo BASE . 'assets/images/coverDefault.png';
                                                                    } else {
                                                                        echo BASE . 'upload/story/' . $story['photo'];
                                                                    } ?>" alt="Image de couverture">
                                </div>
                                <div class="stories-synopsis">
                                    <p class=""><?= $story['synopsis']; ?></p>
                                </div>
                            </a>
                        </div>

                    </div>


                    <div class="clickevent">

                        <button id="btn" class="btn-deco-none" onclick="document.getElementById('stories-moreOptions-<?= $story['id']; ?>').classList.toggle('hide');">
                            <i class="fa-solid fa-ellipsis-vertical stories-report"></i>
                        </button>

                        <div id="stories-moreOptions-<?= $story['id']; ?>" class="stories-moreOptions hide">
                            <ul>
                                <li><a href="#">Lire</a></li>
                                <li><a href="<?= BASE_PATH . 'user/profile?id=' . $story['id_user']; ?>">Voir l'auteur</a></li>
                                <li><a href="<?= BASE_PATH . 'report?s=' . $story['id']; ?>">Signaler</a></li>
                            </ul>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </div>



</div>















<?php include(VIEWS . '_partials/footer.php'); ?>