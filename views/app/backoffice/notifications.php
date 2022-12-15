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

    <div class="col-6" style="background: rgba(205, 135, 66, 0.3);">
        <div class="notifications-message">
            <?php if (isset($message)) : 
                $receiver = User::findById(['id' => $message['receiver']]);
                $sentBy = User::findById(['id' => $message['sent_by']]);
                ?>
                <p style="background: #F4F4F4;">
                    <?= $sentBy['pseudo']; ?>
                    <?= $receiver['pseudo']; ?>
                    <?= $message['content']; ?>
                    <?= $message['date_created']; ?>
                    <?php if ($message['seen'] == 0) { echo 'non vu'; } else { echo 'vu' ; } ; ?>
                </p>
            <?php else :  ?>
                <p>
                    Retrouvez ici l'historique des notifications envoyés. <br>
                    Selectionnez un message pour voir son détail.
                </p>
            <?php endif; ?>


        </div>
    </div>

    <aside class="col-3">
        <ul>
            <?php foreach ($notifs as $notif) :
                $receiver = User::findById(['id' => $notif['receiver']]);
                $sentBy = User::findById(['id' => $notif['sent_by']]);
            ?>
                <li class="notif bg-lightBrown text-center p-2 mb-3">
                    <a href="<?= BASE_PATH . 'admin/notifications?id=' . $notif['id']; ?>">
                        <?= $notif['subject']; ?><br>
                        <?php if ($sentBy['roles'] == 'ROLE_MODO') { echo 'Equipe Liedon'; } elseif ($sentBy['roles'] == 'ROLE_ADMIN') { echo 'Administration'; } else { echo $sentBy['pseudo']; } ?> → <?= $receiver['pseudo']; ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </aside>

</div>





















<?php include(VIEWS . '_partials/footer.php'); ?>