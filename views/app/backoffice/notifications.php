<?php include(VIEWS . '_partials/header.php'); ?>


<h1>Notifications</h1>


<div class="row">


    <aside class="col-3">
        <ul>
            <li>
                <a href="<?= BASE_PATH . 'admin/user/list'; ?>">Utilisateurs</a>
            </li>

            <li>
                <a href="<?= BASE_PATH . 'admin/book/list'; ?>">Livres</a>
            </li>

            <li>
                <a href="<?= BASE_PATH . 'admin/story/list'; ?>">Histoires</a>
            </li>

            <li>
                <a href="#">Emprunts</a>
            </li>

            <li>
                <a href="<?= BASE_PATH . 'admin/report/list'; ?>">Signalements</a>
            </li>

            <li>
                <a href="<?= BASE_PATH . 'admin/notifications'; ?>">Notifications</a>
            </li>
        </ul>
    </aside>

    <div class="col-6 notifsAdmin-message" style="background: rgba(205, 135, 66, 0.3);">
        <!-- <div class=""> -->
        <?php if (isset($message)) :
            $receiver = User::findById(['id' => $message['receiver']]);
            $sentBy = User::findById(['id' => $message['sent_by']]);
        ?>
            <p style="background: #F4F4F4;">
                <?= $sentBy['pseudo']; ?>
                <?= $receiver['pseudo']; ?><br>
                <?= $message['content']; ?><br>
                <?= $message['date_created']; ?><br>
                <?php if ($message['seen'] == 0) {
                    echo 'non vu';
                } else {
                    echo 'vu';
                }; ?>
            </p>
        <?php else :  ?>
            <p>
                Retrouvez ici l'historique des notifications envoyés. <br>
                Selectionnez un message pour voir son détail.
            </p>
        <?php endif; ?>


        <!-- </div> -->
    </div>

    <aside class="col-3">
        <ul>
            <?php foreach ($notifs as $notif) :
                $receiver = User::findById(['id' => $notif['receiver']]);
                $sentBy = User::findById(['id' => $notif['sent_by']]);
            ?>
                <?php if ($receiver != 0) : ?>
                    <li class="notifsAdmin-list bg-lightBrown text-center p-2 mb-3">
                        <a href="<?= BASE_PATH . 'admin/notifications?id=' . $notif['id']; ?>">
                            <h6><?= $notif['subject']; ?></h6>
                            <?php
                            if ($sentBy) {
                                if ($sentBy['roles'] == 'ROLE_MODO') {
                                    echo 'Equipe Liedon';
                                } elseif ($sentBy['roles'] == 'ROLE_ADMIN') {
                                    echo 'Administration';
                                } else {
                                    echo $sentBy['pseudo'];
                                }
                            } else {
                                echo '<i>Utilisateur supprimé</i>';
                            }
                            ?> → <?php if ($receiver) {
                                    echo $receiver['pseudo'];
                                } else {
                                    echo '<i>Utilisateur supprimé</i>';
                                } ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>

        </ul>
    </aside>

</div>

<div class="row notifsAdmin-contacts">
    <?php foreach ($contact as $msg) :
        $sentBy = User::findById(['id' => $msg['sent_by']]);
    ?>
        <?php if ($sentBy) : ?>
            <div class="notifsAdmin-cardContact">
                <a href="<?= BASE_PATH . 'admin/contact/delete?id=' . $msg['id']; ?>">
                    <i class="fas fa-trash soil"></i>
                </a>
                <a href="mailto:<?= $sentBy['email']; ?>"><?= $sentBy['email']; ?></a>
                <h6><?= $msg['subject']; ?></h6>
                <p><?= $msg['content']; ?></p>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>










<?php include(VIEWS . '_partials/footer.php'); ?>