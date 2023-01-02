<?php include(VIEWS . '_partials/header.php'); ?>

<div class="showChapter-1 pageShowChapter">



    <div class="showChapter-2-1">
        <div class="showChapter-moreOptions">

            <button id="btn" class="btn-deco-none" onclick="document.getElementById('chapter-moreOptions-<?= $chapter['id']; ?>').classList.toggle('hide');">
                <i class="fa-solid fa-ellipsis-vertical showChapter-report"></i>
            </button>
            
            <div id="chapter-moreOptions-<?= $chapter['id']; ?>" class="chapter-moreOptions hide">
                <ul>
                    <li><a href="<?= BASE_PATH . 'user/profile?id=' . $story['id_user']; ?>">Voir l'auteur</a></li>
                    <li><a href="<?= BASE_PATH . 'report?c=' . $chapter['id']; ?>">Signaler</a></li>
                </ul>
            </div>


            <div class="showChapter-fullscreen">

                <button disabled class="btn">Mode lecture</button>
            </div>

        </div>
        <form action="<?= BASE_PATH . 'story/chapter/show?id=' . $chapter['id']; ?>" method="post">
            <!-- <div> -->
            <button type="submit" class="btn" name="likes">
                <?php if ($likeFound && ($likeFound['likes'] == 1)) : ?>
                    <i class="fa-solid fa-heart"></i>
                <?php else : ?>
                    <i class="fa-regular fa-heart"></i>
                <?php endif; ?>
            </button>
            <span><?= $countLikes; ?></span>
            <!-- </div> -->
        </form>


        <div class="notice">


            <form action="<?= BASE_PATH . 'story/chapter/show?id=' . $chapter['id']; ?>" method="POST">
                <div class="mb-3 showChapter-comment">
                    <label for="comment" class="form-label"></label>
                    <textarea name="comment" class="form-control" placeholder="Commentaire" id="comment" rows="3"></textarea>
                    <small><?= $error['comment'] ?? ""; ?></small>
                    <button class="btn bg-lightGreen darkGreen" type="submit">Envoyer</button>
                </div>
            </form>
        </div>

    </div>


    <div class="showChapter-2-2">

        <h1 class="text-center"><?= $chapter['title']; ?></h1>
        <div class="showChapter-text">
            <p class="px-5">
                <?= $chapter['content']; ?>
            </p>
        </div>

    </div>


    <div class="showChapter-2-3">
        <a class="showChapter-storyTitle" href="<?= BASE . 'user/story/show?id=' . $chapter['id_story']; ?>"><?= $story['title']; ?></a>
        <?php foreach ($chapters as $chapter) : ?>

            <a class="chapter" href="<?= BASE_PATH . 'story/chapter/show?id=' . $chapter['id']; ?>"><?= $chapter['title']; ?></a>

        <?php endforeach; ?>

        <a class="showChapter-storyTitle" href="<?= BASE_PATH . 'user/profile?id=' . $user['id']; ?>"><?= $user['pseudo']; ?></a>
    </div>


</div>

<?php foreach ($comments as $comment) : ?>
    <div class="otherComment">
        <?php $otherCommentUser = User::findById(['id' => $comment['id_commentator']]); ?>
        <img class="roundProfile" src="<?= BASE . 'upload/photos/profile/' . $otherCommentUser['photo_profile']; ?>" alt="Photo de profil">
        <?= $otherCommentUser['pseudo']; ?>
        <p><?= $comment['comment']; ?></p><br>
    </div>
<?php endforeach; ?>






















<?php include(VIEWS . '_partials/footer.php'); ?>