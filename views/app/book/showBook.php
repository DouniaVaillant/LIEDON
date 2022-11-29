<?php include(VIEWS . '_partials/header.php'); ?>
<?php $user = User::findById(['id' => $book['id_user']]); ?>

<div class="pageBook">
    <div class="cardShowBook">
        <div class="leftShowBook">

        </div>
        <div class="rightShowBook">
            <div class="allInfos">
                <div class="leftInfos">
                    <div class="targetStatus">
                        <div class="targetShowBook"><?= $book['target_reader']; ?></div>
                        <div class="statusShowBook"><?= $book['status']; ?></div>
                    </div>
                    <div class="synopsisInfos">
                        <div class="caseSynopsis">
                            <p><?= $book['synopsis']; ?></p>
                        </div>
                        <div class="infos">
                            <div class="docBook">
                                <p><strong>Auteur: </strong><?= $book['author']; ?></p>
                                <p><strong>Editeur: </strong><?= $book['editor']; ?></p>
                                <p><strong>Publié en: </strong><?= $book['date_publication']; ?></p>
                            </div>
                            <div class="borrowBook">
                                <?php if (isset($user['id'])) : ?>
                                    <a href="mailto:<?= $user['email']; ?>" class="btn beige bg-lightGreen">Contacter <?= $user['pseudo']; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="userComment">
                        <?php if (isset($user['id'])) : ?>
                            <a class="userShowBook" href="<?= BASE_PATH . 'user/profile?id=' . $book['id_user']; ?>">
                                <img src="<?= BASE . 'upload/photos/profile/' . $user['photo_profile']; ?>" class="roundProfile" style="height: 50px; width: 50px;" alt="Photo de profil">
                                <p>
                                    <?= $user['pseudo']; ?>
                                </p>
                            </a>
                            <div class="caseUserComment">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus omnis quam est voluptas animi architecto expedita hic facere sed possimus necessitatibus odit iste corporis labore magnam molestias, excepturi perspiciatis odio?</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="rightInfos">
                    <h2><?= $book['title']; ?></h2>
                    <img src="<?= BASE . 'upload/book/' . $book['photo']; ?>" alt="Couverture de <?= $book['title']; ?>" height="400">
                </div>

            </div>

        </div>

    </div>

    <div class="otherCommentsBook">
        <div class="leftShowBook">
            <form action="<?= BASE_PATH . 'book/show?id=' . $book['id']; ?>" method="post">
                <div class="mb-3">
                    <label for="comment" class="form-label">Vous avez lu et voulez partager votre avis sur le livre ?</label>
                    <textarea name="comment" class="form-control" id="comment" rows="3" style="resize: none;"></textarea>
                    <small><?= $error['comment'] ?? ""; ?></small>
                    <button class="btn bg-lightGreen lightBrown" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
        <div class="rightShowBook otherComment">
            <?php foreach ($comments as $comment) : ?>
                <?php $otherCommentUser = User::findById(['id' => $comment['id_user']]); ?>
                <?= $comment['comment']; ?>
                <img class="roundProfile" src="<?= BASE . 'upload/photos/profile/' . $otherCommentUser['photo_profile']; ?>" alt="">
                <?= $otherCommentUser['pseudo']; ?> // ! Ca fonctionne pas correctement
            <?php endforeach; ?>
        </div>
    </div>
</div>
















<?php include(VIEWS . '_partials/footer.php'); ?>