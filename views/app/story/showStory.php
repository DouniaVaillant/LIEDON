<?php include(VIEWS . '_partials/header.php'); ?>
<?php $user = User::findById(['id' => $story['id_user']]); ?>


<div class="btn text-light" style="background: grey;"><?= $story['target_reader']; ?></div>
<div class="btn bg-lightBrown"><?= $story['status']; ?></div>
<h2><?= $story['title']; ?></h2>
<img src="<?= BASE . 'upload/story/' . $story['photo']; ?>" alt="Couverture de <?= $story['title']; ?>" height="400">

<p><strong>Synopsis: <br></strong><?= $story['synopsis']; ?></p>
<p><strong>Langue: </strong><?= $story['language']; ?></p>
<p><strong>Publié le: </strong><?= $story['date_created']; ?></p>


<div class="">
    <?php if (isset($user)) : ?>
        <img src="<?= BASE . 'upload/photos/profile/' . $user['photo_profile']; ?>" class="roundProfile" alt="Photo de profil">
        <?= $user['pseudo']; ?>
    <?php else : ?>
        <p><i>Utilisateur supprimé</i></p>
    <?php endif; ?>
</div>

<div class="col-3">
    <?php if (!empty($chapters)) : ?>
        <?php foreach ($chapters as $chapter) : ?>
            <a href="<?= BASE_PATH . 'story/chapter/show?id=' . $chapter['id']; ?>" class="list-group-item list-group-item-warning text-center rounded-2 py-2 my-2">
                <?= $chapter['title']; ?>
            </a>
        <?php endforeach; ?>
    <?php else : ?>
        <p><i>Aucun chapitre</i></p>
    <?php endif; ?>
    <?php foreach ($comments as $comment) : ?>
        <div class="rightShowBook otherComment">
            <?php $otherCommentUser = User::findById(['id' => $comment['id_commentator']]); ?>
            <img class="roundProfile" src="<?= BASE . 'upload/photos/profile/' . $otherCommentUser['photo_profile']; ?>" alt="">
            <?= $otherCommentUser['pseudo']; ?>
            <p><?= $comment['comment']; ?></p><br>
        </div>
    <?php endforeach; ?>
    <div class="leftShowBook">
            <form action="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>" method="post">
                <div class="mb-3">
                    <label for="comment" class="form-label">Vous avez lu et voulez partager votre avis sur cette histoire ?</label>
                    <textarea name="comment" class="form-control" id="comment" rows="3" style="resize: none;"></textarea>
                    <small><?= $error['comment'] ?? ""; ?></small>
                    <button class="btn bg-lightGreen darkGreen" type="submit">Envoyer</button>
                </div>
            </form>
        </div>

    <form action="<?= BASE_PATH . 'story/show?id=' . $story['id']; ?>" method="post">
        <div>
            <button type="submit" class="btn" name="likes">
                <?php if ($likeFound && ($likeFound['likes'] == 1)) : ?>
                    <i class="fa-solid fa-heart text-danger"></i>
                <?php else : ?>
                    <i class="fa-regular fa-heart text-danger"></i>
                <?php endif; ?>
            </button>
        </div>
    </form>
</div>


<?php include(VIEWS . '_partials/footer.php'); ?>