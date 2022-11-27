<?php include(VIEWS . '_partials/header.php'); ?>
<?php $user = User::findById(['id' => $book['id_user']]); ?>

<div class="page">
    <div class="leftShowBook"></div>
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
                        <p><strong>Auteur: </strong><?= $book['author']; ?></p>
                        <p><strong>Editeur: </strong><?= $book['editor']; ?></p>
                        <p><strong>Publié en: </strong><?= $book['date_publication']; ?></p>
                    </div>
                </div>
                <div class="userComment">
                    <?php if(isset($user['id'])): ?>
                        <a class="userShowBook" href="<?= BASE_PATH . 'user/profile?id=' . $book['id_user']; ?>">
                            <img src="<?= BASE . 'upload/photos/profile/' . $user['photo_profile']; ?>" style="height: 10vh; overflow: hidden;  border-radius:150px;" alt="Photo de profil">
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

















<?php include(VIEWS . '_partials/footer.php'); ?>